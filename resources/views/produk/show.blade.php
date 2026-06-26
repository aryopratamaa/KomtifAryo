@extends('layouts.master')
@section('title', 'Detail Produk')

@section('content')
<div class="card p-4">
    <h4 class="mb-4">Detail Produk</h4>
    
    <table class="table table-bordered">
        <tr>
            <th width="20%">Nama Produk</th>
            <td>{{ $produk->Nama }}</td>
        </tr>
        <tr>
            <th>Kategori</th>
            <td>{{ $produk->kategori->Nama ?? '-' }}</td>
        </tr>
        <tr>
            <th>Harga Modal</th>
            <td>{{ number_format($produk->Harga_modal, 0, ',', '.') }}</td>
        </tr>
        <tr>
            <th>Harga Jual</th>
            <td>{{ number_format($produk->Harga_jual, 0, ',', '.') }}</td>
        </tr>
        <tr>
            <th>Dibuat Pada</th>
            <td>{{ $produk->created_at->format('d M Y H:i') }}</td>
        </tr>
    </table>

    <div class="mt-3">
        <a href="{{ route('produk.index') }}" class="btn btn-secondary">Kembali</a>
        <a href="{{ route('produk.edit', $produk->id) }}" class="btn btn-warning">Edit Produk</a>
    </div>
</div>
@endsection