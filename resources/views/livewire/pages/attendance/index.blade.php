<div class="space-y-6">
    @if ($withActions)
        <div class="flex flex-col lg:flex-row justify-between gap-2">
            <input type="search" class="input input-bordered" wire:model.live="search" placeholder="Pencarian" />
            <input type="date" class="input input-bordered" wire:model.live="date" />
        </div>
    @endif
    <div class="table-wrapper">
        <table class="table">
            <thead>
                <th>No</th>
                <th>Nama siswa</th>
                <th>Tanggal</th>
                <th>Masuk</th>
                <th>Keluar</th>
                @can('attendance.approve')
                    <th class="text-center">Approved</th>
                @endcan
                @if ($withActions)
                    <th class="text-center">Action</th>
                @endif
            </thead>
            <tbody>
                @forelse ($datas as $data)
                    <tr wire:key="{{ $data->id }}">
                        <td>{{ $no++ }}</td>
                        <td>
                            <a href="{{ route('user.show', $data->user_id) }}">
                                {{ $data->user->name }}
                            </a>
                        </td>
                        <td>{{ date('d M Y', strtotime($data->date)) }}</td>
                        <td>{{ date('H:i', strtotime($data->in)) }}</td>
                        <td>
                            @if ($data->out)
                                {{ date('H:i', strtotime($data->out)) }}
                            @else
                                <x-tabler-clock class="icon-4 text-warning" />
                            @endif
                        </td>
                        @can('attendance.approve')
                            <td>
                                <div class="flex items-center justify-center">
                                    <input type="checkbox" class="toggle toggle-primary toggle-sm"
                                        @checked($data->approved)
                                        wire:change="$dispatch('approveAttendance', {attendance : {{ $data->id }}})">
                                </div>
                            </td>
                        @endcan
                        @if ($withActions)
                            <td>
                                <div class="flex gap-1 justify-center">
                                    <button class="btn btn-xs btn-square input-bordered"
                                        wire:click="$dispatch('showAttendance', {attendance : {{ $data->id }}})">
                                        <x-tabler-message class="icon-4" />
                                    </button>
                                    @can('attendance.edit')
                                        <button class="btn btn-xs btn-square input-bordered"
                                            wire:click="$dispatch('editAttendance', {attendance : {{ $data->id }}})">
                                            <x-tabler-edit class="icon-4" />
                                        </button>
                                    @endcan
                                    @can('attendance.delete')
                                        <button class="btn btn-xs btn-square input-bordered"
                                            wire:click="$dispatch('deleteAttendance', {attendance : {{ $data->id }}})">
                                            <x-tabler-trash class="icon-4" />
                                        </button>
                                    @endcan
                                </div>
                            </td>
                        @endif
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
