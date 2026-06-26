<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function bahanStokPdf()
    {
        $data = DB::table('bahans')
            ->leftJoin('stoks', 'bahans.id', '=', 'stoks.Bahan_id')
            ->select([
                'bahans.Nama',
                'bahans.Satuan',
                DB::raw('COALESCE(stoks.Stoknow, 0) as Stoknow'),
            ])
            ->orderBy('bahans.Nama')
            ->get();

        $pdf = Pdf::loadView('bahan.report', [
            'data' => $data,
            'printedAt' => now(),
        ])->setPaper('a4', 'portrait');

        return $pdf->stream('laporan-stok-bahan.pdf');
    }
}
