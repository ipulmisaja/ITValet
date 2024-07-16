<div>
    <section class="px-4 pt-8 sm:px-6">
        {{-- Title --}}
        <x-pages.page-title title="Alokasi Perangkat {{ $pageTitle }}" />

        {{-- Content --}}
        <div class="mb-6 mt-10">
            <div
                class="items-center justify-between block sm:flex md:divide-x md:divide-gray-100 dark:divide-gray-700 mb-4">
                <div class="flex items-center mb-4 sm:mb-0">
                    <x-forms.inputs.search placeholder="Cari informasi perangkat..." />
                </div>
                @can('create-device')
                    <x-buttons.page wire:click.prevent="addStock" icon="plus-circle" title="Stok" />
                @endcan
            </div>

            @if ($states->isEmpty())
                <x-images.not-found />
            @else
                <div class="relative overflow-x-auto shadow rounded-lg">
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
                                <th scope="col" class="px-6 py-3">Alokasi</th>
                                <th scope="col" class="px-6 py-3">Perangkat TI</th>
                                <th scope="col" class="px-6 py-3">Nomor BMN</th>
                                <th scope="col" class="px-6 py-3">BAST</th>
                                <th scope="col" class="px-6 py-3">Kondisi</th>
                                @role('admin|umum')
                                    <th scope="col" class="px-6 py-3">Aksi</th>
                                @endrole
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($states as $state)
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600">
                                    <td class="w-4 p-4">
                                        <div class="flex place-items-center">
                                            <input id="checkbox-table-search-1" type="checkbox"
                                                class="w-4 h-4 text-primary-600 bg-gray-100 border-gray-300 rounded focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                        </div>
                                    </td>

                                    {{-- Alokasi --}}
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        @if ($state->states->count() > 0)
                                            <p class="mb-1 text-gray-900 dark:text-white">
                                                {{ $state->states[0]->user->name }}</p>
                                            <span
                                                class="text-gray-500 dark:text-gray-400">{{ $state->states[0]->user->email }}</span>
                                        @else
                                            -
                                        @endif
                                    </th>

                                    {{-- Perangkat TI --}}
                                    <td class="px-6 py-4">
                                        <span class="font-normal">{{ $state->master->type ?? '-' }}</span>
                                        <p class="my-1 text-gray-900 dark:text-white">{{ $state->master->name ?? '-' }}
                                        </p>
                                        <span class="font-normal text-primary-600 dark:text-gray-400">
                                            No. Seri : {{ $state->serial ?? '-' }}
                                        </span>
                                    </td>

                                    {{-- Nomor BMN --}}
                                    <td class="px-6 py-4">
                                        <span class="text-gray-900 dark:text-white">
                                            {{ $state->bmn_number ?? '-' }}
                                        </span>
                                    </td>

                                    {{-- BAST --}}
                                    <td class="px-6 py-4">
                                        <span class="font-normal">
                                            No. {{ $state->states[0]->bast_no ?? '-' }}
                                        </span>
                                        <div
                                            class="flex flex-nowrap place-items-center my-1 text-gray-500 dark:text-gray-400 space-x-2">
                                            <x-icons.herosolid name="calendar-days" class="h-5 w-5" />
                                            <span>
                                                {{-- {{ is_null($state->states[0]->receipt_at) ? '-' : $state->states[0]->receipt_at->format('d M Y') }} --}}
                                            </span>
                                        </div>
                                    </td>

                                    {{-- Kondisi --}}
                                    <td class="px-6 py-4">
                                        @if ($state->maintenances->count() > 0)
                                            <x-pages.label-color.device-condition :condition="$state->maintenances->sortBy('created_at')->last()->condition" />
                                        @else
                                            <x-pages.label-color.device-condition condition="baik" />
                                        @endif
                                    </td>

                                    {{-- Aksi --}}
                                    @role('admin|umum')
                                        <td class="px-6 py-4">
                                            <div class="flex place-items-center space-x-3">
                                                {{-- Edit Perangkat --}}
                                                @can('update-device')
                                                    <x-buttons.table-action data-drawer-target="drawer-edit-device"
                                                        data-drawer-show="drawer-edit-device" data-drawer-placement="right"
                                                        aria-controls="drawer-edit-device"
                                                        wire:click.prevent="addDeviceInformation('{{ $state->id }}')"
                                                        icon="computer-desktop" tooltip="Perangkat"
                                                        @class(['text-primary-500 hover:text-primary-600 cursor-pointer']) />
                                                @endcan

                                                {{-- Alokasi Perangkat --}}
                                                @canany(['create-device-state', 'update-device-state'])
                                                    <x-buttons.table-action data-drawer-target="drawer-edit-allocation"
                                                        data-drawer-show="drawer-edit-allocation" data-drawer-placement="right"
                                                        aria-controls="drawe-edit-allocation"
                                                        wire:click.prevent="addAllocationInformation('{{ $state->id }}')"
                                                        icon="pencil-square" tooltip="Alokasi" @class(['text-green-500 hover:text-green-600 cursor-pointer']) />
                                                @endcanany

                                                {{-- Pemeliharaan --}}
                                                @canany(['create-device-maintenance', 'update-device-maintenance'])
                                                    <x-buttons.table-action wire:navigate :href="route('device.maintenance.list', $state->id)"
                                                        tooltip="Pemeliharaan" icon="shield-exclamation"
                                                        @class(['text-yellow-400 hover:text-yellow-500 cursor-pointer']) />
                                                @endcanany

                                                @can('delete-device-state')
                                                    <x-buttons.table-action
                                                        wire:click.prevent="deleteDeviceInformation('{{ $state->id }}')"
                                                        icon="trash" tooltip="Hapus" @class(['text-red-500 hover:text-red-600']) />
                                                @endcan
                                            </div>
                                        </td>
                                    @endrole
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>

        {{-- Pagination Content --}}
        {{ $states->links('vendor.livewire.tailwind') }}

        {{-- Edit Device Drawer --}}
        <x-forms.modals.drawer drawer="drawer-edit-device" title="Edit Informasi Perangkat" icon="computer-desktop">
            <div class="mb-6">
                <x-forms.inputs.text model="deviceDetailForm.serial" type="text" label="No. Seri" />
            </div>
            <div class="mb-6">
                <x-forms.inputs.text model="deviceDetailForm.bmn" type="text" label="No. BMN" />
            </div>
            <div class="mb-6">
                <x-forms.inputs.text-area model="deviceDetailForm.information" label="Informasi Tambahan" />
            </div>
            <form wire:submit="storeDevice">
                <button type="submit" data-drawer-hide="drawer-edit-device" aria-controls="drawer-edit-device"
                    class="text-white justify-center flex items-center bg-primary-700 hover:bg-primary-800 w-full focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                    Simpan
                </button>
            </form>
        </x-forms.modals.drawer>

        {{-- Alokasi Perangkat Drawer --}}
        <x-forms.modals.drawer drawer="drawer-edit-allocation" title="Edit Alokasi Perangkat" icon="pencil-square">
            <div class="mb-6">
                <x-forms.inputs.tom-select model="deviceAllocationForm.user" label="Pengguna Perangkat"
                    :optitem="$this->users" :disabled="auth()->user()->roles->first()->name !== 'admin' ? true : null" />
            </div>
            <div class="mb-6">
                <x-forms.inputs.datepicker model="deviceAllocationForm.bast_date" label="Tanggal" />
            </div>
            <div class="mb-6">
                <x-forms.inputs.text model="deviceAllocationForm.bast_number" label="Nomor BAST" type="text" />
            </div>
            <form wire:submit="storeAllocation">
                <button type="submit" data-drawer-hide="drawer-edit-allocation"
                    aria-controls="drawer-edit-allocation"
                    class="text-white justify-center flex items-center bg-primary-700 hover:bg-primary-800 w-full focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                    Simpan
                </button>
            </form>
            <button wire:click="deleteAllocation" type="button" data-drawer-hide="drawer-edit-allocation"
                aria-controls="drawer-edit-allocation"
                class="text-white justify-center flex items-center bg-red-700 hover:bg-red-800 w-full focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800">
                Hapus
            </button>
        </x-forms.modals.drawer>

        {{-- Delete Modal --}}
        <x-forms.modals.delete-confirmation />
    </section>
</div>
