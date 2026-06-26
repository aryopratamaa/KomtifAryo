@extends('layouts.master')
@section('title', 'Edit Kategori')

@section('content')
<div class="card p-4">
    <h4 class="mb-4">Edit Kategori</h4>
    
    <form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        @include('kategori._form')
        
        <div class="mt-4">
            <button type="submit" class="btn btn-warning">Update</button>
            <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>
@endsection