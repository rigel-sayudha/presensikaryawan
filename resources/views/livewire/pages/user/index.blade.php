<div class="space-y-6">
    <div class="flex items-center justify-between">
        <input type="search" class="input input-bordered" placeholder="Pencarian" wire:model.live="cari">
        <button class="btn btn-primary">
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
                @foreach ($datas as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->getRoleNames()->first() }}</td>
                        <td>
                            <div class="flex gap-1 justify-center">
                                <button class="btn btn-xs btn-square input-bordered">
                                    <x-tabler-edit class="icon-4" />
                                </button>
                                <button class="btn btn-xs btn-square input-bordered">
                                    <x-tabler-trash class="icon-4" />
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
