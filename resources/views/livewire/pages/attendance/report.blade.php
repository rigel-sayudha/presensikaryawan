<div class="p-6 bg-white rounded-lg shadow-md">
    <h2 class="text-2xl font-bold mb-4">Laporan Kehadiran Bulanan</h2>

    <div class="flex space-x-4 mb-4">
        <select wire:model="selectedMonth" class="select select-bordered">
            <option value="">Pilih Bulan</option>
            @foreach (range(1, 12) as $month)
                <option value="{{ $month }}">{{ DateTime::createFromFormat('!m', $month)->format('F') }}</option>
            @endforeach
        </select>

        <select wire:model="selectedYear" class="select select-bordered">
            <option value="">Pilih Tahun</option>
            @foreach (range(date('Y') - 5, date('Y')) as $year) 
                <option value="{{ $year }}">{{ $year }}</option>
            @endforeach
        </select>

        <button wire:click="generateReport" class="btn btn-primary">Tampilkan Laporan</button>
    </div>

    @if($attendances->isNotEmpty())
        <ul class="mb-4 space-y-2">
            <li class="flex justify-between">
                <span class="font-semibold">Total Jam Kehadiran:</span>
                <span>{{ $totalHours }} jam</span>
            </li>
            <li class="flex justify-between">
                <span class="font-semibold">Total Keterlambatan:</span>
                <span>{{ $totalLate }} menit</span>
            </li>
            <li class="flex justify-between">
                <span class="font-semibold">Total Jam Lembur:</span>
                <span>{{ $totalOvertime }} jam</span>
            </li>
            <li class="flex justify-between">
                <span class="font-semibold">Total Potongan Keterlambatan:</span>
                <span>Rp {{ number_format($totalLatePenalty, 0, ',', '.') }}</span>
            </li>
            <li class="flex justify-between">
                <span class="font-semibold">Total Bonus Lembur:</span>
                <span>Rp {{ number_format($totalOvertimeBonus, 0, ',', '.') }}</span>
            </li>
        </ul>

        <table class="min-w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border border-gray-300 px-4 py-2">Tanggal</th>
                    <th class="border border-gray-300 px-4 py-2">Jam Masuk</th>
                    <th class="border border-gray-300 px-4 py-2">Jam Keluar</th>
                    <th class="border border-gray-300 px-4 py-2">Durasi</th>
                    <th class="border border-gray-300 px-4 py-2">Keterlambatan</th>
                    <th class="border border-gray-300 px-4 py-2">Lembur</th>
                    <th class="border border-gray-300 px-4 py-2">Bonus Lembur</th>
                </tr>
            </thead>
            <tbody>
                @foreach($attendances as $attendance)
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">{{ $attendance->date->format('d M Y') }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $attendance->in ? $attendance->in->format('H:i') : '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $attendance->out ? $attendance->out->format('H:i') : '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $attendance->duration }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $attendance->calculateLate() }} menit</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $attendance->calculateOvertime() }} jam</td>
                        <td class="border border-gray-300 px-4 py-2">Rp {{ number_format($attendance->calculateOvertimeBonus(), 0, ',', '.') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p class="mt-4">Belum ada data untuk bulan dan tahun yang dipilih.</p>
    @endif
</div>
