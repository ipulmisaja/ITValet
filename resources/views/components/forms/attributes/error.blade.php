<div
    x-data="{ shown: false, timeout: null }"
    x-init="@this.on('validate', () => {clearTimeout(timeout);shown = true;timeout = setTimeout(() => { shown = false }, 5000);})"
    x-show.transition.opacity.out.duration.2000ms="shown">
    @error($model)
        <div class="mt-2">
            <span class="flex place-items-center text-sm text-red-600">
                <x-icons.herosolid name="information-circle" class="w-5 h-5" />
                <span class="ml-2">{{ $message }}</span>
            </span>
        </div>
    @enderror
</div>
