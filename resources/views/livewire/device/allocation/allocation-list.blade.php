<div>
    <section class="px-4 pt-8 sm:px-6">
        {{-- Title --}}
        <x-pages.page-title title="Alokasi Perangkat TI" />

        {{-- Content --}}
        <div class="mb-6 mt-10">
            <div class="mb-4">
                <x-forms.inputs.search placeholder="Cari Informasi Alokasi ..." />
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
                                        @if (!is_null($state->user))
                                            <p class="mb-1 text-gray-900 dark:text-white">{{ $state->user }}</p>
                                            <span class="text-gray-500 dark:text-gray-400">{{ $state->email }}</span>
                                        @else
                                            -
                                        @endif
                                    </th>

                                    {{-- Perangkat TI --}}
                                    <td class="px-6 py-4">
                                        <span class="font-normal">{{ $state->type ?? '-' }}</span>
                                        <p class="my-1 text-gray-900 dark:text-white">{{ $state->namedevice ?? '-' }}
                                        </p>
                                        <span class="font-normal text-primary-600 dark:text-gray-400">
                                            No. Seri : {{ $state->serial ?? '-' }}
                                        </span>
                                    </td>

                                    {{-- Nomor BMN --}}
                                    <td class="px-6 py-4">
                                        <span class="text-gray-900 dark:text-white">{{ $state->bmn ?? '-' }}</span>
                                    </td>

                                    {{-- BAST --}}
                                    <td class="px-6 py-4">
                                        <span class="font-normal">No. {{ $state->bast_no }}</span>
                                        <div
                                            class="flex flex-nowrap place-items-center my-1 text-gray-500 dark:text-gray-400 space-x-2">
                                            <x-icons.herosolid name="calendar-days" class="h-5 w-5" />
                                            <span>
                                                {{ is_null($state->receipt_at) ? '-' : $state->receipt_at->format('d M Y') }}
                                            </span>
                                        </div>
                                    </td>

                                    {{-- Kondisi --}}
                                    <td class="px-6 py-4">
                                        @isset($state->device->maintenance)
                                            @if (count($state->device->maintenance) == 0)
                                                <x-pages.label-color.device-condition condition="baik" />
                                            @else
                                                <x-pages.label-color.device-condition :condition="$state->device->maintenance->sortBy('created_at')->last()
                                                    ->condition" />
                                            @endif
                                        @else
                                            <x-pages.label-color.device-condition condition="baik" />
                                        @endisset
                                    </td>

                                    {{-- Aksi --}}
                                    @role('admin|umum')
                                        <td class="px-6 py-4">
                                            <div class="flex place-items-center space-x-3">
                                                {{-- Edit Perangkat --}}
                                                @can('update-device')
                                                    <x-pages.cell-button.navigate :route="route('device.edit', $state->device_id)" tooltip="Perangkat"
                                                        color="text-primary-500 hover:text-primary-600"
                                                        icon="computer-desktop" />
                                                @endcan

                                                {{-- Alokasi Perangkat --}}
                                                @canany(['create-device-state', 'update-device-state'])
                                                    <x-pages.cell-button.navigate
                                                        route="{{ !is_null($state->id) ? route('device.allocation.edit', $state->id) : route('allocation.create', $state->device->id) }}"
                                                        tooltip="Alokasi" color="text-green-500 hover:text-green-600"
                                                        icon="pencil-square" />
                                                @endcanany

                                                {{-- Pemeliharaan --}}
                                                @canany(['create-device-maintenance', 'update-device-maintenance'])
                                                    <x-pages.cell-button.navigate :route="route('device.maintenance.list', $state->device_id)" tooltip="Pemeliharaan"
                                                        color="text-yellow-400 hover:text-yellow-500"
                                                        icon="shield-exclamation" />
                                                @endcanany

                                                @can('delete-device-state')
                                                    <x-pages.cell-button.delete-item :id="$state->id" />
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

        {{-- Delete Modal --}}
        <x-forms.modals.delete-confirmation />
    </section>
</div>

<x-pages.notifscript />
