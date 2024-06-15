<div class="megaphone">
    {{-- <div class="relative w-6 h-6" x-data="{ open: false }">
        @include('megaphone::icon')
        @include('megaphone::popout')
    </div> --}}
    <div class="relative">
        <!-- Notifications -->
        <button type="button" aria-label="show notifications"
            class="p-2 text-gray-500 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700"
            data-dropdown-toggle="notification-dropdown">
            <span class="sr-only">Show Notifications</span>
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z">
                </path>
            </svg>
            @if ($unread->count() > 0)
                @if($showCount)
                    <span aria-label="unread count"
                        class="absolute top-0 left-0 rounded-full border-2 bg-red-500 px-1 shadow text-white text-xs">
                        {{ $unread->count() }}
                    </span>
                @else
                    <span aria-label="has unread notifications"
                        class="absolute top-0 left-0 h-2/5 rounded-full bg-red-500 shadow">
                @endif
            @endif
        </button>
    </div>
    <!-- Dropdown menu -->
    <div class="z-50 hidden max-w-sm my-4 overflow-hidden text-base list-none bg-white divide-y divide-gray-100 rounded shadow-lg dark:divide-gray-600 dark:bg-gray-700"
        id="notification-dropdown">
        <div
            class="block px-4 py-2 text-base font-medium text-center text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            Notifikasi
        </div>

        <div class="p-3">
            @if ($unread->count() > 0)
                <p tabindex="0" class="focus:outline-none text-sm leading-normal text-gray-900 dark:text-white">
                    Belum dibaca
                </p>

                @foreach ($unread as $announcement)
                    <div class="p-3 mt-4 bg-gray-100 dark:bg-gray-600 shadow rounded-md flex flex-shrink-0 justify-between">
                        <a href="{{ $announcement->data['link'] }}" class="w-full space-y-2">
                            <p
                                class="block w-full focus:outline-none text-sm leading-none my-0 text-gray-900 dark:text-white font-bold">
                                {{ $announcement->data['title'] }}
                            </p>
                            <p class="block w-full focus:outline-none text-sm leading-2 text-gray-700 dark:text-gray-300">
                                {{ $announcement->data['body'] }}
                            </p>
                            <p class="focus:outline-none text-xs leading-3 pt-1 text-gray-700 dark:text-gray-300"
                                title="29th Oct 2023 11:41">
                                {{ $announcement->created_at->diffForHumans() }}
                            </p>
                        </a>

                        @if($announcement->read_at === null)
                            <button role="button" aria-label="Mark as Read"
                                class="w-6 h-6 focus:outline-none focus:ring-2 focus:ring-offset-2 dark:bg-white focus:ring-white rounded-md cursor-pointer"
                                x-on:click="$wire.markAsRead('{{ $announcement->id }}')">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18 6L6 18" stroke="#4B5563" stroke-width="1.25" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M6 6L18 18" stroke="#4B5563" stroke-width="1.25" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>
                        @endif
                    </div>
                @endforeach

                @if ($announcements->count() > 0)
                    <p tabindex="0"
                        class="mt-8 focus:outline-none text-sm leading-normal text-gray-900 dark:text-white whitespace-nowrap">
                        Notifikasi Sebelumnya
                    </p>
                @endif
            @endif

            @foreach ($announcements as $announcement)
                <div class="p-3 mt-4 bg-gray-100 dark:bg-gray-600 shadow rounded-md flex flex-shrink-0 justify-between">
                    <a href="{{ $announcement->data['link'] }}" class="w-full space-y-2">
                        <p
                            class="block w-full focus:outline-none text-sm leading-none my-0 text-gray-900 dark:text-white font-bold">
                            {{ $announcement->data['title'] }}
                        </p>
                        <p class="block w-full focus:outline-none text-sm leading-2 text-gray-700 dark:text-gray-300">
                            {{ $announcement->data['body'] }}
                        </p>
                        <p class="focus:outline-none text-xs leading-3 pt-1 text-gray-700 dark:text-gray-300"
                            title="29th Oct 2023 11:41">
                            {{ $announcement->created_at->diffForHumans() }}
                        </p>
                    </a>
                </div>
            @endforeach

            @if ($unread->count() === 0 && $announcements->count() === 0)
                <div class="flex items-center justify-between">
                    <hr class="w-full">
                    <p tabindex="0"
                        class="focus:outline-none text-sm flex flex-shrink-0 leading-normal px-3 py-16 text-gray-500">
                        No new announcements
                    </p>
                    <hr class="w-full">
                </div>
            @endif
        </div>
    </div>
</div>
