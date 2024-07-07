<div>
    <section class="px-4 pt-8 sm:px-6">
        {{-- Page Title --}}
        <x-pages.page-title title="Daftar Permintaan Layanan TI" />

        <div class="mb-6 mt-10">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <div
                    class="items-center justify-between block sm:flex md:divide-x md:divide-gray-100 dark:divide-gray-700 mb-4">
                    <div class="flex items-center mb-4 sm:mb-0">
                        <x-forms.inputs.search placeholder="Cari Informasi Layanan ..." />
                    </div>
                    <x-pages.page-button :route="route('request.create')" icon="plus-circle" title="Permintaan" />
                </div>
                @if ($requests->isEmpty())
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
                                <th scope="col" class="px-6 py-3">Tiket</th>
                                <th scope="col" class="px-6 py-3">Nama Pegawai</th>
                                <th scope="col" class="px-6 py-3">Jenis Layanan</th>
                                <th scope="col" class="px-6 py-3">Status</th>
                                <th scope="col" class="px-6 py-3">Deskripsi</th>
                                <th scope="col" class="px-6 py-3">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($requests as $request)
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="w-4 p-4">
                                        <div class="flex place-items-center">
                                            <input id="checkbox-table-search-1" type="checkbox"
                                                class="w-4 h-4 text-primary-600 bg-gray-100 border-gray-300 rounded focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                        </div>
                                    </td>
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        #{{ substr($request->id, 0, 8) }}
                                    </th>
                                    <td class="px-6 py-4">
                                        <p class="text-gray-800 dark:text-white">{{ $request->user->name }}</p>
                                        <span
                                            class="text-xs text-primary-600 dark:text-gray-400">{{ $request->user->email }}</span>
                                    </td>
                                    <td class="px-6 py-4 space-y-1">
                                        <div class="text-gray-800 dark:text-white text-md">
                                            {{ $request->serviceType->type }}
                                        </div>
                                        <div
                                            class="text-gray-500 dark:text-gray-400 text-xs flex flex-nowrap items-center space-x-2">
                                            <x-icons.herosolid name="computer-desktop" class="h-4 w-4" />
                                            <span>
                                                @if ($request->device)
                                                    {{ $request->device->name . ' (SN. ' . $request->device->serial . ')' }}
                                                @else
                                                    -
                                                @endif
                                            </span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <p class="text-gray-800 dark:text-white">{{ ucfirst($request->status) }}</p>
                                        <span class="text-xs text-gray-500 dark:text-gray-400">
                                            {{ is_null($request->created_at) ? '-' : $request->created_at->format('d M Y') }}
                                            s/d
                                            {{ is_null($request->completed_at) ? '-' : $request->completed_at->format('d M Y') }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 flex items-center space-x-1">
                                        <span class="text-gray-800 dark:text-white">
                                            {{ $request->summary }}
                                        </span>
                                        <span x-data x-tooltip="{allowHTML: true}"
                                            x-tooltip.raw="{{ $request->description }}">
                                            <x-icons.herosolid name="document-magnify" class="w-5 h-5" />
                                        </span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex place-items-center space-x-3">
                                            <x-pages.cell-button.navigate :route="route('request.room', $request->id)" tooltip="Diskusi"
                                                color="text-violet-400 hover:text-violet-500" icon="eye" />

                                            @if ($request->user_id === auth()->user()->id && $request->status === 'menunggu')
                                                <x-pages.cell-button.navigate :route="route('request.edit', $request->id)" tooltip="Update"
                                                    color="text-green-500 hover:text-green-600" icon="pencil-square" />
                                            @endif

                                            @if (is_null($request->maintenance_request))
                                                @canany(['create-device-maintenance', 'update-device-maintenance'])
                                                    <x-pages.cell-button.maintenance-request label="Pemeliharaan"
                                                        :id="$request->id" />
                                                @endcanany
                                            @endif

                                            @if ($request->status === 'spam')
                                                <x-pages.cell-button.delete-item :id="$request->id" />
                                            @endif
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
        {{ $requests->links('vendor.livewire.tailwind') }}

        {{-- Maintenance Request --}}
        <x-forms.modals.maintenance-request />

        {{-- Delete Modal --}}
        <x-forms.modals.delete-confirmation />
    </section>
</div>

<x-pages.notifscript />
