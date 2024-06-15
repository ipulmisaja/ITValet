<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        $json = File::get('database/data/user7600.json');
        $data = json_decode($json);

        foreach ($data as $item) {
            $user = User::create([
                'name'        => $item->name,
                'username'    => explode('@', $item->email)[0] ?? null,
                'email'       => $item->email ?? null,
                'password'    => bcrypt('itvalet7600') ?? null,
                'bps_id'      => $item->bps_id ?? null,
                'employee_id' => $item->employee_id ?? null,
                "type"        => $item->type
            ]);

            if ($item->type === 'Perorangan') $user->assignRole($item->role);
        }
    }
}
