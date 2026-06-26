@extends('layouts.master')
@section('title', 'Detail Kategori')

@section('content')
<div class="card p-4">
    <h4 class="mb-4">Detail Kategori</h4>
    
    <table class="table table-bordered">
        <tr>
            <th width="20%">Nama Kategori</th>
            <td>{{ $kategori->Nama }}</td>
        </tr>
        <tr>
            <th>Deskripsi</th>
            <td>{{ $kategori->Deskripsi ?? '-' }}</td>
        </tr>
        <tr>
            <th>Dibuat Pada</th>
            <td>{{ $kategori->created_at->format('d M Y H:i') }}</td>
        </tr>
    </table>

    <div class="mt-3">
        <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Kembali</a>
        <a href="{{ route('kategori.edit', $kategori->id) }}" class="btn btn-warning">Edit Kategori</a>
    </div>
</div>
@endsection