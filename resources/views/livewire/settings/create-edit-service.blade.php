<div>
    {{-- @include('components.partials.preloader') --}}

    <section class="px-4 py-8 md:px-6 2xl:px-11">
        {{-- Title --}}
        <x-pages.page-title title="{{ $routeName == 'service.edit' ? 'Edit Tipe Layanan' : 'Tipe Layanan Baru' }}" />

        {{-- Content --}}
        <div class="mb-6 mt-10">
            <div class="w-full overflow-x-auto rounded bg-white shadow">
                <form wire:submit="submitData">
                    <div class="flex flex-wrap p-6">
                        <x-forms.inputs.text model="service_name" label="Nama Layanan" type="text" />
                    </div>
                    <div class="flex place-items-center rounded-b-md border-gray-200 bg-neutral-100 px-8 py-4">
                        <x-forms.attributes.save-button />
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
