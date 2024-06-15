<div class="mt-10">
    <div class="text-gray-900 dark:text-white text-xl mb-4">Pemeliharaan yang Diajukan</div>
    @if (!is_null($maintenances))
        @if ($maintenances->device->maintenance->count() > 0)
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">Tiket</th>
                            <th scope="col" class="px-6 py-3">Nama Perangkat</th>
                            <th scope="col" class="px-6 py-3">Kondisi</th>
                            <th scope="col" class="px-6 py-3">Status Pemeliharaan</th>
                            <th scope="col" class="px-6 py-3">Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($maintenances->device->maintenance as $listmaintenance)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 font-medium text-gray-900 dark:text-white">
                            <td scope="row" class="px-6 py-4 space-y-2">
                                <span class="font-bold text-md">#{{ substr($listmaintenance->ticket, 0, 8) }}</span>
                            </td>
                            <td class="px-6 py-4 font-medium whitespace-nowrap space-y-2    ">
                                <span class="font-bold text-md">{{ $maintenances->device->name }}</span>
                                <p class="text-gray-900 dark:text-gray-300">No. Seri {{ $maintenances->device->serial }}</p>
                            </td>
                            <td class="px-6 py-4 space-y-3">
                                <x-pages.condition :condition="$listmaintenance->condition" />
                                <p class="text-gray-500 dark:text-gray-400">Laporan: {{ $listmaintenance->created_at->format('d M
                                    Y') }}</p>
                            </td>
                            <td class="px-6 py-4">
                                <span class="text-gray-900 dark:text-white">
                                    {{ ucwords($listmaintenance->maintenance) }}
                                </span>
                                @if (str_contains($listmaintenance->maintenance, 'selesai'))
                                <p class="text-gray-500 dark:text-gray-400">{{ $listmaintenance->completed_at->format('d M Y') }}
                                </p>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                <p class="text-gray-500 dark:text-gray-400">{!! $listmaintenance->description !!}</p>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="flex">
                <p
                    class="flex place-items-center gap-2 bg-primary-300 dark:bg-primary-500 rounded-md p-2 text-gray-900 dark:text-white">
                    <x-icons.herosolid name="information-circle" class="hidden lg:block h-5 w-5" />
                    Belum ada pengajuan pemeliharaan yang anda ajukan.
                </p>
            </div>
        @endif
    @else
        <div class="flex">
            <p
                class="flex place-items-center gap-2 bg-primary-300 dark:bg-primary-500 rounded-md p-2 text-gray-900 dark:text-white">
                <x-icons.herosolid name="information-circle" class="hidden lg:block h-5 w-5" />
                Belum ada pengajuan pemeliharaan yang anda ajukan.
            </p>
        </div>
    @endif
</div>
