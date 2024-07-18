<div>
    <section class="px-4 pt-8 sm:px-6">
        <x-pages.page-title title="Daftar Perangkat TI" />

        {{-- Content --}}
        <div class="mb-6 mt-10">
            <div
                class="items-center justify-between block sm:flex md:divide-x md:divide-gray-100 dark:divide-gray-700 mb-4">
                <div class="flex items-center mb-4 sm:mb-0">
                    <x-forms.inputs.search placeholder="Cari informasi perangkat..." />
                </div>
                @can('create-device')
                    <x-buttons.page wire:click.prevent="createDevice" icon="plus-circle" title="Perangkat" />
                @endcan
            </div>

            @if ($device_masters->isEmpty())
                <x-images.not-found />
            @else
                <div class="flex flex-col gap-3 lg:grid lg:grid-cols-2 lg:gap-4 xl:grid-cols-3">
                    @foreach ($device_masters as $index => $master)
                        <a wire:navigate href="{{ route('device.allocation.list', $master->id) }}"
                            class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow p-4 md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                            <img class="w-full rounded-lg h-auto md:w-48"
                                src="{{ secure_asset('storage/app/public/devices/' . $master->image) }}" alt="">
                            <div class="pl-0 w-full lg:pl-4 space-y-5 mt-6 lg:mt-0">
                                <div id="header">
                                    @if ($master->devices->count() - $master->states->count() == 0)
                                        <span
                                            class="bg-blue-100 text-blue-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400">
                                            Sudah Teralokasi
                                        </span>
                                    @else
                                        <span
                                            class="bg-green-100 text-green-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-green-300 border border-green-300">
                                            Belum Teralokasi {{ $master->devices->count() - $master->states->count() }}
                                            Perangkat
                                        </span>
                                    @endif
                                </div>
                                <div id="middle" class="flex flex-col justify-between leading-normal">
                                    <div class="text-gray-600 dark:text-gray-400 text-lg lg:text-sm">
                                        {{ $master->type }}
                                    </div>
                                    <div title="{{ $master->name }}"
                                        class="text-3xl lg:text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                        {{ $master->brand . ' ' . Str::limit($master->name, 20) }}
                                    </div>
                                    <div class="mt-2">
                                        <span
                                            class="bg-blue-100 text-blue-800 text-base lg:text-sm font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">
                                            {{ $master->devices->count() }} Perangkat
                                        </span>
                                    </div>
                                </div>
                                <div id="footer" class="flex items-center justify-between">
                                    <div class="flex items-center text-sm lg:text-xs font-medium text-primary-400"
                                        x-data x-tooltip.raw="Baik">
                                        <x-icons.flowbite-solid name="shield-check" class="h-6 w-6 mr-2" />
                                        {{ $master->devices->count() - ($master->maintenances->where('condition', 'rusak ringan')->count() + $master->maintenances->where('condition', 'rusak berat')->count()) }}
                                        UNIT
                                    </div>
                                    <div class="flex items-center text-sm lg:text-xs font-medium text-yellow-400" x-data
                                        x-tooltip.raw="Rusak Ringan">
                                        <x-icons.flowbite-solid name="exclamation-circle" class="h-6 w-6 mr-2" />
                                        {{ $master->maintenances->where('condition', 'rusak ringan')->count() }} UNIT
                                    </div>
                                    <div class="flex items-center text-sm lg:text-xs font-medium text-red-400" x-data
                                        x-tooltip.raw="Rusak Berat">
                                        <x-icons.flowbite-solid name="fire" class="h-6 w-6 mr-2" />
                                        {{ $master->maintenances->where('condition', 'rusak berat')->count() }} UNIT
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            @endif
        </div>

        {{-- Pagination Content --}}
        {{ $device_masters->links('vendor.livewire.tailwind') }}

        {{-- Create Device Modal --}}
        <x-forms.modals.builder title="Perangkat Baru">
            <form wire:submit="storeDevice">
                <div class="px-6 pb-4">
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <x-forms.inputs.text model="form.name" label="Nama Perangkat" type="text" />
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <x-forms.inputs.tom-select model="form.brand" label="Merek" :optitem="$this->brands" />
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <x-forms.inputs.tom-select model="form.type" label="Tipe" :optitem="$this->types" />
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <x-forms.inputs.datepicker model="form.procurementDate" label="Tanggal Terima Perangkat" />
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <x-forms.inputs.select model="form.procurementType" label="Satker Pengadaan"
                                :optitem="$this->procurementOption" />
                        </div>
                        <div class="col-span-2">
                            <x-forms.inputs.text model="form.stock" label="Jumlah Perangkat" type="number" />
                        </div>
                    </div>
                </div>
                <div class="rounded-b-md bg-gray-200 dark:bg-gray-600 px-6 py-4">
                    <button type="submit"
                        class="flex py-2 px-3 text-sm font-medium ml-auto text-center text-white bg-primary-600 rounded-md hover:bg-primary-700 dark:bg-primary-500 dark:hover:bg-primary-600">
                        <div wire:loading>
                            <x-icons.flowbite-solid name="animate-spin" class="w-5 h-5" />
                        </div>
                        <span>Simpan Informasi Perangkat</span>
                    </button>
                </div>
            </form>
        </x-forms.modals.builder>

    </section>
</div>
