<div>
    <input type="checkbox" class="modal-toggle" @checked($attendance ? true : false) />
    <div class="modal" role="dialog">
        <div class="modal-box">
            <h3 class="font-bold text-lg">Detail Attendance</h3>
            @if ($attendance)
                <div class="py-4 space-y-4">
                    @livewire('pages.user.card', ['user' => $attendance->user])
                    <div class="grid grid-cols-3 flex-1">
                        <div class="flex flex-col p-2">
                            <span class="text-xs capitalize opacity-50">Tanggal</span>
                            <div>{{ date('d M Y', strtotime($attendance->date)) }}</div>
                        </div>
                        <div class="flex flex-col p-2">
                            <span class="text-xs capitalize opacity-50">Masuk</span>
                            <div>{{ date('H:i', strtotime($attendance->in)) }}</div>
                        </div>
                        <div class="flex flex-col p-2">
                            <span class="text-xs capitalize opacity-50">Keluar</span>
                            <div>{{ date('H:i', strtotime($attendance->out)) ?? '-' }}</div>
                        </div>
                        <div class="flex flex-col p-2 col-span-full">
                            <span class="text-xs capitalize opacity-50">Catatan</span>
                            <div>{{ $attendance->note ?? '-' }}</div>
                        </div>
                    </div>
                </div>
            @endif
            <div class="modal-action">
                <button wire:click="resetShow" class="btn">Close!</button>
            </div>
        </div>
    </div>
</div>
