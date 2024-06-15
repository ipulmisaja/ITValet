<div class="mt-10">
    <div class="text-gray-900 dark:text-white text-xl mb-4">Tiket yang Anda Ajukan</div>
    @if ($requests->count() > 0)
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">Tiket</th>
                        <th scope="col" class="px-6 py-3">Status</th>
                        <th scope="col" class="px-6 py-3">Diajukan</th>
                        <th scope="col" class="px-6 py-3">Selesai</th>
                        <th scope="col" class="px-6 py-3">Deskripsi</th>
                        <th scope="col" class="px-6 py-3">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($requests as $request)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 font-medium text-gray-900 dark:text-white">
                            <td scope="row" class="px-6 py-4 space-y-2">
                                <span class="font-bold text-md">#{{ substr($request->id, 0, 8) }}</span>
                            </td>
                            <td class="px-6 py-4 space-y-3">
                                @switch($request->status)
                                    @case('menunggu')
                                        <span class="bg-primary-300 dark:bg-primary-500 rounded-md px-2 py-1">{{ ucfirst($request->status) }}</span>
                                    @break
                                    @case('dijawab')
                                        <span class="bg-red-300 dark:bg-red-500 rounded-md px-2 py-1">{{ ucfirst($request->status) }}</span>
                                    @break
                                    @case('ditutup')
                                        <span class="bg-green-300 dark:bg-green-500 rounded-md px-2 py-1">{{ ucfirst($request->status) }}</span>
                                    @break
                                    @case('ditunda')
                                        <span class="bg-orange-300 dark:bg-orange-500 rounded-md px-2 py-1">{{ ucfirst($request->status) }}</span>
                                    @break
                                    @case('spam')
                                        <span class="bg-purple-300 dark:bg-purple-500 rounded-md px-2 py-1">{{ ucfirst($request->status) }}</span>
                                    @break
                                @endswitch
                                <p class="text-gray-500 dark:text-gray-400">Subyek: {{ $request->request_type ?? '-' }}</p>
                            </td>
                            <td class="px-6 py-4">
                                {{ $request->created_at->format('d M Y') }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $request->completed_at ? $request->completed_at->format('d M Y') : '-' }}
                            </td>
                            <td class="px-6 py-4 font-medium whitespace-nowrap space-y-2    ">
                                <span class="font-bold text-md">{{ $request->summary }}</span>
                                <p class="text-gray-900 dark:text-gray-300">{!! $request->description !!}</p>
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
        </div>
    @else
        <div class="flex">
            <p class="flex place-items-center gap-2 bg-primary-300 dark:bg-primary-500 rounded-md p-2 text-gray-900 dark:text-white">
                <x-icons.herosolid name="information-circle" class="hidden lg:block h-5 w-5" />
                Belum ada layanan TI yang anda ajukan.
            </p>
        </div>
    @endif
</div>
