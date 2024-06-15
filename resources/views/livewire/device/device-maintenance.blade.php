<div>
    <section class="px-4 pt-8 sm:px-6">
        {{-- Page Header --}}
        <div class="flex flex-wrap place-items-center justify-between">
            {{-- Title --}}
            @if (!is_null($device->id))
                <x-pages.page-title title="Pemeliharaan {{ $device->name }} ({{ $device->serial }})" />
            @else
                <x-pages.page-title title="Daftar Pemeliharaan Perangkat TI"/>
            @endif

            {{-- Add Maintenance --}}
            @if (!is_null($device->id))
                <x-pages.page-button :route="route('device-maintenance.create', $device->id)" title="Pemeliharaan" />
            @endif
        </div>

        {{-- Content --}}
        <div class="mt-14 mb-7">
            <x-forms.inputs.search />

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
                                <th scope="col" class="px-6 py-3">Deskripsi</th>
                                @role('admin|keuangan')
                                    <th scope="col" class="px-6 py-3">Aksi</th>
                                @endrole
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($maintenances as $maintenance)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="w-4 p-4">
                                        <div class="flex place-items-center">
                                            <input id="checkbox-table-search-1" type="checkbox"
                                                class="w-4 h-4 text-primary-600 bg-gray-100 border-gray-300 rounded focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                        </div>
                                    </td>
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <div class="text-gray-900 dark:text-white">#{{ $maintenance->ticket }}</div>
                                    </th>
                                    <td class="px-6 py-4" width="12%">
                                        {{ $maintenance->device->state->user->name ?? '-' }}
                                    </td>
                                    <td class="px-6 py-4 space-y-1" width="20%">
                                        <p class="text-gray-500 dark:text-gray-400 font-bold">
                                            {{ $maintenance->device->type . ' ' . $maintenance->device->brand }}
                                        </p>
                                        <p class="text-gray-900 dark:text-white">{{ ucwords($maintenance->device->name) }}</p>
                                        <p class="text-gray-500 dark:text-gray-400 text-xs">
                                            No. Seri: {{ $maintenance->device->serial }}
                                        </p>
                                    </td>
                                    <td class="px-6 py-4 space-y-3">
                                        <div class="text-md">
                                            <x-pages.condition :condition="$maintenance->condition" />
                                        </div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400 flex flex-nowrap place-items-center space-x-2">
                                            <x-icons.herosolid name="calendar-days" class="h-4 w-4" />
                                            <span>{{ $maintenance->created_at->format('d M Y') }}</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 space-y-2">
                                        <div class="text-md font-bold">
                                            {{ ucwords($maintenance->maintenance) }}
                                        </div>
                                        <div class="mb-2 text-xs text-gray-500 dark:text-gray-400 flex flex-nowrap place-items-center space-x-2">
                                            <x-icons.herosolid name="calendar-days" class="h-4 w-4" />
                                            <span>{{ is_null($maintenance->completed_at) ? '-' : $maintenance->completed_at->format('d M Y') }}</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <p>{!! $maintenance->description !!}</p>
                                    </td>
                                    @role('admin|keuangan')
                                    <td class="px-6 py-4">
                                        @role('admin')
                                            <span class="mr-2 flex place-items-center space-x-2 py-2">
                                                <x-pages.cell-button :route="route('device-maintenance.edit', $maintenance->ticket)"
                                                    tooltip="Update" color="text-primary-400 hover:text-primary-500" icon="pencil-square" />
                                            </span>
                                        @endrole

                                        @role('keuangan')
                                            <span class="mr-2 flex place-items-center space-x-2 py-2">
                                                <x-pages.confirm-cell-button label="Konfirmasi" :id="$maintenance->ticket" />
                                            </span>
                                        @endrole
                                    </td>
                                    @endrole
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>

        {{-- Pagination Content --}}
        {{ $maintenances->links('vendor.livewire.tailwind') }}

        {{-- Confirm Maintenance --}}
        <x-forms.modals.maintenance-confirmation />
    </section>
</div>

<x-pages.notifscript />
