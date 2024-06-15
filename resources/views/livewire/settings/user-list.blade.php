<div>
    <section class="px-4 pt-8 sm:px-6">
        {{-- Section Header --}}
        <div class="flex flex-wrap place-items-center justify-between">
            {{-- Title --}}
            <x-pages.page-title title="Daftar Pengguna Aplikasi" />

            {{-- Add New Device --}}
            <x-pages.page-button :route="route('user.create')" title="Pengguna" />
        </div>

        {{-- Content --}}
        <div class="mt-14 mb-7">
            <x-forms.inputs.search />

            @if ($users->isEmpty())
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
                                <th scope="col" class="px-6 py-3">Nama Pegawai/Unit</th>
                                <th scope="col" class="px-6 py-3">NIP</th>
                                <th scope="col" class="px-6 py-3">Role</th>
                                <th scope="col" class="px-6 py-3">Tipe</th>
                                <th scope="col" class="px-6 py-3">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    {{-- Checkbox --}}
                                    <td class="w-4 p-4">
                                        <div class="flex place-items-center">
                                            <input id="checkbox-table-search-1" type="checkbox"
                                                class="w-4 h-4 text-primary-600 bg-gray-100 border-gray-300 rounded focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                        </div>
                                    </td>

                                    {{-- Nama Pengguna/Uni --}}
                                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <p class="mb-1 text-dark-900 dark:text-white">{{ $user->name }}</p>
                                        <span class="text-gray-500 dark:text-gray-400">{{ $user->email ?? '-' }}</span>
                                    </td>

                                    {{-- NIP --}}
                                    <td class="px-6 py-4">
                                        <span class="text-gray-500 dark:text-gray-400">{{ $user->employee_id }}</span>
                                    </td>

                                    {{-- Role --}}
                                    <td class="px-6 py-4">
                                        @foreach ($user->roles as $role)
                                            <span class="text-gray-500 dark:text-gray-400">{{ ucwords($role->name) }}</span>
                                        @endforeach
                                    </td>

                                    {{-- Tipe --}}
                                    <td class="px-6 py-4">
                                        <span class="text-gray-500 dark:text-gray-400">{{ $user->type }}</span>
                                    </td>

                                    {{-- Aksi --}}
                                    <td class="px-6 py-4">
                                        <div class="flex place-items-center space-x-3">
                                            <x-pages.cell-button :route="route('user.edit', $user->id)" tooltip="Edit Pengguna"
                                                color="text-primary-500 hover:text-primary-600" icon="pencil-square" />

                                            <x-pages.delete-cell-button label="Hapus" :id="$user->id" />
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
        {{ $users->links('vendor.livewire.tailwind') }}

        {{-- Delete modal --}}
        <x-forms.modals.delete-confirmation />
    </section>
</div>

<x-pages.notifscript />
