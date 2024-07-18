<div>
    <section class="px-4 pt-8 sm:px-6">
        {{-- Page Title --}}
        <x-pages.page-title title="Daftar Pengguna Aplikasi" />

        {{-- Content --}}
        <div class="mb-6 mt-10">
            <div
                class="items-center justify-between block sm:flex md:divide-x md:divide-gray-100 dark:divide-gray-700 mb-4">
                <div class="flex items-center mb-4 sm:mb-0">
                    <x-forms.inputs.search placeholder="Cari User ..." />
                </div>
                <x-buttons.page wire:click.prevent="createUser" icon="plus-circle" title="User" />
            </div>

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

                                    {{-- Nama Pengguna/Uni --}}
                                    <td scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
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
                                            <span
                                                class="text-gray-500 dark:text-gray-400">{{ ucwords($role->name) }}</span>
                                        @endforeach
                                    </td>

                                    {{-- Tipe --}}
                                    <td class="px-6 py-4">
                                        <span class="text-gray-500 dark:text-gray-400">{{ $user->type }}</span>
                                    </td>

                                    {{-- Aksi --}}
                                    <td class="px-6 py-4">
                                        <div class="flex place-items-center space-x-3">
                                            <x-buttons.table-action data-drawer-target="drawer-edit-user"
                                                data-drawer-show="drawer-edit-user" data-drawer-placement="right"
                                                aria-controls="drawe-edit-user"
                                                wire:click.prevent="editUser('{{ $user->id }}')"
                                                icon="pencil-square" tooltip="Edit User" @class(['text-primary-400 hover:text-primary-500 cursor-pointer']) />

                                            <x-buttons.table-action
                                                wire:click.prevent="deleteUser('{{ $user->id }}')" icon="trash"
                                                tooltip="Hapus" @class(['text-red-500 hover:text-red-600 cursor-pointer']) />
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

        {{-- Create User Modal --}}
        <x-forms.modals.builder title="User Baru">
            <form wire:submit="storeUser">
                <div class="px-6 pb-4">
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <x-forms.inputs.select model="userForm.type" label="Tipe Pengguna" method="live"
                                :optitem="$userTypeOpt" />
                        </div>
                        <div class="col-span-2">
                            <x-forms.inputs.text model="userForm.name" label="Nama Pegawai / Unit / Ruangan"
                                type="text" />
                        </div>
                        @if ($this->userForm->type === 'Perorangan')
                            <div class="col-span-2">
                                <x-forms.inputs.text model="userForm.email" label="Email" type="email" />
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <x-forms.inputs.text model="userForm.bps_id" label="NIP Lama/NIP BPS" type="number" />
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <x-forms.inputs.text model="userForm.employee_id" label="NIP Baru Pegawai"
                                    type="number" />
                            </div>
                            <div class="col-span-2">
                                <x-forms.inputs.select model="userForm.role" label="Role/Hak Akses" :optitem="$this->userRoles"
                                    placeholder="Pilih Role/Hak Akses" />
                            </div>
                        @endif
                    </div>
                </div>
                <div class="rounded-b-md bg-gray-200 dark:bg-gray-600 px-6 py-4">
                    <button type="submit"
                        class="flex py-2 px-3 text-sm font-medium ml-auto text-center text-white bg-primary-600 rounded-md hover:bg-primary-700 dark:bg-primary-500 dark:hover:bg-primary-600">
                        <div wire:loading>
                            <x-icons.flowbite-solid name="animate-spin" class="w-5 h-5" />
                        </div>
                        <span>Simpan Informasi User</span>
                    </button>
                </div>
            </form>
        </x-forms.modals.builder>

        {{-- Edit User Drawer --}}
        <x-forms.modals.drawer drawer="drawer-edit-user" title="Edit User" icon="pencil-square">
            <div class="mb-6">
                <x-forms.inputs.text model="userForm.name" label="Nama Pegawai / Unit / Ruangan" type="text" />
            </div>
            <div class="mb-6">
                <x-forms.inputs.text model="userForm.email" label="Email" type="email" />
            </div>
            <div class="mb-6">
                <x-forms.inputs.text model="userForm.bps_id" label="NIP Lama/NIP BPS" type="number" />
            </div>
            <div class="mb-6">
                <x-forms.inputs.text model="userForm.employee_id" label="NIP Baru Pegawai" type="number" />
            </div>
            <div class="mb-6">
                <x-forms.inputs.select model="userForm.role" label="Role/Hak Akses" :optitem="$this->userRoles"
                    placeholder="Pilih Role/Hak Akses" />
            </div>
            <form wire:submit="updateUser">
                <button type="submit" data-drawer-hide="drawer-edit-user" aria-controls="drawer-edit-user"
                    class="text-white justify-center flex items-center bg-primary-700 hover:bg-primary-800 w-full focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                    Simpan
                </button>
            </form>
        </x-forms.modals.drawer>

        {{-- Delete modal --}}
        <x-forms.modals.delete-confirmation />
    </section>
</div>
