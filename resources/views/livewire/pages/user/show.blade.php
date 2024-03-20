<div class="space-y-6">
    <div class="card card-compact bg-base-100 border-2">
        <div class="card-body space-y-4 border-b">
            <div class="flex flex-col md:flex-row gap-6">
                <div class="flex items-center justify-center md:aspect-square">
                    <div class="avatar">
                        <div class="w-28 rounded-lg">
                            <img src="{{ $user->avatar }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="grid md:grid-cols-2 xl:grid-cols-3 flex-1">
                    @foreach (['name', 'email', 'school', 'phone', 'nis'] as $key)
                        <div class="flex flex-col p-2 hover:bg-base-200">
                            <span class="text-xs capitalize opacity-50">{{ $key }}</span>
                            <div>{{ $user->$key }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="card-actions justify-end">
                <button class="btn btn-sm" wire:click="$dispatch('updateUser', {user:{{ $user->id }}})">
                    <x-tabler-edit class="icon-5" />
                    <span>Edit user</span>
                </button>
                <button class="btn btn-sm" wire:click="$dispatch('resetPassword', {user:{{ $user->id }}})">
                    <x-tabler-key class="icon-5" />
                    <span>Reset password</span>
                </button>
            </div>
        </div>
    </div>

    <div class="flex justify-between items-center">
        <div class="font-semibold">Riwayat absensi</div>
        <button class="btn btn-primary btn-sm">
            <x-tabler-download class="icon-4" />
            <span>Download rekap</span>
        </button>
    </div>

    <div class="table-wrapper">
        <table class="table">
            <thead>
                <th>No</th>
                <th>Tanggal</th>
                <th>Masuk - Keluar</th>
                <th>Durasi</th>
                <th>Catatan</th>
            </thead>
            <tbody>
                @forelse ($user->attendances as $att)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ date('d M Y', strtotime($att->date)) }}</td>
                        <td>{{ $att->range_time }}</td>
                        <td>{{ $att->duration }}</td>
                        <td class="whitespace-normal">
                            <div class="line-clamp-1">
                                {{ $att->note }}
                            </div>
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

    @livewire('pages.user.actions')
</div>
