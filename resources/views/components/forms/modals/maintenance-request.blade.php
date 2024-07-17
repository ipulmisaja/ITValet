<div x-data="{ showModal: @entangle('maintenanceReqModal') }" @keydown.window.escape="showModal = false">
    {{-- Dark Background --}}
    <div x-cloak x-show="showModal" x-transition.opacity class="fixed inset-0 z-9999 bg-slate-900/75">
    </div>

    {{-- Window --}}
    <div x-cloak x-show="showModal" x-transition class="fixed inset-0 z-99999 flex place-items-center justify-center">
        <div class="mx-auto w-screen max-w-md">
            <div class="rounded-lg bg-white dark:bg-gray-700">
                {{-- Modal Title --}}
                <div
                    class="flex flex-nowrap place-items-center justify-between mb-8 px-6 py-4 border-b dark:border-gray-600">
                    <div class="font-semibold leading-6 text-xl text-gray-900 dark:text-white">
                        Konfirmasi Pemeliharaan
                    </div>
                    <button wire:click="$set('maintenanceReqModal', false)"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                        <x-icons.flowbite-solid name="close-modal" class="h-3 w-3" />
                    </button>
                </div>
                {{-- Modal Content --}}
                <div class="px-6 pb-6 text-gray-900 dark:text-white">
                    <span>Apakah permintaan ini akan ditambahkan ke daftar pemeliharaan ?</span>
                </div>
                {{-- Modal Footer --}}
                <div
                    class="rounded-b-md bg-gray-200 dark:bg-gray-600 px-6 py-4 flex justify-between place-items-center">
                    <div>
                        <div wire:loading>
                            <x-icons.flowbite-solid name="animate-spin" class="w-5 h-5" />
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
