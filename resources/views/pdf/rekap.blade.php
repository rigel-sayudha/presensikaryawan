<!DOCTYPE html>
<html>
<head>
    <title>Rekap Kehadiran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .header, .footer {
            width: 100%;
            text-align: center;
            position: fixed;
        }
        .header {
            top: 0;
            border-bottom: 1px solid #000;
            padding: 10px 0;
        }
        .header img {
            position: absolute;
            top: 10px;
            right: 10px;
            width: 100px; /* Adjust the width as needed */
        }
        .footer {
            bottom: 0;
            padding: 10px 0;
        }
        .content {
            margin: 100px 50px 50px 50px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>PT. SEKAWAN BENUA SAMUDERA</h2>
        <p>Jl. PU 2 Komplek V & W No.25 RT. 19 Prapatan, Balikpapan Kota, Kalimantan Timur</p>
        <img src="{{ asset('images/logo.jpg') }}"> 
    </div>
    <div class="footer">
        <script type="text/php">
            if (isset($pdf)) {
                $pdf->page_script(function($pageNumber, $pageCount, $pdf) {
                    $pdf->text(270, 770, "Page $pageNumber of $pageCount", null, 10, array(0,0,0));
                });
            }
        </script>
    </div>
    <hr>
    <div class="content">
        <h2>Rekap Kehadiran {{ $user->name }}</h2>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <!-- <th>Masuk - Keluar</th> -->
                    <th>Durasi</th>
                    <th>Status</th>
                    <th>Catatan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user->attendances as $index => $att)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ date('d M Y', strtotime($att->date)) }}</td>
                        <!-- <td>{{ $att->range_time }}</td> -->
                        <td>{{ $att->duration }}</td>
                        <td>{{ $att->status }}</td>
                        <td>{{ $att->note }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
