<div>
    <section class="px-4 pt-8 sm:px-6">
        {{-- Header --}}
        <div class="flex flex-row flex-wrap place-items-center justify-between">
            {{-- Title --}}
            <x-pages.page-title title="Perangkat Lunak" />

            @can('create-software')
                <x-pages.page-button :route="route('software.create')" title="Perangkat Lunak" />
            @endcan
        </div>

        {{-- Content --}}
        <div class="my-8">
            <x-forms.inputs.search />

            @if ($softwares->isEmpty())
                <x-images.not-found />
            @else
                <div class="relative overflow-x-auto shadow rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-800 uppercase bg-gray-300 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="p-4">
                                    <div class="flex place-items-center">
                                        <input id="checkbox-all-search" type="checkbox"
                                            class="w-4 h-4 text-primary-600 bg-gray-100 border-gray-300 rounded focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">Nama</th>
                                <th scope="col" class="px-6 py-3">Kategori</th>
                                <th scope="col" class="px-6 py-3">Tautan</th>
                                <th scope="col" class="px-6 py-3">Catatan</th>
                                @role('admin')
                                    <th scope="col" class="px-6 py-3">Aksi</th>
                                @endrole
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($softwares as $software)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600">
                                <td class="w-4 p-4">
                                    <div class="flex place-items-center">
                                        <input id="checkbox-table-search-1" type="checkbox"
                                            class="w-4 h-4 text-primary-600 bg-gray-100 border-gray-300 rounded focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                    </div>
                                </td>

                                {{-- Nama --}}
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <p class="mb-1 text-gray-900 dark:text-white">{{ $software->name }}</p>
                                </th>

                                {{-- Kategori --}}
                                <td class="px-6 py-4">
                                    <span class="text-gray-500 dark:text-gray-400">{{ $software->category }}</span>
                                </td>

                                {{-- URl --}}
                                <td class="px-6 py-4">
                                    <span class="text-gray-500 dark:text-gray-400">{{ $software->url }}</span>
                                </td>

                                {{-- Catatan --}}
                                <td class="px-6 py-4">
                                    <p class="text-gray-500 dark:text-gray-400">{!! $software->note ?? '-' !!}</p>
                                </td>

                                {{-- Aksi --}}
                                @role('admin')
                                <td class="px-6 py-4">
                                    <div class="flex place-items-center space-x-3">
                                        {{-- Edit Software --}}
                                        <x-pages.cell-button :route="route('software.edit', $software->id)" tooltip="Software"
                                            color="text-primary-500 hover:text-primary-600" icon="pencil-square" />

                                        @can('delete-device-state')
                                            <x-pages.delete-cell-button label="Hapus" :id="$software->id" />
                                        @endcan
                                    </div>
                                </td>
                                @endrole
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>

        {{-- Pagination --}}
        {{ $softwares->links('vendor.livewire.tailwind') }}

        {{-- Delete Modal --}}
        <x-forms.modals.delete-confirmation />
    </section>
</div>

<x-pages.notifscript />
