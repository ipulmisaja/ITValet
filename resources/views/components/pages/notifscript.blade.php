@push('scripts')
    @if (session()->has('messages'))
        <script>
            window.onload = function() {
                window.dispatchEvent(new CustomEvent('notification', {
                    detail: '{{ session('messages') }}'
                }));
            }
        </script>

        {{ session()->forget('messages') }}
    @endif
@endpush
