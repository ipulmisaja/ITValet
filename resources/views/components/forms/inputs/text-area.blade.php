<div class="mb-6 w-full">
    {{-- Label --}}
    <x-forms.attributes.label :label="$label ?? null" :labelinfo="$labelinfo ?? null" />

    {{-- Form --}}
    <textarea wire:model="{{ $model }}" rows="4"
        class="block p-1 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
    </textarea>

    {{-- Error Notification --}}
    @include('components.forms.attributes.error', ['model' => $model])
</div>
