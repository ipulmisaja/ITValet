<div>
    <section class="px-4 pt-8 sm:px-6">
        {{-- Title --}}
        <x-pages.page-title :title="$pageTitle" />

        {{-- Content --}}
        <div class="mb-6 mt-10">
            <div class="w-full overflow-x-auto rounded-md bg-white dark:bg-gray-800 shadow">
                <form wire:submit="submitData">
                    <div class="flex flex-wrap p-6">
                        {{-- Penjelasan Entri Perangkat TI --}}
                        <x-forms.attributes.information title="Informasi Perangkat TI"
                            description="Informasi mengenai nama, nomor seri, dan spesifikasi minimal perangkat TI yang dikelola." />

                        {{-- Form Entri --}}
                        <div class="w-full lg:w-2/3">
                            {{-- Stok Perangkat --}}
                            @if ($routeName !== 'device.edit')
                                <x-forms.inputs.text model="form.stock" label="Stok/Jumlah" type="number" />
                            @endif

                            {{-- Nomor Seri --}}
                            <x-forms.inputs.text model="form.serial" label="No. Seri" type="text" />

                            {{-- Nama Perangkat --}}
                            <x-forms.inputs.text model="form.name" label="Nama Perangkat" type="text" />

                            {{-- Merek Perangkat --}}
                            <x-forms.inputs.tom-select model="form.brand" label="Merek/Vendor" :optitem="$this->brands"
                                placeholder="Merek Perangkat TI ..." />

                            {{-- Tipe Perangkat --}}
                            <x-forms.inputs.tom-select model="form.deviceType" label="Tipe Perangat" :optitem="$this->types"
                                placeholder="Tipe Perangkat TI ..." />

                            {{-- Sistem Operasi --}}
                            <x-forms.inputs.tom-select model="form.os" label="Sistem Operasi" :optitem="$this->operatingSystem"
                                placeholder="Sistem Operasi Perangkat ..." />

                            {{-- @includeWhen(in_array($deviceType, ['Laptop', 'Desktop PC', 'Server']),
                            'components.molecules.forms.tom-select',
                            [
                                'model' => 'os',
                                'label' => 'Sistem Operasi',
                                'opt_item' => $this->operatingSystem,
                                'placeholder' => 'Sistem Operasi yang Digunakan',
                            ]
                        ) --}}

                            {{-- Gambar Perangkat --}}
                            {{-- @include('components.input.deferred-text', [
                            'model' => 'image',
                            'label' => 'Gambar Perangkat',
                            'type'  => 'file'
                        ]) --}}
                        </div>
                    </div>
                    @if ($routeName === 'device.edit')
                        <x-pages.divider />
                        <div class="flex flex-wrap p-6">
                            {{-- Penjelasan Entri Perangkat TI --}}
                            <x-forms.attributes.information title="Informasi BMN"
                                description="Nomor yang diberikan kepada perangkat yang dibeli atau
                                             diperoleh atas beban Anggaran Pendapatan dan Belanja Negara" />

                            {{-- Form Entri --}}
                            <div class="w-full lg:w-2/3">
                                {{-- BMN --}}
                                <x-forms.inputs.text model="form.bmn_number" label="Nomor BMN" type="text" />
                            </div>
                        </div>
                    @endif
                    <x-pages.divider />
                    <div class="flex flex-wrap p-6">
                        {{-- Penjelasan Entri Perangkat TI --}}
                        <x-forms.attributes.information title="Informasi Pengadaan Perangkat"
                            description="Pengadaan perangkat TI meliputi tanggal penerimaan perangkat
                                         dan lokasi pengadaan" />

                        {{-- Form Entri --}}
                        <div class="w-full lg:w-2/3">
                            {{-- Tahun Pengadaan Barang --}}
                            <x-forms.inputs.datepicker model="form.procurementDate" label="Tanggal Terima Perangkat" />

                            {{-- Tipe Pengadaan --}}
                            <x-forms.inputs.tom-select model="form.procurementType" label="Lokasi Pengadaan"
                                labelinfo="Pusat atau Daerah" :optitem="$procurementOption"
                                placeholder="Satker yang Mengadakan Barang ..." />
                        </div>
                    </div>
                    <div
                        class="flex place-items-center rounded-b-md border-gray-200 bg-gray-200 dark:bg-gray-700 px-6 py-4">
                        @if ($routeName === 'device.edit')
                            <button type="button" wire:click="deleteItem"
                                class="px-3 py-2 text-sm text-white rounded-lg bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-primary-300 sm:w-auto dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                Hapus
                            </button>
                        @endif
                        <x-forms.attributes.save-button />
                    </div>
                </form>
            </div>
        </div>

        {{-- Delete Model --}}
        <x-forms.modals.delete-confirmation />

    </section>
</div>
