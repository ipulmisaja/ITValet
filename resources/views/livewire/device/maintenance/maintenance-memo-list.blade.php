<div>
    <section class="px-4 pt-8 sm:px-6">
        {{-- Page Title --}}
        <x-pages.page-title title="Memo Pengajuan Pemeliharaan Perangkat TI" />

        {{-- Content --}}
        <div class="mb-6 mt-10">
            <div
                class="items-center justify-between block sm:flex md:divide-x md:divide-gray-100 dark:divide-gray-700 mb-4">
                <div class="flex items-center mb-4 sm:mb-0">
                    <x-forms.inputs.search placeholder="Cari informasi memorandum..." />
                </div>
                <x-pages.page-button :route="route('device.maintenance.create-memo')" icon="plus-circle" title="Memo Baru" />
            </div>

            <div class="relative overflow-x-auto shadow rounded-lg">
                @if ($memos->isEmpty())
                    <x-images.not-found />
                @else
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
                                <th scope="col" class="px-6 py-3">ID</th>
                                <th scope="col" class="px-6 py-3">Nomor Memo</th>
                                <th scope="col" class="px-6 py-3">Daftar Perangkat</th>
                                <th scope="col" class="px-6 py-3">Verifikasi</th>
                                {{-- <th scope="col" class="px-6 py-3">Berkas</th> --}}
                                <th scope="col" class="px-6 py-3">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($memos as $memo)
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="w-4 p-4">
                                        <div class="flex place-items-center">
                                            <input id="checkbox-table-search-1" type="checkbox"
                                                class="w-4 h-4 text-primary-600 bg-gray-100 border-gray-300 rounded focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                        </div>
                                    </td>

                                    {{-- ID --}}
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        #{{ substr($memo->id, 0, 8) }}
                                    </th>

                                    {{-- Nomor Memo --}}
                                    <td class="px-6 py-4">
                                        <p class="text-gray-800 dark:text-white">{{ $memo->number }}</p>
                                    </td>

                                    {{-- Daftar Perangkat --}}
                                    <td class="px-6 py-4">
                                        <p class="text-gray-800 dark:text-white">
                                        <ul style="list-style-type:circle" class="space-y-2">
                                            @foreach ($memo->maintenances as $maintenance)
                                                <li>{{ $maintenance->device->brand . ' ' . $maintenance->device->name . ' (SN : ' . $maintenance->device->serial . ')' }}
                                                </li>
                                            @endforeach
                                        </ul>
                                        </p>
                                    </td>

                                    {{-- Tanda Tangan --}}
                                    <td class="px-6 py-4">
                                        @if ($memo->sign_code)
                                            <span
                                                class="bg-primary-100 text-primary-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-primary-400 border border-primary-100 dark:border-primary-500 whitespace-nowrap">Sudah</span>
                                        @else
                                            <span
                                                class="bg-yellow-100 text-yellow-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-yellow-400 border border-yellow-100 dark:border-yellow-500 whitespace-nowrap">Belum</span>
                                        @endif
                                    </td>

                                    {{-- Berkas --}}
                                    {{-- <td class="px-6 py-4">
                                        <a href="{{ $memo->attachment ?? '-' }}"
                                            class="bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-blue-400 border border-blue-100 dark:border-blue-500 whitespace-nowrap"
                                            target="_blank">
                                            {{ $memo->attachment ? 'Unduh' : '-' }}
                                        </a>
                                    </td> --}}
                                    <td class="px-6 py-4">
                                        <div class="flex place-items-center space-x-3">
                                            <x-pages.cell-button.generate-memo :id="$memo->id" />

                                            @role('admin')
                                                <x-pages.cell-button.navigate :route="route('device.maintenance.edit-memo', $memo->id)" tooltip="Update"
                                                    color="text-green-500 hover:text-green-600" icon="pencil-square" />

                                                <x-pages.cell-button.delete-item :id="$memo->id" />
                                            @endrole
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>

        {{-- Pagination Content --}}
        {{ $memos->links('vendor.livewire.tailwind') }}

        {{-- Delete Modal --}}
        <x-forms.modals.delete-confirmation />
    </section>
</div>
