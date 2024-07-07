<div>
    <section class="px-4 pt-8 sm:px-6">
        {{-- Title --}}
        <x-pages.page-title :title="$pageTitle" />

        {{-- Content --}}
        <div class="mb-6 mt-10">
            <div class="w-full overflow-x-auto rounded-md bg-white dark:bg-gray-800 shadow">
                <form wire:submit="submitData">
                    <div class="flex flex-wrap p-6">
                        <div class="lg:pr-10 w-full mb-6">
                            <h2 class="text-base font-semibold tracking-tight text-black dark:text-white lg:text-2xl">Role</h2>
                            <p class="mt-4 text-gray-600 dark:text-gray-300 text-justify break-words">
                                Role adalah hak akses yang akan disematkan kepada pengguna agar dapat mengakses fitur
                                aplikasi sesuai dengan levelnya.
                            </p>
                        </div>

                        <div class="w-full">
                            <x-forms.inputs.text
                                model="name"
                                type="text"
                                placeholder="Role atau hak akses pengguna"
                            />
                        </div>
                    </div>
                    <x-pages.divider />
                    <div class="flex flex-wrap p-6">
                        <div class="lg:pr-10 w-full mb-6">
                            <h2 class="text-base font-semibold tracking-tight text-black dark:text-white lg:text-2xl">
                                Permission
                            </h2>
                            <p class="mt-4 text-gray-600 dark:text-gray-300 text-justify break-words">
                                Anda dapat memilih satu atau lebih permission yang akan disematkan kepada suatu role.
                            </p>
                        </div>
                        <div class="w-full grid grid-cols-3 gap-4">
                            @foreach ($this->listPermissions as $permission)
                                <x-forms.inputs.checkbox model="permissionsCheck" :label="$permission->name"/>
                            @endforeach
                        </div>
                    </div>
                    <div class="flex place-items-center rounded-b-md border-gray-200 bg-gray-200 dark:bg-gray-700 px-6 py-4">
                        <x-forms.attributes.save-button />
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
