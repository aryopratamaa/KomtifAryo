@extends('layouts.master')

@section('title', 'Detail Stok')

@section('content')
    <div class="card p-4">
        <h4 class="mb-4">Detail Stok</h4>

        <table class="table table-bordered">
            <tr>
                <th width="25%">Bahan</th>
                <td>{{ $stok->bahan->Nama ?? '-' }}</td>
            </tr>
            <tr>
                <th>Satuan</th>
                <td>{{ $stok->bahan->Satuan ?? '-' }}</td>
            </tr>
            <tr>
                <th>Stok Sekarang</th>
                <td>{{ $stok->Stoknow }}</td>
            </tr>
            <tr>
                <th>Stok Minimum</th>
                <td>{{ $stok->Stokmin }}</td>
            </tr>
            <tr>
                <th>Dibuat Pada</th>
                <td>{{ $stok->created_at?->format('d M Y H:i') }}</td>
            </tr>
            <tr>
                <th>Diubah Pada</th>
                <td>{{ $stok->updated_at?->format('d M Y H:i') }}</td>
            </tr>
        </table>

        <div class="mt-3">
            <a href="{{ route('stok.index') }}" class="btn btn-secondary">Kembali</a>
            <a href="{{ route('stok.edit', $stok->id) }}" class="btn btn-warning">Edit Stok</a>
        </div>
    </div>
@endsection