<div>
    <section class="px-4 pt-8 sm:px-6">
        {{-- Title --}}
        <x-pages.page-title :title="$pageTitle" />

        {{-- Content --}}
        <div class="mb-6 mt-10">
            <div class="w-full overflow-x-auto rounded-md bg-white dark:bg-gray-800 shadow">
                <form wire:submit="submitData">
                    <div class="flex flex-wrap p-6">
                        {{-- Penjelasan --}}
                        <x-forms.attributes.information
                            title="Perangkat Lunak"
                            description="Perangkat lunak yang digunakan pegawai lingkup BPS Provinsi Sulawesi Barat."
                        />

                        {{-- Form entri --}}
                        <div class="w-full lg:w-2/3">
                            {{-- Nama Perangkat Lunak --}}
                            <x-forms.inputs.text
                                model="form.name"
                                label="Nama Perangkat Lunak"
                                type="text"
                            />

                            {{-- Kategori --}}
                            <x-forms.inputs.tom-select
                                model="form.category"
                                label="Kategori"
                                :optitem="$this->categories"
                                placeholder="Pilih kategori ..."
                            />

                            {{-- URL --}}
                            <x-forms.inputs.text
                                model="form.url"
                                label="Tautan Unduh"
                                type="text"
                            />

                            {{-- Catatan Singkat --}}
                            <x-forms.inputs.text-area
                                model="form.note"
                                label="Catatan Singkat"
                            />
                        </div>
                    </div>
                    <div class="flex place-items-center rounded-b-md border-gray-200 bg-gray-200 dark:bg-gray-700 px-6 py-4">
                        <x-forms.attributes.save-button />
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
