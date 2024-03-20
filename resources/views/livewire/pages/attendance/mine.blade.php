<div class="space-y-6">
    <div class="flex justify-between">
        <input type="date" class="input input-bordered" wire:model.live="date" />
    </div>
    <div class="table-wrapper">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Masuk - keluar</th>
                    <th>Durasi</th>
                    <th>Catatan</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mine as $index => $data)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $data->date->format('d F Y') }}</td>
                        <td>{{ $data->range_time }}</td>
                        <td>{{ $data->duration }}</td>
                        <td>
                            <div class="hidden lg:flex whitespace-normal">{{ $data->note }}</div>
                            <div class="flex items-center justify-center lg:hidden">
                                <button class="btn btn-xs btn-square input-bordered"
                                    wire:click="$dispatch('showAttendance', {attendance: {{ $data->id }}})">
                                    <x-tabler-message class="icon-4" />
                                </button>
                            </div>
                        </td>
                        <td class="text-center">{{ $data->approved ? 'Disetujui' : '-' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @livewire('pages.attendance.show')
</div>
