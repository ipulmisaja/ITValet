<section class="px-4 pt-8 sm:px-6">
    {{-- Title --}}
    <x-pages.page-title title="Dashboard" />

    <div class="mt-2 font-medium text-gray-500">Hai {{ auth()->user()->name }}, {{ greeting() }}</div>

    {{-- Perangkat yang Digunakan --}}
    <livewire:dashboard.component.user.device-info />

    {{-- Perangkat yang Diajukan Pemeliharaan --}}
    <livewire:dashboard.component.user.maintenance-info />

    {{-- Tiket yang Diajukan --}}
    <livewire:dashboard.component.user.service-info />

    {{-- Ganti Password --}}
    <x-forms.modals.change-password />
</section>

<x-pages.notifscript />
