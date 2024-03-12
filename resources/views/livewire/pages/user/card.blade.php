<div class="card card-compact bg-base-100 border-2 border-base-300">
    <div class="card-body">
        <div class="flex gap-3">
            <div>
                <div class="avatar">
                    <div class="w-12 rounded-full">
                        <img src="{{ $user->avatar }}" alt="">
                    </div>
                </div>
            </div>
            <div class="flex flex-col">
                <div class="font-semibold text-lg">{{ $user->name }}</div>
                <div class="text-xs opacity-75">{{ $user->school }}</div>
                <div class="text-xs opacity-75">{{ $user->nis }}</div>
            </div>
        </div>
    </div>
</div>
