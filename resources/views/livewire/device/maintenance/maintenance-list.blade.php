<div>
    <section class="px-4 pt-8 sm:px-6">
        {{-- Page Title --}}
        @if (!is_null($device->id))
            <x-pages.page-title title="Pemeliharaan {{ $device->master->name }} ({{ $device->serial }})" />
        @else
            <x-pages.page-title title="Daftar Pemeliharaan Perangkat TI" />
        @endif

        {{-- Content --}}
        <div class="mb-6 mt-10">
            <div
                class="items-center justify-between block sm:flex md:divide-x md:divide-gray-100 dark:divide-gray-700 mb-4">
                <div class="flex items-center mb-4 sm:mb-0">
                    <x-forms.inputs.search placeholder="Cari Informasi Pemeliharaan ..." />
                </div>
                @if (!is_null($device->id))
                    <x-buttons.page wire:click.prevent="addMaintenance" icon="plus-circle" title="Pemeliharaan" />
                @else
                    <x-buttons.page wire:navigate :href="route('maintenance.memo')" icon="document-magnify" title="Memo" />
                @endif
            </div>

            <div class="relative overflow-x-auto shadow rounded-lg">
                @if ($maintenances->isEmpty())
                    <x-images.not-found />
                @else
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-800 uppercase bg-gray-300 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="p-4">
                                    <div class="flex place-items-center">
                                        <input id="checkbox-all-search" type="checkbox"
                                            class="w-4 h-4 text-primary-600 bg-gray-100 border-gray-300 rounded focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">Tiket</th>
                                <th scope="col" class="px-6 py-3">Nama Pegawai / Unit</th>
                                <th scope="col" class="px-6 py-3">Nama Perangkat</th>
                                <th scope="col" class="px-6 py-3">Kondisi Perangkat</th>
                                <th scope="col" class="px-6 py-3">Status Pemeliharaan</th>
                                <th scope="col" class="px-6 py-3">Perbaikan Diluar</th>
                                @role('admin')
                                    <th scope="col" class="px-6 py-3">Aksi</th>
                                @endrole
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($maintenances as $maintenance)
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="w-4 p-4">
                                        <div class="flex place-items-center">
                                            <input id="checkbox-table-search-1" type="checkbox"
                                                class="w-4 h-4 text-primary-600 bg-gray-100 border-gray-300 rounded focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                        </div>
                                    </td>

                                    {{-- Nomor Tiket  --}}
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <div class="text-gray-900 dark:text-white">#{{ substr($maintenance->id, 0, 8) }}
                                        </div>
                                    </th>

                                    {{-- Nama Pemegang Perangkat --}}
                                    <td class="px-6 py-4" width="15%">
                                        {{ $maintenance->device->states[0]->user->name ?? '-' }}
                                    </td>

                                    {{-- Identitas Perangkat --}}
                                    <td class="px-6 py-4 space-y-1" width="20%">
                                        <p class="text-gray-500 dark:text-gray-400 font-bold">
                                            {{ $maintenance->device->master->type . ' ' . $maintenance->device->master->brand }}
                                        </p>
                                        <p class="text-gray-900 dark:text-white">
                                            {{ ucwords($maintenance->device->master->name) }}</p>
                                        <p class="text-gray-500 dark:text-gray-400 text-xs">
                                            No. Seri: {{ $maintenance->device->serial }}
                                        </p>
                                    </td>

                                    {{-- Kondisi Perangkat --}}
                                    <td class="px-6 py-4 space-y-2">
                                        <div class="text-gray-800 dark:text-white text-md">
                                            <x-pages.label-color.device-condition :condition="$maintenance->condition" />
                                        </div>
                                        <div
                                            class="text-xs text-gray-500 dark:text-gray-400 flex flex-nowrap items-center space-x-2">
                                            <x-icons.herosolid name="calendar-days" class="h-4 w-4" />
                                            <span>{{ $maintenance->created_at->format('d M Y') }}</span>
                                        </div>
                                    </td>

                                    {{-- Status Pemeliharaan --}}
                                    <td class="px-6 py-4 space-y-2">
                                        <div class="text-md">
                                            <x-pages.label-color.maintenance-state :state="$maintenance->maintenance" />
                                        </div>
                                        <div
                                            class="mb-2 text-xs text-gray-500 dark:text-gray-400 flex flex-nowrap place-items-center space-x-2">
                                            <x-icons.herosolid name="calendar-days" class="h-4 w-4" />
                                            <span>{{ is_null($maintenance->completed_at) ? '-' : $maintenance->completed_at->format('d M Y') }}</span>
                                        </div>
                                    </td>

                                    {{-- Perbaikan Diluar --}}
                                    <td class="px-6 py-4 space-y-2">
                                        <div class="text-md">
                                            <x-pages.label-color.repair-request :repair="$maintenance->repair_request" />
                                        </div>
                                        <div
                                            class="mb-2 text-xs text-gray-500 dark:text-gray-400 flex flex-nowrap place-items-center space-x-2">
                                            <x-icons.herosolid name="document-magnify" class="h-4 w-4" />
                                            <button
                                                wire:click="generateMemo('{{ $maintenance->memo->number ?? null }}')">No.
                                                Memo :
                                                {{ $maintenance->memo->number ?? '-' }}</button>
                                        </div>
                                    </td>

                                    {{-- Aksi --}}
                                    <td class="px-6 py-4">
                                        <div class="flex place-items-center space-x-3">
                                            <x-buttons.table-action data-drawer-target="drawer-edit-maintenance"
                                                data-drawer-show="drawer-edit-maintenance" data-drawer-placement="right"
                                                aria-controls="drawe-edit-maintenance"
                                                wire:click.prevent="editMaintenance('{{ $maintenance->id }}')"
                                                tooltip="Update" icon="pencil-square" @class(['text-primary-400 hover:text-primary-500 cursor-pointer']) />

                                            <x-buttons.table-action
                                                wire:click.prevent="deleteMaintenance('{{ $maintenance->id }}')"
                                                icon="trash" tooltip="Hapus" @class(['text-red-500 hover:text-red-600 cursor-pointer']) />
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>

        {{-- Pagination Content --}}
        {{ $maintenances->links('vendor.livewire.tailwind') }}

        {{-- Tambah Maintenance --}}
        <x-forms.modals.builder title="Pemeliharaan Baru">
            <form wire:submit="storeMaintenance">
                <div class="px-6 pb-4">
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <x-forms.inputs.text model="maintenanceForm.device_name" label="Nama Perangkat"
                                type="text" />
                        </div>
                        <div class="col-span-2">
                            <x-forms.inputs.select model="maintenanceForm.condition" label="Kondisi Perangkat"
                                :optitem="$conditionOpt" placeholder="Pilih kondisi perangkat ..." :disabled="null" />
                        </div>
                        <div class="col-span-2">
                            <x-forms.inputs.text-area model="maintenanceForm.description" label="Deskripsi" />
                        </div>
                    </div>
                </div>
                <div class="rounded-b-md bg-gray-200 dark:bg-gray-600 px-6 py-4">
                    <button type="submit"
                        class="flex py-2 px-3 text-sm font-medium ml-auto text-center text-white bg-primary-600 rounded-md hover:bg-primary-700 dark:bg-primary-500 dark:hover:bg-primary-600">
                        <div wire:loading>
                            <x-icons.flowbite-solid name="animate-spin" class="w-5 h-5" />
                        </div>
                        <span>Simpan Informasi Pemeliharaan</span>
                    </button>
                </div>
            </form>
        </x-forms.modals.builder>

        {{-- Edit Maintenance --}}
        <x-forms.modals.drawer drawer="drawer-edit-maintenance" title="Edit Informasi Pemeliharaan" icon="truck">
            <div class="mb-6">
                <x-forms.inputs.text model="maintenanceForm.device_name" label="Nama Perangkat" type="text" />
            </div>
            <div class="mb-6">
                <x-forms.inputs.select model="maintenanceForm.condition" label="Kondisi Perangkat" :optitem="$conditionOpt"
                    placeholder="Pilih kondisi perangkat ..." :disabled="null" />
            </div>
            <div class="mb-6">
                <x-forms.inputs.text-area model="maintenanceForm.description" label="Deskripsi" />
            </div>
            <div class="mb-6">
                <x-forms.inputs.select model="maintenanceForm.status" label="Status Perbaikan" :optitem="$actionOpt" />
            </div>
            <div class="mb-6">
                <x-forms.inputs.select model="maintenanceForm.repair" label="Perbaikan Diluar" :optitem="$repairOpt" />
            </div>
            <form wire:submit="updateMaintenance">
                <button type="submit" data-drawer-hide="drawer-edit-maintenance"
                    aria-controls="drawer-edit-maintenance"
                    class="text-white justify-center flex items-center bg-primary-700 hover:bg-primary-800 w-full focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                    Simpan
                </button>
            </form>
        </x-forms.modals.drawer>

        {{-- Confirm Maintenance --}}
        <x-forms.modals.delete-confirmation />
    </section>
</div>
