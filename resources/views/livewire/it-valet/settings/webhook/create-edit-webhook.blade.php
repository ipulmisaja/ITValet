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
                        <x-forms.attributes.information title="Webhook API"
                            description="Kelola webhook aplikasi seperti telegram, whatsapp, dll." />

                        {{-- Form Entri --}}
                        <div class="w-full lg:w-2/3">
                            {{-- Provider --}}
                            <x-forms.inputs.tom-select
                                model="form.provider"
                                label="Provider Webhook"
                                :optitem="$this->providers"
                                placeholder="Provider"
                            />

                            {{-- Nama Aplikasi --}}
                            <x-forms.inputs.text
                                model="form.name"
                                label="Nama Aplikasi"
                                type="text" />

                            {{-- Nama Perangkat --}}
                            <x-forms.inputs.text
                            model="form.url" label="URL" type="text" />

                            {{-- Token --}}
                            <x-forms.inputs.text model="form.token" label="Token" type="text" />

                            @if ($routeName === 'webhook.edit')
                                {{-- Status --}}
                                <x-forms.inputs.select model="form.status"
                                    optitem="<option value='up'>Aktif</option><option value='down'>Tidak Aktif</option>"
                                    placeholder="Pilih status..." label="Status Aktivasi" />
                            @endif
                        </div>
                    </div>
                    <div class="rounded-b-md border-gray-200 bg-gray-200 dark:bg-gray-700 px-6 py-4">
                        <x-forms.attributes.save-button />
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
