<div class="space-y-6">
    <div class="flex justify-between items-center">
        <input type="search" class="input input-bordered" wire:model="search" placeholder="Pencarian">
        <button class="btn btn-primary">
            <x-tabler-circle-plus class="icon-5" />
            <span>Tambah map</span>
        </button>
    </div>

    <div class="table-wrapper">
        <table class="table">
            <thead>
                <th>No</th>
                <th>Nama ruangan / divisi</th>
                <th>Gedung</th>
                <th>Lantai</th>
                <th>Deskripsi</th>
                <th class="text-center">Actions</th>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->building }}</td>
                        <td>{{ $data->floor }}</td>
                        <td>{{ Str::words($data->desc, 5) }}</td>
                        <td>
                            <div class="flex gap-1 justify-center">
                                <button class="btn btn-square input-bordered btn-xs">
                                    <x-tabler-edit class="icon-4" />
                                </button>
                                <button class="btn btn-square input-bordered btn-xs">
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
