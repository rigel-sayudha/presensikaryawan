<div>
    <div>
        <div class="flex justify-end mb-3">  
            <input type="date" class="input input-bordered" wire:model.live="date" />
        </div>
        <div class="table-wrapper">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Absen Masuk</th>
                    <th>Absen Keluar</th>                  
                    <th>Catatan</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mine as $index => $data)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $data->date->format('d F Y') }}</td>
                        <td>{{ $data->in->format('H:i') }}</td>
                        <td>{{ $data->out ? $data->out->format('H:i') : '-' }}</td>
                        <td>{{ $data->note }}</td>
                        <td>
                            @if ($data->approved == 1)
                                Disetujui
                            @else
                                -
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>

