<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function bahanStokPdf()
    {
        $data = DB::table('stoks')
            ->join('bahans', 'stoks.Bahan_id', '=', 'bahans.id')
            ->select([
                'bahans.Nama',
                'bahans.Satuan',
                'stoks.Stoknow',
            ])
            ->orderBy('bahans.Nama')
            ->get();

        $pdf = Pdf::loadView('stok.report', [
            'data' => $data,
            'printedAt' => now(),
        ])->setPaper('a4', 'portrait');

        return $pdf->stream('laporan-stok-bahan.pdf');
    }
}
