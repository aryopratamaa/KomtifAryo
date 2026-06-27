<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Laporan Stok Bahan Baku</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 12px;
            color: #111827;
        }

        h2 {
            margin: 0 0 8px 0;
            text-align: center;
        }

        .meta {
            margin-bottom: 12px;
            text-align: right;
            font-size: 11px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #374151;
            padding: 6px 8px;
        }

        th {
            background: #f3f4f6;
            text-align: center;
        }

        td:nth-child(1),
        td:nth-child(3) {
            text-align: center;
            width: 10%;
        }
    </style>
</head>

<body>
    <h2>Laporan Stok Bahan Baku</h2>
    <div class="meta">Dicetak: {{ $printedAt->format('d-m-Y H:i') }}</div>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Stok Sekarang</th>
                <th>Satuan</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $index => $row)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $row->Nama }}</td>
                    <td>{{ $row->Stoknow }}</td>
                    <td>{{ $row->Satuan }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" style="text-align: center;">Data bahan baku belum tersedia.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>

</html>
