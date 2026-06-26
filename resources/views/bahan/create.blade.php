@extends('layouts.master')
@section('title', 'Tambah Bahan Baku')

@section('content')
<div class="card p-4">
    <h4 class="mb-4">Tambah Bahan Baku</h4>
    
    <form action="{{ route('bahan.store') }}" method="POST">
        @csrf
        
        @include('bahan._form')
        
        <div class="mt-4">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('bahan.index') }}" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>
@endsection