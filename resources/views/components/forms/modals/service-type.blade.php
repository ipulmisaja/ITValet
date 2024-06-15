<div x-data="{ showModal: @entangle('serviceModal') }" @keydown.window.escape="showModal = false">
    <div x-cloak x-show="showModal" x-transition.opacity class="fixed inset-0 z-9999 bg-slate-900/75"></div>

    <div x-cloak x-show="showModal" x-transition class="fixed inset-0 z-99999 flex place-items-center justify-center">
        <div class="mx-auto w-1/2">
            <div class="rounded-lg bg-white">
                {{-- Modal Title --}}
                <div class="flex flex-nowrap place-items-center justify-between mb-8 p-6 border-b">
                    <div class="font-semibold leading-6 text-xl text-neutral-600">TIPE LAYANAN</div>
                    <button wire:click="$set('serviceModal', false)"
                        class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="h-5 w-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <form wire:submit="saveService">
                    {{-- Modal Content --}}
                    <div class="px-6">
                        <x-forms.inputs.text model="service_name" label="Nama Layanan" type="text" />
                    </div>
                    {{-- Modal Footer --}}
                    <div class="rounded-b-md bg-gray-200 px-6 py-3">
                        <x-forms.attributes.save-button />
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
