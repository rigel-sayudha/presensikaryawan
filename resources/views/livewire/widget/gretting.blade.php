<div class="card card-compact bg-base-100 border-2">
    <div class="card-body flex flex-row items-center">
        <div class="avatar">
            <div class="w-10 bg-base-300 rounded-full">
                <img src="{{ $user->avatar }}" alt="">
            </div>
        </div>
        <div class="flex-1">
            <h3 class="font-bold">Selamat datang</h3>
            <div class="text-xs">Hallo {{ $user->name }}</div>
        </div>
        <a href="{{ route('profile') }}" class="btn btn-sm" wire:navigate>
            <x-tabler-logout class="icon-4" />
            <span>Logout</span>
        </a>
    </div>
</div>
