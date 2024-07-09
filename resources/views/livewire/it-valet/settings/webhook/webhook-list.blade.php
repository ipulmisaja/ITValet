<div>
    <section class="px-4 pt-8 sm:px-6">
        {{-- Section Header --}}
        <div class="flex flex-wrap place-items-center justify-between">
            {{-- Title --}}
            <x-pages.page-title title="Webhook API" />

            {{-- Add New Device --}}
            <x-pages.page-button :route="route('webhook.create')" title="Webhook" />
        </div>

        {{-- Content --}}
        <div class="mt-14 mb-7">
            <x-forms.inputs.search />

            @if ($webhooks->isEmpty())
                <x-images.not-found />
            @else
                <div class="relative overflow-x-auto shadow rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-800 uppercase bg-gray-300 dark:bg-gray-700 dark:text-gray-300">
                            <tr>
                                <th scope="col" class="p-4">
                                    <div class="flex place-items-center">
                                        <input id="checkbox-all-search" type="checkbox"
                                            class="w-4 h-4 text-primary-600 bg-gray-100 border-gray-300 rounded focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">Provider</th>
                                <th scope="col" class="px-6 py-3">Nama Aplikasi</th>
                                <th scope="col" class="px-6 py-3">URL</th>
                                <th scope="col" class="px-6 py-3">Token</th>
                                <th scope="col" class="px-6 py-3">Status Aktivasi</th>
                                <th scope="col" class="px-6 py-3">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($webhooks as $webhook)
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    {{-- Checkbox --}}
                                    <td class="w-4 p-4">
                                        <div class="flex place-items-center">
                                            <input id="checkbox-table-search-1" type="checkbox"
                                                class="w-4 h-4 text-primary-600 bg-gray-100 border-gray-300 rounded focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                        </div>
                                    </td>

                                    {{-- Provider --}}
                                    <td scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <p class="text-dark-900 dark:text-white">{{ $webhook->provider }}</p>
                                    </td>

                                    {{-- Nama Aplikasi --}}
                                    <td scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <p class="text-dark-900 dark:text-white">{{ $webhook->name }}</p>
                                    </td>

                                    {{-- Alamat URL --}}
                                    <td class="px-6 py-4">
                                        <p class="text-gray-500 dark:text-gray-400">{{ $webhook->url }}</p>
                                    </td>

                                    {{-- Token --}}
                                    <td class="px-6 py-4">
                                        <p class="text-gray-500 dark:text-gray-400">{{ $webhook->token }}</p>
                                    </td>

                                    {{-- Status Aktivasi --}}
                                    <td class="px-6 py-4">
                                        @if ($webhook->status === 'up')
                                            <span
                                                class="bg-primary-100 text-primary-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-primary-400 border border-primary-100 dark:border-primary-500 whitespace-nowrap">
                                                Aktif
                                            </span>
                                        @else
                                            <span
                                                class="bg-yellow-100 text-yellow-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-yellow-400 border border-yellow-100 dark:border-yellow-500 whitespace-nowrap">
                                                Tidak Aktif
                                            </span>
                                        @endif
                                    </td>

                                    {{-- Aksi --}}
                                    <td class="px-6 py-4">
                                        <div class="flex place-items-center space-x-3">
                                            <x-pages.cell-button :route="route('webhook.edit', $webhook->id)" tooltip="Sunting"
                                                color="text-primary-500 hover:text-primary-600" icon="pencil-square" />

                                            <x-pages.delete-cell-button label="Hapus" :id="$webhook->id" />
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
        {{ $webhooks->links('vendor.livewire.tailwind') }}

        {{-- Delete modal --}}
        <x-forms.modals.delete-confirmation />
    </section>
</div>
