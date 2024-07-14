<a wire:navigate href="{{ $route }}"
    class="inline-flex place-items-center justify-center px-2 lg:px-3 py-2 text-white rounded-md bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 w-full lg:w-auto dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
    <x-icons.herosolid name="{{ $icon }}" class="h-5 w-5" />
    <div class="ml-2 text-sm font-medium lg:block">{{ $title }}</div>
</a>
