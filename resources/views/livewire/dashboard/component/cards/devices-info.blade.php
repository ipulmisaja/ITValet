<div class="bg-white rounded-lg mb-4 shadow-md w-full lg:w-max">
    <div class="bg-neutral-300 p-2 rounded-t-lg text-center">
        <span class="text-white text-sm font-medium tracking-wide px-4">
            Baik (0) /
            Rusak Ringan (0) /
            Rusak Berat (0)
        </span>
    </div>
    <div class="p-4 flex flex-nowrap place-items-center">
        <div class="bg-primary-200 text-primary-600 p-4 rounded-full">
            <x-icons.heroline name="server-stack" class="w-16 h-16" />
        </div>
        <div class="ml-6">
            <div class="text-base tracking-wide text-neutral-400 font-medium">Perangkat TI yang Dikelola</div>
            <div class="flex flex-nowrap items-baseline">
                <span class="font-medium text-6xl mb-1 text-primary-600">{{ $total }}</span>
                <span class="text-sm ml-1 font-medium text-neutral-500">unit</span>
            </div>
        </div>
    </div>
</div>
