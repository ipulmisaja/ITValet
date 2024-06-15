<div class="mb-6 w-full">
    {{-- Label --}}
    <x-forms.attributes.label :label="$label ?? null" :labelinfo="$labelinfo ?? null" />

    {{-- Form --}}
    <div wire:ignore>
        <trix-editor
            class="w-full"
            x-data
            x-on:trix-change="$wire.content = $event.target.value"
            x-ref="trix"
            wire:model="{{ $model }}">
        </trix-editor>
    </div>

    {{-- Error Notification --}}
    @include('components.forms.attributes.error', ['model' => $model])
</div>

@push('scripts')
    <script src="{{ secure_asset('vendor/trix/trix.min.js') }}"></script>
@endpush
