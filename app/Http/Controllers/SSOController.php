<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use JKD\SSO\Client\Provider\Keycloak;
;
class SSOController extends Controller
{
    private $provider;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');

        $this->provider = new Keycloak([
            'authServerUrl' => env('SSO_Url'),
            'realm'         => env('SSO_Realm'),
            'clientId'      => env('Client_Id'),
            'clientSecret'  => env('Client_Secret'),
            'redirectUri'   => env('Client_URL')
        ]);
    }

    public function sso(Request $request)
    {
        if(Auth::check()) return redirect('/');

        if (!$request->input('code')) {

            // Untuk mendapatkan authorization code
            $authUrl = $this->provider->getAuthorizationUrl();

            $request->session()->put('oauth2state', $this->provider->getState());

            return Redirect::to($authUrl);

        }  else if (!$request->has('state') || ($request->get('state') !== $request->session()->get('oauth2state'))) {

            $request->session()->forget('oauth2state');

            return redirect('/login')->withErrors(['user' => 'Terjadi kesalahan']);

        } else {
            try {
                $token = $this->provider->getAccessToken('authorization_code', ['code' => $request->get('code')]);
            } catch (Exception $e) {
                Log::error('Gagal mendapatkan akses token : '.$e->getMessage());

                return redirect('/login')->withErrors(['user' => 'Terjadi kesalahan']);
            }


            $data_owner = $this->provider->getResourceOwner($token);

            $data_owner_arr = $data_owner->toArray();

            $user = User::where('username',  $data_owner_arr['username'])-> first();

            if ($user) {
                try {
                    DB::beginTransaction();

                    if (array_key_exists("name",$data_owner_arr) && $data_owner_arr['name'])
                        $user->name = $data_owner_arr['name'];

                    if (array_key_exists("nip",$data_owner_arr) && $data_owner_arr['nip'])
                        $user->employee_id = $data_owner_arr['nip'];

                    if (array_key_exists("nip-lama",$data_owner_arr) && $data_owner_arr['nip-lama'])
                        $user->bps_id = $data_owner_arr['nip-lama'];

                    if (array_key_exists("foto",$data_owner_arr) && $data_owner_arr['foto'])
                        $user->photo = $data_owner_arr['foto'];

                    $user->save();

                    DB::commit();
                } catch (Exception $error) {
                    DB::rollBack();

                    Log::error($error->getMessage());

                    return redirect('/login')->withErrors(['username' => 'User tidak ditemukan']);
                }

                if (Auth::loginUsingId($user->id, true)) return redirect()->intended(route('dashboard'));

            } else {
                return redirect('/login')->withErrors(['username' => 'Anda tidak mempunyai akses untuk aplikasi ini']);
            }
        }
    }

    public function logout(Request $request)
    {
        $request->session()->forget('oauth2state');

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
