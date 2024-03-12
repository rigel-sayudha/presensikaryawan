<div role="alert" class="alert bg-base-100 shadow">
    <div class="avatar">
        <div class="w-10 bg-base-300 rounded-full">
            <img src="{{ $user->avatar }}" alt="">
        </div>
    </div>
    <div>
        <h3 class="font-bold">Selamat datang</h3>
        <div class="text-xs">Hallo {{ $user->name }}</div>
    </div>
    <a href="{{ route('profile') }}" class="btn btn-sm" wire:navigate>
        <x-tabler-logout class="icon-4" />
        <span>Logout</span>
    </a>
</div>
