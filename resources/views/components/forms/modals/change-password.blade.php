<div
    x-data="{ showModal: @entangle('change_password') }"
    @keydown.window.escape="showModal = false">
    {{-- Dark Background --}}
    <div x-cloak x-show="showModal" x-transition.opacity class="fixed inset-0 z-9999 bg-gray-100/80 dark:bg-gray-900/80"></div>

    {{-- Window --}}
    <div
        x-cloak
        x-show="showModal"
        x-transition
        class="fixed inset-0 z-99999 flex place-items-center justify-center px-4">
        <div class="mx-auto h-96 w-screen mx-w-sm lg:max-w-xl">
            <form wire:submit="submitData">
                <div class="rounded-t-md bg-white dark:bg-gray-700 shadow-md p-3 text-justify text-neutral-600">
                    <div class="my-4 text-xl text-gray-900 dark:text-white text-center">Halo <b>{{ auth()->user()->name }}</b>!</div>
                    <p class="mb-6 text-gray-700 dark:text-gray-400">
                        Selamat datang di sistem aplikasi ITValet. Agar dapat mengakses aplikasi, anda dapat menggunakan
                        <span class="font-bold text-gray-900 dark:text-white">SSO BPS atau Otentikasi Bawaan</span>
                        yang telah disediakan pada halaman depan.
                    </p>
                    <p class="mb-6 text-gray-700 dark:text-gray-400">
                        Silahkan <span class="font-bold text-gray-900 dark:text-white">ganti password bawaan aplikasi</span>
                        menggunakan password SSO BPS pada kotak isian di bawah.
                        Password yang anda masukkan akan terenkripsi dan aman disimpan pada aplikasi.
                    </p>
                    <x-forms.inputs.text model="password" type="text" placeholder="Isikan Password SSO BPS Anda ..." />
                </div>
                <div class="flex place-items-center rounded-b-md bg-gray-300 dark:bg-gray-600 px-8 py-4">
                    <button class="w-full rounded-md bg-primary-400 px-3 py-2 text-sm font-medium text-white hover:bg-primary-500 hover:text-primary-200">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
