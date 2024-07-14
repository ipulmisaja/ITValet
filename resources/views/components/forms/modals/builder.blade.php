<div x-data="{ showModal: @entangle('builderModal') }" @keydown.window.escape="showModal = false">
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
                        {{ $title }}
                    </div>
                    <button wire:click="$set('builderModal', false)"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                        <x-icons.flowbite-solid name="close-modal" class="h-3 w-3" />
                    </button>
                </div>

                {{-- Modal Content --}}
                {{ $slot }}

            </div>
        </div>
    </div>
</div>
