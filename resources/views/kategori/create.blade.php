@extends('layouts.master')
@section('title', 'Tambah Kategori')

@section('content')
<div class="card p-4">
    <h4 class="mb-4">Tambah Kategori</h4>
    
    <form action="{{ route('kategori.store') }}" method="POST">
        @csrf
        
        @include('kategori._form')
        
        <div class="mt-4">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>
@endsection