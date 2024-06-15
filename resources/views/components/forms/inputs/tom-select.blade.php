<div class="mb-6 w-full">
    {{-- Label --}}
    <x-forms.attributes.label :label="$label ?? null" :labelinfo="$labelinfo ?? null" />

    {{-- Form --}}
    <div wire:ignore>
        <select
            id="{{ Str::contains($model, '.') ? Str::replace('.', '-', $model) : $model }}"
            x-init="new TomSelect('#{{ Str::contains($model, '.') ? Str::replace('.', '-', $model) : $model }}', { create: true })"
            wire:model="{{ $model }}"
            placeholder="{{ $placeholder }}"
            @isset($multiple) multiple @endisset
            @isset($disabled) disabled @endisset autocomplete="off">
                <option value>{{ $placeholder }}</option>
                {!! $optitem !!}
        </select>
    </div>

    {{-- Error Notification --}}
    @include('components.forms.attributes.error', ['model' => $model])
</div>

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/tom-select/dist/js/tom-select.complete.min.js"></script>
@endpush
