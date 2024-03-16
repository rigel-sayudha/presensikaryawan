<div class="space-y-6">
    @livewire('widget.gretting')

    <div class="grid grid-cols-3 gap-6">
        @livewire('widget.check-attendance')
        @livewire('widget.count-attendance')
    </div>

    <div class="table-wrapper">
        <table class="table">
            <thead>
                <th>No</th>
                <th>Nama siswa</th>
                <th>Tanggal</th>
                <th>Masuk</th>
                <th>Keluar</th>
                <th>Approved</th>
            </thead>
            <tbody>
                @forelse ($datas as $data)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>
                            <a href="{{ route('user.show', $data->user_id) }}">
                                {{ $data->user->name }}
                            </a>
                        </td>
                        <td class="font-mono">{{ date('d M Y', strtotime($data->date)) }}</td>
                        <td class="font-mono">{{ date('H:i', strtotime($data->in)) }}</td>
                        <td class="font-mono">
                            @if ($data->out)
                                {{ date('H:i', strtotime($data->out)) }}
                            @endif
                        </td>
                        <td>
                            <input type="checkbox" class="toggle toggle-primary toggle-sm" @checked($data->approved)
                                wire:change="$dispatch('approveAttendance', {attendance : {{ $data->id }}})">
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="100%">
                            @livewire('partial.nocontent')
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @livewire('pages.attendance.show')
    @livewire('pages.attendance.actions')
</div>
