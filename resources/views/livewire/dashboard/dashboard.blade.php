<div>
    @role('admin')
        @include('livewire.dashboard.admin')
    @else
        @include('livewire.dashboard.user')
    @endrole
</div>
