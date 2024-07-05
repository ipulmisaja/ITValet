{{-- Maintenance Button Inside Table --}}
<button type="button" wire:click="addToMaintenance('{{ $id }}')" x-data x-tooltip.raw="{{ $label }}"
    class="text-yellow-400 hover:text-yellow-500">
    <x-icons.herosolid name="shield-exclamation" class="h-5 w-5" />
</button>
