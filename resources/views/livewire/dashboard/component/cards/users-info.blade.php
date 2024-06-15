<div class="bg-white rounded-lg mb-4 shadow-md w-full lg:w-max">
    <div class="bg-neutral-300 p-2 rounded-t-lg text-center">
        <span class="text-white text-sm font-medium tracking-wide px-4">
            Admin ({{ $roles->filter(fn ($user) => $user->roles->where('name', 'admin')->toArray())->count() }}) /
            Umum ({{ $roles->filter(fn ($user) => $user->roles->where('name', 'umum')->toArray())->count() }}) /
            User ({{ $roles->filter(fn ($user) => $user->roles->where('name', 'user')->toArray())->count() }})
        </span>
    </div>
    <div class="p-4 flex flex-nowrap place-items-center">
        <div class="bg-emerald-200 text-emerald-700 p-4 rounded-full">
            <x-icons.heroline name="user-circle" class="h-16 w-16" />
        </div>
        <div class="ml-6">
            <div class="text-base tracking-wide text-neutral-400 font-medium">Jumlah Pengguna Aplikasi</div>
            <div class="flex flex-nowrap items-baseline">
                <span class="font-medium text-6xl mb-1 text-emerald-700">{{ $total }}</span>
                <span class="text-sm ml-1 font-medium text-neutral-500">pengguna</span>
            </div>
        </div>
    </div>
</div>
