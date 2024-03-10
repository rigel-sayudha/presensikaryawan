<div>
    <div>
        <h1>Riwayat Absensi</h1>
        <div class="flex justify-end mb-3">
   
            <input type="date" class="form-control" wire:model="searchDate" placeholder="Cari">
        </div>
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
                        <td>{{ $data->date }}</td>
                        <td>{{ $data->in }}</td>
                        <td>{{ $data->out }}</td>
                        <td>{{ $data->note }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
