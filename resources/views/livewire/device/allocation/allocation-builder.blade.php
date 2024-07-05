<div>
    <section class="px-4 pt-8 sm:px-6">
        {{-- Title --}}
        <x-pages.page-title :title="$pageTitle" />

        {{-- Content --}}
        <div class="mb-6 mt-10">
            <div class="w-full overflow-x-auto rounded-md bg-white dark:bg-gray-800 shadow">
                <form wire:submit="submitData">
                    <div class="flex flex-wrap p-6">
                        {{-- Penjelasan Entri Status Perangkat --}}
                        <x-forms.attributes.information
                            title="Pengguna Perangkat TI"
                            description="Tentukan perangkat TI yang digunakan oleh pegawai/unit.
                                         Perangkat TI dapat lebih dari satu."
                        />

                        {{-- Form Entri --}}
                        <div class="w-full lg:w-2/3">
                            {{-- Pegawai --}}
                            <x-forms.inputs.tom-select
                                model="form.user"
                                label="Pengguna Perangkat"
                                :optitem="$this->users"
                                placeholder="Daftar Pegawai ..."
                                :disabled="auth()->user()->roles->first()->name !== 'admin' ? true : null"
                            />

                            {{-- Perangkat TI ditambah satu-satu --}}
                            <x-forms.inputs.tom-select
                                model="form.device"
                                label="Perangkat TI"
                                :optitem="$this->devices"
                                placeholder="Daftar Perangkat ..."
                                :disabled="auth()->user()->roles->first()->name !== 'admin' ? true : null"
                            />
                        </div>
                    </div>
                    <x-pages.divider />
                    <div class="flex flex-wrap p-6">
                        {{-- Penjelasan Entri Status Perangkat --}}
                        <x-forms.attributes.information
                            title="BAST Perangkat TI"
                            description="Informasi serah terima perangkat oleh pengguna perangkat dan bagian umum."
                        />

                        <div class="w-full lg:w-2/3">
                            {{-- Tanggal BAST --}}
                            <x-forms.inputs.datepicker
                                model="form.bast_date"
                                label=Tanggal"
                            />

                            {{-- No. BAST --}}
                            <x-forms.inputs.text
                                model="form.bast_number"
                                label="Nomor"
                                type="text"
                            />
                        </div>
                    </div>
                    <div class="flex place-items-center rounded-b-md border-gray-200 bg-gray-200 dark:bg-gray-700 px-6 lg:px-8 py-4">
                        <x-forms.attributes.save-button />
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
