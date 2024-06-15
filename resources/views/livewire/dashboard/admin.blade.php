<section class="px-4 pt-8 sm:px-6">
    <x-notification.flash />

    {{-- Title --}}
    <x-pages.page-title title="Dashboard" />

    <div class="mt-2 font-medium text-gray-500">Hai {{ auth()->user()->name }}, {{ greeting() }}</div>

    {{-- Content Title --}}
    <div class="mt-14 mb-7">
        <section id="fast-report">
            <p class="font-semibold mb-4 tracking-normal text-lg text-neutral-600">Laporan Cepat</p>

            <div class="flex flex-wrap place-items-center justify-between">
                {{-- Perangkat TI --}}
                @livewire('dashboard.component.cards.devices-info')

                {{-- Pemeliharaan TI --}}
                @livewire('dashboard.component.cards.maintenances-info')

                {{-- Layanan TI --}}
                @livewire('dashboard.component.cards.requests-info')

                {{-- Jumlah User --}}
                @livewire('dashboard.component.cards.users-info')
            </div>
        </section>

        <section id="tracking" class="mt-6">
            <p class="font-semibold mb-4 tracking-normal text-lg text-neutral-600">Permintaan Layanan TI Terbaru</p>
            @livewire('dashboard.component.tables.latest-service')
        </section>

        <section id="maintenance" class="mt-12">
            <p class="font-semibold mb-4 tracking-normal text-lg text-neutral-600">Pemeliharaan Perangkat TI</p>
            @livewire('dashboard.component.tables.latest-maintenance')
        </section>
    </div>

    <x-forms.modals.change-password />
</section>
