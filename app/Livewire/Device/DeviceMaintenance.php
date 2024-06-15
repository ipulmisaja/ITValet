<?php

namespace App\Livewire\Device;

use App\Models\Device;
use App\Models\DeviceMaintenance as MaintenanceModel;
use App\Models\User;
use App\Repositories\DeviceMaintenanceRepository;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

class DeviceMaintenance extends Component
{
    use WithPagination;

    public int $numberOfPagination = 10;
    public ?string $searchKeyword  = null;

    public Device $device;

    public bool $modal = false;

    public string $ticket;

    #[Computed]
    public function condition(): array
    {
        $result = MaintenanceModel::get('condition')->groupBy('condition')->map->count();

        return $result->toArray();
    }

    public function mount(Device $device)
    {
        $this->device = $device;
    }

    #[Title('Pemeliharaan Perangkat')]
    public function render()
    {
        return view('livewire.device.device-maintenance', [
            'maintenances' => DeviceMaintenanceRepository::read(
                auth()->user()->roles[0]->name,
                $this->device->id,
                $this->searchKeyword,
                $this->numberOfPagination
            )
        ]);
    }

    public function confirmItem(string $ticket)
    {
        $this->ticket = $ticket;

        $this->modal  = true;
    }

    public function confirmMaintenance(): void
    {
        try {
            DB::beginTransaction();

            MaintenanceModel::where('ticket', $this->ticket)->update([
                'maintenance'    => 'sedang perbaikan',
                'maintenance_at' => Carbon::now()
            ]);

            $notification = new \MBarlow\Megaphone\Types\Important(
                'Notifikasi',
                'Pengajuan pemeliharaan tiket #' . $this->ticket . ' disetujui.',
                route('device-maintenance')
            );

            $user = User::find('2e034053-7883-4738-8836-a1dab1e5fa9d');
            $user->notify($notification);

            DB::commit();
        } catch(Exception $error) {
            DB::rollBack();

            Log::error($error->getMessage());
        }

        $this->modal = false;

    }
}
