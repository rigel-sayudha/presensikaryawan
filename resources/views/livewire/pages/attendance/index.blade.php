<div class="space-y-6">
    <div class="flex justify-between">
        <input type="text" class="input input-bordered" placeholder="Pencarian">
        <input type="month" class="input input-bordered">
        <input type="date" class="input input-bordered">
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
                <th class="text-center">Action</th>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $data->user->name }}</td>
                        <td class="font-mono">{{ date('d M Y', strtotime($data->date)) }}</td>
                        <td class="font-mono">{{ date('H:i', strtotime($data->in)) }}</td>
                        <td class="font-mono">{{ date('H:i', strtotime($data->out)) }}</td>
                        <td>
                            <input type="checkbox" class="toggle toggle-primary toggle-xs" @checked($data->approved)
                                wire:change="approveAttendance({{ $data->id }})">
                        </td>
                        <td>
                            <div class="flex gap-1 justify-center">
                                <button class="btn btn-xs btn-square input-bordered"
                                    wire:click="$dispatch('showAttendance', {attendance : {{ $data->id }}})">
                                    <x-tabler-message class="icon-4" />
                                </button>
                                <button class="btn btn-xs btn-square input-bordered">
                                    <x-tabler-edit class="icon-4" />
                                </button>
                                <button class="btn btn-xs btn-square input-bordered"
                                    wire:click="$dispatch('deleteAttendance', {attendance : {{ $data->id }}})">
                                    <x-tabler-trash class="icon-4" />
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @livewire('pages.attendance.show')
    @livewire('pages.attendance.actions')
</div>
