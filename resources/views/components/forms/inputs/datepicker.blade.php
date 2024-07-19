<div class="mb-6 w-full">
    {{-- Label --}}
    <x-forms.attributes.label :label="$label ?? null" :labelinfo="$labelinfo ?? null" />

    {{-- Form --}}
    <div wire:ignore class="relative mb-4 w-full">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-gray-500 dark:text-white">
            <x-icons.herosolid name="calendar-days" class="h-5 w-5" />
        </div>
        <input x-init="flatpickr('.{{ Str::contains($model, '.') ? Str::replace('.', '-', $model) : $model }}')" wire:model="{{ $model }}" type="text"
            class="{{ Str::contains($model, '.') ? Str::replace('.', '-', $model) : $model }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full pl-10 p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
            data-date-format="Y-m-d">
    </div>

    {{-- Error Notification --}}
    @include('components.forms.attributes.error', ['model' => $model])
</div>
