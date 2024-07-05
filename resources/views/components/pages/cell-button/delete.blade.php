{{-- Delete Button Inside Table --}}
<button type="button" wire:click="deleteItem('{{ $id }}')" x-data x-tooltip.raw="Hapus Baris"
    class="text-red-500 hover:text-red-600">
    <x-icons.herosolid name="trash" class="h-5 w-5" />
</button>
