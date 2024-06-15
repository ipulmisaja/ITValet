<div>
    <section class="flex h-screen flex-col place-items-center md:flex-row">
        <div class="hidden h-screen w-full bg-primary-600 md:w-1/2 lg:block xl:w-2/3">
            <img src="{{ secure_asset(env('APP_URL') . '/images/login.jpg') }}" alt="" class="h-full w-full object-cover">
        </div>


        <div class="flex flex-col h-screen w-full place-items-center justify-center bg-white dark:bg-gray-800 md:mx-auto md:w-1/2 px-8 lg:w-1/3 lg:px-12">
            <div class="mb-16 text-center">
                <div class="fill-primary-400">
                    <x-images.logo class="w-64 lg:w-96" />
                </div>
            </div>

            {{-- Login Form --}}
            <form class="w-full" wire:submit="login">
                {{-- Login Form --}}
                <x-forms.inputs.text model="form.username" label="Username" type="text" />

                <x-forms.inputs.text model="form.password" label="Password" type="password" />

                <button type="submit"
                    class="w-full text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                    Log In
                </button>
            </form>
            <div class="text-center">
                <p class="mt-12 text-sm text-gray-500">&copy; {{ date('Y') }} - BPS Provinsi Sulawesi Barat.</p>
            </div>
        </div>
    </section>
</div>
