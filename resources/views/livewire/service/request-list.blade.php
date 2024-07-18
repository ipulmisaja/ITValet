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
                    <x-buttons.page wire:click.prevent="createRequest" icon="plus-circle" title="Permintaan" />
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
                                                    {{ $request->device->master->name . ' (SN. ' . $request->device->serial . ')' }}
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
                                    <td class="px-6 py-4 space-y-1">
                                        <p class="text-gray-800 dark:text-white">
                                            {{ $request->summary }}
                                        </p>
                                        <p class="flex items-center space-x-2 cursor-pointer" x-data
                                            x-tooltip="{allowHTML: true}" x-tooltip.raw="{{ $request->description }}">
                                            <x-icons.herosolid name="document-magnify" class="w-4 h-4" />
                                            <span>Deskripsi</span>
                                        </p>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex place-items-center space-x-3">
                                            <x-buttons.table-action wire:navigate :href="route('request.room', $request->id)" tooltip="Diskusi"
                                                @class(['text-violet-400 hover:text-violet-500 cursor-pointer']) icon="eye" />

                                            @if ($request->user_id === auth()->user()->id && $request->status === 'menunggu')
                                                <x-buttons.table-action data-drawer-target="drawer-edit-request"
                                                    data-drawer-show="drawer-edit-request" data-drawer-placement="right"
                                                    aria-controls="drawe-edit-request"
                                                    wire:click.prevent="editRequest('{{ $request->id }}')"
                                                    tooltip="Update" icon="pencil-square"
                                                    @class(['text-green-500 hover:text-green-600 cursor-pointer']) />
                                            @endif

                                            @if (is_null($request->maintenance_request))
                                                @canany(['create-device-maintenance', 'update-device-maintenance'])
                                                    <x-buttons.table-action
                                                        wire:click.prevent="addToMaintenance('{{ $request->id }}')"
                                                        tooltip="Pemeliharaan" icon="shield-exclamation"
                                                        @class(['text-yellow-400 hover:text-yellow-500 cursor-pointer']) />
                                                @endcanany
                                            @endif

                                            @if ($request->status === 'spam')
                                                <x-buttons.table-action
                                                    wire:click.prevent="deleteRequest('{{ $request->id }}')"
                                                    icon="trash" tooltip="Hapus" @class(['text-red-500 hover:text-red-600 cursor-pointer']) />
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

        {{-- Create Request Modal --}}
        <x-forms.modals.builder title="Permintaan Layanan Baru">
            <form wire:submit="storeRequest">
                <div class="px-6 pb-4">
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <x-forms.inputs.select model="requestForm.service_type" label="Jenis Layanan"
                                :optitem="$this->serviceTypes" method="live" />
                        </div>
                        @if ($showDeviceInput)
                            <div class="col-span-2">
                                <x-forms.inputs.select model="requestForm.device"
                                    label="Perangkat yang Diajukan Perbaikan" :optitem="$this->devices" />
                            </div>
                        @endif
                        <div class="col-span-2">
                            <x-forms.inputs.text model="requestForm.summary" label="Ringkasan Permintaan Layanan"
                                type="text" />
                        </div>
                        <div class="col-span-2">
                            <x-forms.inputs.text-area model="requestForm.description"
                                label="Deskripsi Permintaan Layanan" />
                        </div>
                    </div>
                </div>
                <div class="rounded-b-md bg-gray-200 dark:bg-gray-600 px-6 py-4">
                    <button type="submit"
                        class="flex py-2 px-3 text-sm font-medium ml-auto text-center text-white bg-primary-600 rounded-md hover:bg-primary-700 dark:bg-primary-500 dark:hover:bg-primary-600">
                        <div wire:loading>
                            <x-icons.flowbite-solid name="animate-spin" class="w-5 h-5" />
                        </div>
                        <span>Simpan Permintaan Layanan</span>
                    </button>
                </div>
            </form>
        </x-forms.modals.builder>

        {{-- Edit Request Drawer --}}
        <x-forms.modals.drawer drawer="drawer-edit-request" title="Edit Permintaan" icon="pencil-square">
            <div class="mb-6">
                <x-forms.inputs.select model="requestForm.service_type" label="Jenis Layanan" :optitem="$this->serviceTypes"
                    method="live" />
            </div>
            <div class="mb-6">
                <x-forms.inputs.select model="requestForm.device" label="Perangkat yang Diajukan Perbaikan"
                    :optitem="$this->devices" />
            </div>
            <div class="mb-6">
                <x-forms.inputs.text model="requestForm.summary" label="Ringkasan Permintaan Layanan"
                    type="text" />
            </div>
            <div class="mb-6">
                <x-forms.inputs.trix model="requestForm.description" label="Deskripsi Permintaan Layanan" />
            </div>
            <form wire:submit="updateRequest">
                <button type="submit" data-drawer-hide="drawer-edit-request" aria-controls="drawer-edit-request"
                    class="text-white justify-center flex items-center bg-primary-700 hover:bg-primary-800 w-full focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                    Simpan
                </button>
            </form>
        </x-forms.modals.drawer>

        {{-- Maintenance Request --}}
        <x-forms.modals.maintenance-request />

        {{-- Delete Modal --}}
        <x-forms.modals.delete-confirmation />
    </section>
</div>
