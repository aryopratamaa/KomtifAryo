@extends('layouts.master')
@section('title', 'Detail Bahan Baku')

@section('content')
    <div class="card p-4">
        <h4 class="mb-4">Detail Bahan Baku</h4>

        <div class="mb-3">
            <label for="Nama" class="form-label">Nama Bahan</label>
            <input type="text" id="Nama" class="form-control" value="{{ $bahan->Nama }}" readonly>
        </div>

        <div class="mb-3">
            <label for="Satuan" class="form-label">Satuan</label>
            <input type="text" id="Satuan" class="form-control" value="{{ $bahan->Satuan }}" readonly>
        </div>
        <div class="mt-3">
            <a href="{{ route('bahan.index') }}" class="btn btn-secondary">Kembali</a>
            <a href="{{ route('bahan.edit', $bahan->id) }}" class="btn btn-warning">Edit Bahan Baku</a>
        </div>
    </div>
@endsection
