<div class="mb-6 w-full">
    {{-- Label --}}
    <x-forms.attributes.label :label="$label ?? null" :labelinfo="$labelinfo ?? null" />

    {{-- Form --}}
    <div wire:ignore class="relative mb-4 w-full">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-gray-500 dark:text-white">
            <x-icons.herosolid name="calendar-days" class="h-5 w-5" />
        </div>
        <input x-init="flatpickr('.{{ Str::contains($model, '.') ? Str::replace('.', '-', $model) : $model }}')" x-on:livewire:navigated.window="instance.destroy();"
            wire:model="{{ $model }}" type="text"
            class="{{ Str::contains($model, '.') ? Str::replace('.', '-', $model) : $model }} w-full p-3 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            data-date-format="Y-m-d" placeholder="YYYY-MM-DD">
    </div>

    {{-- Error Notification --}}
    @include('components.forms.attributes.error', ['model' => $model])
</div>
