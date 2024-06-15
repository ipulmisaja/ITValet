<div {{ $attributes->merge(['class' => 'group relative flex place-items-center gap-4']) }}
    @click.prevent="selected = (selected === '{{ $page }}' ? '':'{{ $page }}')">
    <x-icons.heroline name="{{ $icon }}" class="h-5 w-5" />
    <span class="w-32 text-sm font-medium tracking-wider">{{ $label }}</span>
    <x-icons.heroline name="chevron-down" class="h-4 w-4" />
</div>
