<div class="relative ml-3" x-data="{ dropdownOpen: false }" @click.outside="dropdownOpen = false">
    <a class="flex place-items-center gap-1 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
        href="#" @click.prevent="dropdownOpen = ! dropdownOpen">
        <span class="h-8 w-8 rounded-full">
            <x-images.avatar />
        </span>
    </a>

    <!-- Dropdown Start -->
    <div x-show="dropdownOpen" x-transition.opacity
        class="w-auto shadow dark:bg-gray-700 dark:divide-gray-600 absolute right-0 mt-4 flex flex-col rounded bg-white divide-gray-100">
        <ul class="border-b dark:border-gray-600 px-6">
            <li>
                <div class="py-2">
                    <div class="text-sm font-medium text-gray-900 dark:text-white whitespace-nowrap">
                        {{ auth()->user()->name }}</div>
                    <small class="text-gray-900 dark:text-white whitespace-nowrap">{{ auth()->user()->email }}</small>
                </div>
            </li>
        </ul>
        <ul class="border-b dark:border-gray-600 flex flex-col gap-5 px-6 py-2">
            <li>
                <a href="#"
                    class="py-2 flex place-items-center gap-3.5 text-sm text-gray-900 dark:text-white font-medium duration-300 ease-in-out"
                    target="_blank">
                    <x-icons.heroline name="clipboard-document-list" class="h-5 w-5" />
                    {{-- Versi Aplikasi --}}
                    v3.3.1
                </a>
            </li>
        </ul>

        {{-- Logout --}}
        <livewire:auth.logout />
    </div>
</div>
