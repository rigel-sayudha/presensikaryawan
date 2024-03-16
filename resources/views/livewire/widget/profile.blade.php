<a href="{{ route('profile') }}" class="card card-compact bg-base-100 border-2" wire:navigate>
    <div class="card-body">
        <div class="flex flex-row items-center gap-3">
            <div>
                <div class="avatar">
                    <div class="w-10 bg-base-300 rounded-full">
                        <img src="{{ $user->avatar }}" alt="">
                    </div>
                </div>
            </div>
            <div class="flex flex-col flex-1">
                <div class="font-bold text-md">{{ $user->name }}</div>
                <div class="line-clamp-1">{{ $user->email }}</div>
            </div>
        </div>
    </div>
</a>
