<div class="mt-10">
    <div class="text-gray-900 dark:text-white text-xl mb-4">Perangkat yang Anda Gunakan</div>
    <div class="flex flex-wrap space-x-4">
        @if ($devices->count() > 0)
            @foreach ($devices as $device)
            <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="p-8 rounded-t-lg" width="300" src="{{ !is_null($device->device->image_id) ? $device->device->image->path : 'https://ik.imagekit.io/jrssulbar/itvalet/noimage.jpg?updatedAt=1698628167642' }}" alt="image" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="#">
                            <span class="text-gray-900 dark:text-white text-sm">{{ $device->device->type }}</span>
                            <div title="{{ $device->device->name }}"
                                class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                {{ Str::limit($device->device->name, 30) }}
                            </div>
                        </a>
                        <div class="mt-2.5 mb-5 gap-2">
                            <span
                                class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">
                                {{ $device->device->brand }}
                            </span>
                        </div>
                        <div class="flex place-items-center justify-between">
                            <span class="text-base font-bold text-gray-900 dark:text-white">
                                No. Seri {{ $device->device->serial }}
                            </span>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p class="flex place-items-center gap-2 bg-primary-300 dark:bg-primary-500 rounded-md p-2 text-gray-900 dark:text-white">
                <x-icons.herosolid name="information-circle" class="hidden lg:block h-5 w-5" />
                Belum ada perangkat TI yang anda gunakan, silahkan hubungi admin untuk mendapatkan alokasi perangkat.
            </p>
        @endif
    </div>
</div>
