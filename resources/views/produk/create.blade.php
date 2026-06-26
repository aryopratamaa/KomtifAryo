@extends('layouts.master')

@section('title', 'Tambah Produk')

@section('content')
<dialog class="card p-4">
    <h4 class="mb-4">Tambah Produk</h4>
    
    <form action="{{ route('produk.store') }}" method="POST">
        @csrf
        
        @include('produk._form')
        
        <div class="mt-4">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('produk.index') }}" class="btn btn-secondary">Batal</a>
        </div>
    </form>
@endsection
