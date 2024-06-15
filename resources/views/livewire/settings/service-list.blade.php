<div>
    <section class="px-4 py-8 md:px-6 2xl:px-11">
        <x-notification.flash />

        {{-- Section Header --}}
        <div class="flex flex-wrap place-items-center justify-between">
            {{-- Title --}}
            <x-pages.page-title title="Daftar Layanan" />

            {{-- Modal Input --}}
            <x-pages.page-button :route="route('service.create')" title="Layanan" />
        </div>

        {{-- Content --}}
        <div class="mt-14 mb-7">
            <x-forms.inputs.search />

            @if ($services->isEmpty())
                <x-images.not-found />
            @else
                <div class="relative overflow-x-auto shadow rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="p-4">
                                    <div class="flex place-items-center">
                                        <input id="checkbox-all-search" type="checkbox"
                                            class="w-4 h-4 text-primary-600 bg-gray-100 border-gray-300 rounded focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">Kode Layanan</th>
                                <th scope="col" class="px-6 py-3">Nama Layanan</th>
                                <th scope="col" class="px-6 py-3">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $service)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    {{-- Checkbox --}}
                                    <td class="w-4 p-4">
                                        <div class="flex place-items-center">
                                            <input id="checkbox-table-search-1" type="checkbox"
                                                class="w-4 h-4 text-primary-600 bg-gray-100 border-gray-300 rounded focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                        </div>
                                    </td>

                                    {{-- Kode Layanan --}}
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <span class="text-gray-900 dark:text-white">#{{ substr($service->id, 0, 8) }}</span>
                                    </th>

                                    {{-- Nama Layanan --}}
                                    <td class="px-6 py-4">
                                        <span class="text-gray-500 dark:text-gray-400">{{ $service->type }}</span>
                                    </td>

                                    {{-- Aksi --}}
                                    <td class="px-6 py-4">
                                        <div class="flex place-items-center space-x-3">
                                            <x-pages.cell-button :route="route('service.edit', $service->id)" tooltip="Edit Layanan"
                                                color="text-primary-400 hover:text-primary-500" icon="pencil-square" />

                                            <x-pages.delete-cell-button label="Hapus Layanan" :id="$service->id" />
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>

        {{-- Pagination Content --}}
        {{ $services->links('vendor.livewire.tailwind') }}

        {{-- Delete Modal --}}
        <x-forms.modals.delete-confirmation />
    </section>
</div>

<x-pages.notifscript />
