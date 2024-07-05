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
                        <x-forms.attributes.information title="Permintaan Layanan TI"
                            description="Isikan informasi layanan TI yang anda ajukan dengan lengkap." />

                        {{-- Form Entri --}}
                        <div class="w-full lg:w-2/3">
                            {{-- Jenis Layanan --}}
                            <x-forms.inputs.select model="form.service_type" label="Jenis Layanan" :optitem="$this->serviceTypes"
                                placeholder="Jenis Layanan" method="live" />

                            @if ($showDeviceInput)
                                <x-forms.inputs.select model="form.device" label="Perangkat yang Diajukan Perbaikan"
                                    :optitem="$this->devices" placeholder="Daftar Perangkat" />
                            @endif

                            {{-- Judul --}}
                            <x-forms.inputs.text model="form.summary" label="Ringkasan Permintaan Layanan"
                                type="text" />

                            {{-- Deskripsi --}}
                            <x-forms.inputs.trix model="form.description" label="Deskripsi Permintaan Layanan" />
                        </div>
                    </div>
                    <div
                        class="flex place-items-center rounded-b-md border-gray-200 bg-gray-200 dark:bg-gray-700 px-6 py-4">
                        <x-forms.attributes.save-button />
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
