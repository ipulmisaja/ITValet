<div>
    <section class="px-4 pt-8 sm:px-6">

        <div class="flex flex-row flex-wrap place-items-center justify-between">
            {{-- Title --}}
            <x-pages.page-title :title="$pageTitle" />

            {{-- Add New Role --}}
            <x-pages.page-button :route="route('role-permission.create')" title="Role" />
        </div>

        {{-- Content --}}
        <div class="mt-14 mb-7">
            <x-forms.inputs.search />

            @if ($roles->isEmpty())
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
                                <th scope="col" class="px-6 py-3">Role</th>
                                <th scope="col" class="px-6 py-3">Permission</th>
                                <th scope="col" class="px-6 py-3">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="w-4 p-4">
                                        <div class="flex place-items-center">
                                            <input id="checkbox-table-search-1" type="checkbox"
                                                class="w-4 h-4 text-primary-600 bg-gray-100 border-gray-300 rounded focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                        </div>
                                    </td>

                                    {{-- Role --}}
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <span class="text-gray-900 dark:text-white">{{ ucfirst($role->name) }}</span>
                                    </th>

                                    {{-- Permission --}}
                                    <td class="px-6 py-4">
                                        <ul style="list-style-type:disc" class="text-gray-500 dark:text-gray-400 lg:space-y-2 flex flex-col lg:grid lg:grid-cols-3 gap-2 lg:gap-4">
                                            @foreach ($role->permissions as $permission)
                                                <li>{{ $permission->name }}</li>
                                            @endforeach
                                        </ul>
                                    </td>

                                    {{-- Aksi --}}
                                    <td class="px-6 py-4">
                                        <div class="flex place-items-center space-x-3">
                                            {{-- Edit Hak Akses --}}
                                            <x-pages.cell-button :route="route('role-permission.edit', $role->id)" tooltip="Role"
                                                color="text-primary-500 hover:text-primary-600" icon="key" />

                                            <x-pages.delete-cell-button label="Hapus" :id="$role->id" />
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>

        {{-- Delete Model --}}
        <x-forms.modals.delete-confirmation />
    </section>
</div>

<x-pages.notifscript />
