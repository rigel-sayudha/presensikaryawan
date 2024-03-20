<div class="card card-compact bg-base-100 border-2" wire:poll.1s>
    <div class="card-body flex flex-col items-center justify-center h-full">
        <div class="text-center text-4xl font-bold">
            <span>{{ now()->format('H:i:s') }}</span>
            <div class="text-xs">{{ now()->format('d F Y') }}</div>
        </div>
    </div>
</div>
