<div x-data="{ showModal: @entangle('deleteModal') }" @keydown.window.escape="showModal = false">
    {{-- Dark Background --}}
    <div x-cloak x-show="showModal" x-transition.opacity class="fixed inset-0 z-9999 bg-slate-900/75">
    </div>

    {{-- Window --}}
    <div x-cloak x-show="showModal" x-transition class="fixed inset-0 z-99999 flex place-items-center justify-center">
        <div class="mx-auto w-screen max-w-md">
            <div class="rounded-lg bg-white dark:bg-gray-700">
                {{-- Modal Title --}}
                <div class="flex flex-nowrap place-items-center justify-between mb-8 p-6 border-b dark:border-gray-600">
                    <div class="font-semibold leading-6 text-xl text-gray-900 dark:text-white">
                        Konfirmasi Hapus Data
                    </div>
                    <button wire:click="$set('deleteModal', false)"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                        <x-icons.flowbite-solid name="close-modal" class="h-3 w-3" />
                    </button>
                </div>

                {{-- Modal Content --}}
                <div class="px-6 pb-6">
                    <span class="text-gray-900 dark:text-white">Apakah anda yakin ingin menghapus data ini ?</span>
                </div>

                {{-- Modal Footer --}}
                <div
                    class="rounded-b-md bg-gray-200 dark:bg-gray-600 px-6 py-3 flex justify-center place-items-center space-x-4">
                    <button wire:click="$set('deleteModal', false)"
                        class="ml-auto py-2 px-3 text-sm font-medium text-center text-white bg-gray-600 rounded-md hover:bg-gray-700 dark:bg-gray-500 dark:hover:bg-gray-600">
                        Batal
                    </button>
                    <form wire:submit="confirmDelete">
                        <button type="submit"
                            class="flex py-2 px-3 text-sm font-medium text-center text-white bg-red-600 rounded-md hover:bg-red-700 dark:bg-red-500 dark:hover:bg-red-600">
                            <div wire:loading>
                                <svg class="animate-spin -ml-1 mr-2 h-5 w-5 text-red-800"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10"
                                        stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor"
                                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                    </path>
                                </svg>
                            </div>
                            <span>Hapus</span>
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
