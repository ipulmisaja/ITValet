<div class="space-y-6">
    @if ($comments->count() > 0)
        @foreach ($comments as $index => $item)
            <div class="flex place-items-end {{ $item->user->name === auth()->user()->name ? '' : 'justify-end' }}">
                <div class="rounded-md bg-gray-100 dark:bg-gray-700 p-6 w-full lg:w-3/5">
                    {{-- header --}}
                    <div class="flex place-items-center justify-between">
                        {{-- Avatar --}}
                        <div class="flex place-items-center justify-start space-x-3">
                            <span class="h-8 w-8 rounded-full">
                                <x-images.avatar />
                            </span>
                            <div class="text-left">
                                <span class="text-sm font-bold text-gray-900 dark:text-white">
                                    {{ $item->user->name }}
                                </span>
                            </div>
                        </div>
                        {{-- Time --}}
                        <div class="text-xs text-gray-700 dark:text-gray-400">
                            {{ $item->created_at->format('d M Y - H:i:s') }}
                        </div>
                    </div>
                    <div class="text-md mt-3 ml-11 text-gray-700 dark:text-gray-300 break-all">{!! $item->comment !!}</div>
                </div>
            </div>
        @endforeach
    @else
        <p class="text-gray-400">Maaf, permintaan anda belum ada jawaban.</p>
    @endif
</div>
