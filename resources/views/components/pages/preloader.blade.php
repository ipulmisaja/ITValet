<div
    x-show="loaded"
    x-init="document.addEventListener('livewire:initialized', () => { setTimeout(() => loaded = false, 500) })"
    class="fixed left-0 top-0 z-999999 flex h-screen w-screen place-items-center justify-center bg-black opacity-60">
    <div class="border-primary h-16 w-16 animate-spin rounded-full border-4 border-solid border-t-transparent"></div>
</div>
