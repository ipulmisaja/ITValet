<div>
    <section class="px-4 pt-8 sm:px-6">
        {{-- Page Header --}}
        <div class="flex flex-wrap place-items-center justify-between">
            {{-- Title --}}
            @if (!is_null($device->id))
                <x-pages.page-title title="Pemeliharaan {{ $device->name }} ({{ $device->serial }})" />
            @else
                <x-pages.page-title title="Daftar Pemeliharaan Perangkat TI" />
            @endif

            {{-- Add Maintenance --}}
            @if (!is_null($device->id))
                <x-pages.page-button :route="route('device.maintenance.create', $device->id)" icon="plus-circle" title="Pemeliharaan" />
            @endif
        </div>

        {{-- Content --}}
        <div class="mb-6 mt-10">
            <div
                class="items-center justify-between block sm:flex md:divide-x md:divide-gray-100 dark:divide-gray-700 mb-4">
                <div class="flex items-center mb-4 sm:mb-0">
                    <x-forms.inputs.search placeholder="Cari Informasi Pemeliharaan ..." />

                    <div class="flex items-center w-full sm:justify-end">
                        <div class="flex pl-2 space-x-1">
                            <a href="#"
                                class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <a href="#"
                                class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <a href="#"
                                class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <a href="#"
                                class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <x-pages.page-button :route="route('device.maintenance.memo')" icon="document-magnify" title="Memo" />
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
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <div class="text-gray-900 dark:text-white">#{{ substr($maintenance->id, 0, 8) }}
                                        </div>
                                    </th>
                                    <td class="px-6 py-4" width="15%">
                                        {{ $maintenance->device->state->user->name ?? '-' }}
                                    </td>
                                    <td class="px-6 py-4 space-y-1" width="20%">
                                        <p class="text-gray-500 dark:text-gray-400 font-bold">
                                            {{ $maintenance->device->type . ' ' . $maintenance->device->brand }}
                                        </p>
                                        <p class="text-gray-900 dark:text-white">
                                            {{ ucwords($maintenance->device->name) }}</p>
                                        <p class="text-gray-500 dark:text-gray-400 text-xs">
                                            No. Seri: {{ $maintenance->device->serial }}
                                        </p>
                                    </td>
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
                                    <td class="px-6 py-4">
                                        <div class="flex place-items-center space-x-3">
                                            @role('admin')
                                                <x-pages.cell-button.navigate :route="route('device.maintenance.edit', $maintenance->id)" tooltip="Update"
                                                    color="text-primary-400 hover:text-primary-500"
                                                    icon="pencil-square" />
                                            @endrole
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

        {{-- Confirm Maintenance --}}
        <x-forms.modals.maintenance-confirmation />
    </section>
</div>

<x-pages.notifscript />
