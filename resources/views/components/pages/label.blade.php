<div {{ $attributes->merge(['class' => 'group relative flex items-center gap-4']) }}
    @click.prevent="selected = (selected === '{{ $page }}' ? '':'{{ $page }}')">
    <span class="h-4 w-4">
        <x-icons.heroline name="{{ $icon }}" class="h-5 w-5" />
    </span>
    <span class="w-full text-base font-medium tracking-wider">{{ $label }}</span>
    <span class="h-4 w-4">
        <x-icons.heroline name="chevron-down" class="h-4 w-4" />
    </span>
</div>
