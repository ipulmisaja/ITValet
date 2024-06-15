<div class="bg-white rounded-md shadow overflow-x-auto">
    <table class="table-fixed w-full">
        <thead class="text-base font-semibold uppercase text-white bg-neutral-300">
            <tr>
                <th class="p-2">
                    <div class="font-semibold text-left">Nama Perangkat</div>
                </th>
                <th class="p-2">
                    <div class="font-semibold text-left">Tanggal Laporan</div>
                </th>
                <th class="p-2">
                    <div class="font-semibold text-left">Deskripsi</div>
                </th>
                <th class="p-2">
                    <div class="font-semibold text-center">Status</div>
                </th>
            </tr>
        </thead>
        <tbody class="text-sm divide-y divide-gray-100">
            @foreach ($data as $item)
            <tr>
                <td class="p-2">
                    <div class="flex place-items-center">
                        <div class="leading-4">
                            <div class="font-semibold mb-3 text-primary-500">{{ $item->device->type }}</div>
                            <div class="font-semibold text-md">{{ $item->device->name }}</div>
                            <div class="text-gray-500">No. Seri : {{ $item->device->serial }}</div>
                        </div>
                    </div>
                </td>
                <td class="p-2">
                    <div class="text-left">{{ $item->created_at->format('d M Y') }}</div>
                </td>
                <td class="p-2">
                    <div class="text-left font-medium">
                        <div class="font-semibold">{{ ucwords($item->maintenance) }}</div>
                        <div class="text-gray-500">{!! $item->description !!}</div>
                    </div>
                </td>
                <td class="p-2">
                    <div class="text-sm text-center">
                        <span class="p-2 rounded-lg bg-secondary-100">
                            <span class="font-medium text-secondary-600">{{ ucwords($item->condition) }}</span>
                        </span>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
