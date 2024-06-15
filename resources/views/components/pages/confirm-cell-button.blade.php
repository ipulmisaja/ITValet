<button
    type="button"
    wire:click="confirmItem('{{ $id }}')"
    x-data x-tooltip.raw="{{ $label }}"
    class="text-cyan-500 hover:text-cyan-600">
    <x-icons.herosolid name="check-circle" class="h-5 w-5" />
</button>
