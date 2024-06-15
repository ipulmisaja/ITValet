<div>
    <section class="px-4 pt-8 sm:px-6">
        {{-- Section Title --}}
        <div class="flex flex-row flex-wrap place-items-center justify-between">
            {{-- Title --}}
            <x-pages.page-title title="Daftar Perangkat TI"/>

            @can('create-device')
                {{-- Add New Device --}}
                <x-pages.page-button :route="route('device.create')" title="Perangkat TI" />
            @endcan
        </div>

        {{-- Content --}}
        <div class="my-8">
            <x-forms.inputs.search />

            @if ($devices->isEmpty())
                <x-images.not-found />
            @else
                <div class="flex flex-col gap-4 lg:grid lg:grid-cols-5">
                    @foreach ($devices as $index => $device)
                    <div>
                            <div
                                class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                <a href="#">
                                    <img class="p-8 rounded-t-lg"
                                        src="{{ !is_null($device['image']) ? $device['image'] : 'https://ik.imagekit.io/jrssulbar/itvalet/noimage.jpg?updatedAt=1698628167642' }}"
                                        alt="image" />
                                </a>
                                <div class="px-5 pb-5">
                                    <a href="#">
                                        <span class="text-gray-900 dark:text-white text-sm">{{ $device['type'] }}</span>
                                        <div title="{{ $device['name'] }}"
                                            class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                            {{ Str::limit($device['name'], 20) }}
                                        </div>
                                    </a>
                                    <div class="mt-2.5 mb-5 gap-2">
                                        <span
                                            class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">
                                            {{ $device['brand'] }}
                                        </span>
                                    </div>
                                    <div class="flex place-items-center justify-between">
                                        <span class="text-lg font-bold text-gray-900 dark:text-white">
                                            {{ $device['total'] }} Perangkat
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>

        {{-- Delete Modal --}}
        {{-- <x-forms.modals.delete-confirmation /> --}}
    </section>
</div>

<x-pages.notifscript />
