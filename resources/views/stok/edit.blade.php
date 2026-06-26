@extends('layouts.master')

@section('title', 'Edit Stok')

@section('content')
    <div class="card p-4">
        <h4 class="mb-4">Edit Stok</h4>

        <form action="{{ route('stok.update', $stok->id) }}" method="POST">
            @csrf
            @method('PUT')

            @include('stok._form')

            <div class="mt-4">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('stok.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
@endsection