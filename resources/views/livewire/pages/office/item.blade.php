<div class="card bg-base-100 border border-gray-300 cursor-pointer"
    wire:click="$dispatch('showOfficeMap', {officeMap : {{ $officeMap->id }}})">
    <div class="card-body flex flex-row gap-3">
        <div>
            <div class="avatar">
                <div class="w-12 rounded-full">
                    <img src="{{ $officeMap->image }}" alt="{{ $officeMap->name }}" />
                </div>
            </div>
        </div>
        <div class="flex flex-col">
            <h2 class="text-lg font-semibold">{{ $officeMap->name }}</h2>
            <div class="text-sm line-clamp-2">Gedung {{ $officeMap->building }}, Lantai {{ $officeMap->floor }}.
                {{ $officeMap->desc }}</div>
        </div>
    </div>
</div>
