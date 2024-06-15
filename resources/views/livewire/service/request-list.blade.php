<div>
    <section class="px-4 pt-8 sm:px-6">
        {{-- Section Title --}}
        <div class="flex flex-wrap place-items-center justify-between">
            {{-- Title --}}
            <x-pages.page-title title="Daftar Permintaan Layanan TI"/>

            {{-- Permintaan Layanan --}}
            <x-pages.page-button :route="route('request.create')" title="Permintaan" />
        </div>

        <div class="mt-14 mb-7">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
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
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="w-4 p-4">
                                    <div class="flex place-items-center">
                                        <input id="checkbox-table-search-1" type="checkbox"
                                            class="w-4 h-4 text-primary-600 bg-gray-100 border-gray-300 rounded focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                    </div>
                                </td>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    #{{ substr($request->id, 0, 8) }}
                                </th>
                                <td class="px-6 py-4">
                                    <p class="text-gray-800 dark:text-white">{{ $request->user->name }}</p>
                                    <span class="text-xs text-primary-600 dark:text-gray-400">{{ $request->user->email }}</span>
                                </td>
                                <td class="px-6 py-4">
                                    <p class="text-gray-800 dark:text-white">
                                        {{ $request->request_type === 'permintaan' ? 'Permintaan' : 'Penanganan Gangguan' }}
                                    </p>
                                    <span class="text-xs text-gray-500 dark:text-gray-400">
                                        Subyek : {{ $request->serviceType->type ?? '-' }}
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <p class="text-gray-800 dark:text-white">{{ ucfirst($request->status) }}</p>
                                    <span class="text-xs text-gray-500 dark:text-gray-400">
                                        {{ is_null($request->created_at) ? '-' : $request->created_at->format('d M Y') }}
                                        s/d
                                        {{ is_null($request->completed_at) ? '-' : $request->completed_at->format('d M Y') }}
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="text-sm text-gray-500 dark:text-gray-400 whitespace-normal">{!! $request->description !!}</span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex place-items-center space-x-3">
                                        @if ($request->status === 'menunggu')
                                            <x-pages.cell-button :route="route('request.edit', $request->id)" tooltip="Update"
                                                color="text-primary-500 hover:text-primary-600" icon="pencil-square" />
                                        @endif

                                        <x-pages.cell-button :route="route('request.room', $request->id)" tooltip="Diskusi"
                                            color="text-yellow-400 hover:text-yellow-500" icon="eye" />

                                        @if (in_array(!$request->status, ['ditutup', 'spam']))
                                            <x-pages.delete-cell-button label="Hapus" :id="$request->id" />
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
    </section>
</div>

<x-pages.notifscript />
