<div class="space-y-6">
    <div class="flex justify-between">
        <input type="text" class="input input-bordered" placeholder="Pencarian">
        <input type="month" class="input input-bordered">
    </div>
    <div class="table-wrapper">
        <table class="table">
            <thead>
                <th>No</th>
                <th>Nama siswa</th>
                <th>Tanggal</th>
                <th>Masuk</th>
                <th>Keluar</th>
                <th class="text-center">Action</th>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->user->name }}</td>
                        <td>{{ date('d F Y', strtotime($data->date)) }}</td>
                        <td class="font-mono">{{ date('H:i', strtotime($data->in)) }}</td>
                        <td class="font-mono">{{ date('H:i', strtotime($data->out)) }}</td>
                        <td>
                            <div class="flex gap-1 justify-center">
                                <button class="btn btn-xs btn-square input-bordered">
                                    <x-tabler-message class="icon-4" />
                                </button>
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
