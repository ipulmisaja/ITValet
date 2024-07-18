<div class="mb-6 w-full">
    {{-- Label --}}
    <x-forms.attributes.label :label="$label ?? null" :labelinfo="$labelinfo ?? null" />

    {{-- Form --}}
    <div wire:ignore class="relative mb-4 w-full">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-gray-500 dark:text-white">
            <x-icons.herosolid name="calendar-days" class="h-5 w-5" />
        </div>
        <input wire:model="{{ $model }}" datepicker id="itvalet_datepicker" name="itvalet_datepicker"
            datepicker-format="yyyy-mm-dd"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full ps-10 p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
            type="text">

        {{-- <input x-init="flatpickr('.{{ Str::contains($model, '.') ? Str::replace('.', '-', $model) : $model }}')" x-on:livewire:navigated.window="instance.destroy();"
            wire:model="{{ $model }}" type="text"
            class="{{ Str::contains($model, '.') ? Str::replace('.', '-', $model) : $model }} w-full pt-2.5 pr-2.5 pb-2.5 pl-10 text-sm text-gray-900 bg-gray-50 border border-gray-300 rounded-lg focus:ring-primary-600 focus:border-primary-600 block dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
            data-date-format="Y-m-d" placeholder="YYYY-MM-DD"> --}}
    </div>

    {{-- Error Notification --}}
    @include('components.forms.attributes.error', ['model' => $model])
</div>
