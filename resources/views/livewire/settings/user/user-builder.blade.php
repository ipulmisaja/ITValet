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
                        <x-forms.attributes.information
                            title="Informasi Pegawai/Unit/Ruangan"
                            description="Lorem ipsum dolor sit amet"
                        />

                        <div class="w-full lg:w-2/3">
                            {{-- Tipe Pengguna --}}
                            <x-forms.inputs.select
                                model="form.type"
                                label="Tipe Pengguna"
                                method="live"
                                :optitem="$userTypeOpt"
                                placeholder="Pilih Tipe Pengguna ..."
                            />

                            {{-- Nama Pegawai/Unit --}}
                            <x-forms.inputs.text
                                model="form.name"
                                label="Nama Pegawai/Unit/Ruangan"
                                type="text"
                            />

                            @if ($this->form->type === 'Perorangan')
                                {{-- Email --}}
                                <x-forms.inputs.text
                                    model="form.email"
                                    label="Email"
                                    type="email"
                                />

                                {{-- NIP BPS --}}
                                <x-forms.inputs.text
                                    model="form.bps_id"
                                    label="NIP Lama/NIP BPS"
                                    type="number"
                                />

                                {{-- NIP Pegawai --}}
                                <x-forms.inputs.text
                                    model="form.employee_id"
                                    label="NIP Baru Pegawai"
                                    type="number"
                                />

                                <x-forms.inputs.select
                                    model="form.role"
                                    label="Role/Hak Akses"
                                    :optitem="$this->roles"
                                    placeholder="Pilih Role/Hak Akses"
                                />
                            @endif
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
