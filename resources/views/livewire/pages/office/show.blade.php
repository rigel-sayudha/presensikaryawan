<div>
    <input type="checkbox" class="modal-toggle" @checked($show)>
    <div class="modal">
        <div class="modal-box max-w-sm">
            @if ($officeMap)
                <div class="space-y-4">
                    <h1 class="text-lg font-bold">{{ $officeMap->name }}</h1>

                    <img src="{{ $officeMap->image }}" alt="" class="w-full rounded-xl">

                    <p>
                        Gedung {{ $officeMap->building }}
                        Lantai {{ $officeMap->floor }}
                        {{ $officeMap->desc }}
                    </p>
                </div>
            @endif
            <div class="modal-action">
                <button class="btn btn-ghost" wire:click="resetOfficeMap">Close</button>
            </div>
        </div>
    </div>
</div>
