<div class="">
    <div class="card card-compact bg-base-100 border-2 divide-y-2">
        <div class="card-body flex-row">
            <div class="flex-1">
                <h3 class="text-lg font-bold">
                    {{ $attendance ? $attendance->status_text : 'Presensi masuk' }}
                </h3>
                @if ($attendance)
                    {{ $attendance->duration }}
                @else
                    <span>{{ date('d F Y', strtotime($tanggal)) }}</span>
                @endif
            </div>
            <button class="btn btn-square"
                wire:click="$dispatch('showAttendance', {attendance:{{ $attendance->id ?? null }}})">
                <x-tabler-calendar-check />
            </button>
        </div>

        <div class="card-body">
            <div class="grid grid-cols-2 gap-2">
                @can('absensi.create')
                    <button class="btn flex-1 btn-primary btn-sm" @disabled($attendance ? true : false) wire:click="checkIn">
                        <x-tabler-login class="size-5" />
                        <span>Check In</span>
                    </button>
                @endcan
                <button class="btn flex-1 btn-primary btn-sm" @disabled($attendance && $attendance->out == null ? false : true)
                    wire:click="$set('show', true)">
                    <x-tabler-logout class="size-5" />
                    <span>Check Out</span>
                </button>
            </div>
        </div>

    </div>

    @if ($attendance)
        <input type="checkbox" class="modal-toggle" @checked($show) />
        <div class="modal" role="dialog">
            <form class="modal-box" wire:submit="checkOut({{ $attendance->id }})">
                <h3 class="font-bold text-lg">Catatan presensi</h3>

                <div class="space-y-4 py-4">
                    <label for="" class="form-control">
                        <textarea class="textarea textarea-bordered w-full @error('form.note') textarea-error @enderror" rows="3"
                            wire:model="form.note" placeholder="Tulis catatan presensi anda hari ini"></textarea>

                        <div class="label">
                            <span class="label-text-alt">Harap isi catatan presensi sebelum melakukan checkout.</span>
                        </div>
                    </label>
                </div>
                <div class="modal-action justify-between">
                    <button type="button" wire:click="resetAbsensi" class="btn">Close!</button>
                    <button class="btn btn-primary">
                        <x-tabler-logout class="size-5" />
                        <span>Checkout</span>
                    </button>
                </div>
            </form> 
        </div>
    @endif

</div>
<script>
    document.querySelector('[wire\\:click="checkIn"]').addEventListener('click', function () {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {
                console.log('Latitude:', position.coords.latitude);
                console.log('Longitude:', position.coords.longitude);

                @this.set('latitude', position.coords.latitude);
                @this.set('longitude', position.coords.longitude);

                @this.call('checkIn');
            }, function (error) {
                console.error('Error mendapatkan lokasi:', error);
                alert('Gagal mendapatkan lokasi. Pastikan GPS Anda aktif.');
            });
        } else {
            alert('Geolocation tidak didukung oleh browser Anda.');
        }
    });
</script>


