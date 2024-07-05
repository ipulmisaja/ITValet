<div x-data="{ showModal: @entangle('modal') }" @keydown.window.escape="showModal = false">
    {{-- Dark Background --}}
    <div x-cloak x-show="showModal" x-transition.opacity class="fixed inset-0 z-9999 bg-slate-900/75">
    </div>

    {{-- Window --}}
    <div x-cloak x-show="showModal" x-transition class="fixed inset-0 z-99999 flex place-items-center justify-center">
        <div class="mx-auto w-screen max-w-md">
            <div class="rounded-lg bg-white">
                {{-- Modal Title --}}
                <div class="flex flex-nowrap place-items-center justify-between mb-8 p-6 border-b">
                    <div class="font-semibold leading-6 text-xl text-neutral-600">
                        Konfirmasi Pemeliharaan
                    </div>
                    <button wire:click="$set('modal', false)"
                        class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="h-5 w-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                {{-- Modal Content --}}
                <div class="px-6 pb-6">
                    <span>Apakah permintaan ini akan ditambahkan ke daftar pemeliharaan ?</span>
                </div>
                {{-- Modal Footer --}}
                <div class="rounded-b-md bg-gray-200 px-6 py-3 flex justify-between place-items-center">
                    <div>
                        <div wire:loading>
                            <svg class="animate-spin -ml-1 mr-2 h-5 w-5 text-primary-700"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                    stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor"
                                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="flex justify-end space-x-4">
                        {{-- Don't add to maintenance list --}}
                        <button wire:click="confirmMaintenance(false)"
                            class="ml-auto py-2 px-3 text-sm font-medium text-center text-white bg-gray-600 rounded-md hover:bg-gray-700 dark:bg-gray-500 dark:hover:bg-gray-600">
                            Tidak
                        </button>

                        {{-- Add to maintenance list --}}
                        <button wire:click="confirmMaintenance(true)"
                            class="flex py-2 px-3 text-sm font-medium text-center text-white bg-primary-500 rounded-md hover:bg-primary-600 dark:bg-primary-400 dark:hover:bg-primary-500">
                            Iya
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
