<div class="space-y-6">
    <div class="flex items-center justify-between">
        <input type="search" class="input input-bordered" placeholder="Pencarian" wire:model.live="cari">
        <button class="btn btn-primary" wire:click="$dispatch('createUser')">
            <x-tabler-circle-plus class="icon-5" />
            <span>Tambah user</span>
        </button>
    </div>

    <div class="table-wrapper">
        <table class="table">
            <thead>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th class="text-center">Actions</th>
            </thead>
            <tbody>
                @forelse ($datas as $data)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>
                            <div class="flex gap-2 items-center">
                                <div class="avatar">
                                    <div class="w-5 rounded-full">
                                        <img src="{{ $data->avatar }}" alt="">
                                    </div>
                                </div>
                                <span>{{ $data->name }}</span>
                            </div>
                        </td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->getRoleNames()->first() }}</td>
                        <td>
                            <div class="flex gap-1 justify-center">
                                <a href="{{ route('user.show', $data) }}" class="btn btn-xs btn-square input-bordered"
                                    wire:navigate>
                                    <x-tabler-folder class="icon-4" />
                                </a>
                                <button class="btn btn-xs btn-square input-bordered"
                                    wire:click="$dispatch('updateUser', {user:{{ $data->id }}})">
                                    <x-tabler-edit class="icon-4" />
                                </button>
                                <button class="btn btn-xs btn-square input-bordered"
                                    wire:click="$dispatch('deleteUser', {user:{{ $data->id }}})">
                                    <x-tabler-trash class="icon-4" />
                                </button>
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
