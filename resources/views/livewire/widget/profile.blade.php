<a href="{{ route('profile') }}" class="card card-compact bg-base-100 border-2" wire:navigate>
    <div class="card-body flex flex-col items-center justify-center h-full">
        <div class="avatar">
            <div class="w-12 bg-base-300 rounded-full">
                <img src="{{ $user->avatar }}" alt="">
            </div>
        </div>
        <div class="flex flex-col text-center">
            <div class="font-bold text-md">{{ $user->name }}</div>
            <div class="line-clamp-1">{{ $user->email }}</div>
        </div>
    </div>
</a>
