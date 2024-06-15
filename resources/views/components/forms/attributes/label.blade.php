@isset($label)
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
        {{ $label }}
        @isset($labelinfo)
            <sup class="ml-1 rounded bg-primary-100 p-1 text-xs text-primary-600 opacity-80">{{ $labelinfo }}</sup>
        @endisset
    </label>
@endisset
