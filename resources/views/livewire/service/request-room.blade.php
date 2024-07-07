<div>
    <section class="px-4 pt-8 sm:px-6">
        {{-- @include('components.notification.flash') --}}

        {{-- Page Title --}}
        <x-pages.page-title :title="$serviceRequest->summary" />

        {{-- Content --}}
        <div class="mb-6 mt-10">
            <div class="flex flex-col-reverse lg:flex-row gap-4 lg:gap-6">
                {{-- Komentar --}}
                <div
                    class="flex flex-col col-span-2 lg:basis-2/3 overflow-x-auto rounded-md bg-white dark:bg-gray-800 shadow">
                    <div class="w-auto">
                        <div
                            class="flex place-items-center justify-start space-x-3 bg-gray-300 dark:bg-gray-700 px-6 py-6 font-bold">
                            <span class="h-8 w-8 rounded-full shadow">
                                <x-images.avatar />
                            </span>
                            <div>
                                <span class="text-sm text-gray-900 dark:text-white">{{ auth()->user()->name }}</span>
                                <p class="text-xs text-gray-700 dark:text-gray-400">{{ auth()->user()->email }}</p>
                            </div>
                        </div>
                        <div class="px-6 pb-6 pt-4">
                            @livewire('service.comments.comment-list', ['serviceId' => $serviceRequest->id])
                        </div>
                    </div>
                    @if ($status === 'dijawab')
                        <form wire:submit="saveComment" class="mt-auto">
                            <div class="relative flex bg-gray-300 dark:bg-gray-700 px-6 py-6">
                                <input wire:model="comment" type="text" placeholder="Tuliskan pesan anda!"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <div class="absolute right-5 place-items-center inset-y-6 lg:inset-y-0 sm:flex">
                                    <button type="submit"
                                        class="px-4 py-3 text-gray-900 dark:text-white hover:text-primary-400 dark:hover:text-primary-500 transition duration-200 ease-in-out">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            class="h-4 w-4 transform rotate-90">
                                            <path
                                                d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z">
                                            </path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </form>
                    @endif
                </div>

                {{-- Informasi --}}
                <div class="lg:basis-1/3 overflow-x-auto rounded-md bg-white dark:bg-gray-800 shadow">
                    <div class="w-full">
                        <div
                            class="flex place-items-center justify-between bg-gray-300 dark:bg-gray-700 px-6 py-6 text-sm font-bold">
                            {{-- Ticket Title --}}
                            <span class="mr-4 max-w-sm text-gray-900 dark:text-white leading-4">
                                Tiket : #{{ substr($serviceRequest->id, 0, 8) }}
                            </span>

                            {{-- Ticket Status Select --}}
                            @role('admin')
                                <select
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    wire:model.live="status">
                                    <option hidden selected>Status Tiket</option>
                                    <option value="menunggu">Menunggu</option>
                                    <option value="dijawab">Dijawab</option>
                                    <option value="ditutup">Ditutup</option>
                                    <option value="ditunda">Ditunda</option>
                                    <option value="spam">Spam</option>
                                </select>
                            @endrole
                        </div>
                        <div class="px-6 pb-4 pt-6">
                            <div class="mb-5 space-y-3">
                                <span class="text-gray-900 dark:text-white font-bold">Pemilik Tiket</span>
                                <p class="text-sm text-gray-700 dark:text-gray-300">{{ $serviceRequest->user->name }}
                                </p>
                            </div>

                            <x-pages.divider />

                            <div class="my-5 space-y-3">
                                <span class="text-gray-900 dark:text-white font-bold">Status Tiket</span>
                                <p class="text-sm text-gray-700 dark:text-gray-300">{{ ucfirst($status) }}</p>
                            </div>

                            <x-pages.divider />

                            <div class="my-5 space-y-3">
                                <span class="text-gray-900 dark:text-white font-bold">Subyek Layanan</span>
                                <p class="text-sm text-gray-700 dark:text-gray-300">
                                    {{ $serviceRequest->serviceType->type ?? '-' }}</p>
                            </div>

                            <x-pages.divider />

                            <div class="my-5 space-y-3">
                                <span class="text-gray-900 dark:text-white font-bold">Tanggal Pengajuan</span>
                                <p class="text-sm text-gray-700 dark:text-gray-300">
                                    {{ $serviceRequest->created_at->format('d M Y') }}</p>
                            </div>

                            <x-pages.divider />

                            <div class="my-5 space-y-3">
                                <span class="text-gray-900 dark:text-white font-bold">Tanggal Selesai</span>
                                <p class="text-sm text-gray-700 dark:text-gray-300">
                                    {{ is_null($serviceRequest->completed_at) ? '-' : $serviceRequest->completed_at->format('d M Y') }}
                                </p>
                            </div>

                            <x-pages.divider />

                            <div class="mt-5 space-y-3">
                                <span class="text-gray-900 dark:text-white font-bold">Deskripsi Permasalahan</span>
                                <div class="text-sm text-gray-700 dark:text-gray-300">{!! $serviceRequest->description !!}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
