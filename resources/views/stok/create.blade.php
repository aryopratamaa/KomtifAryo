@extends('layouts.master')

@section('title', 'Tambah Stok')

@section('content')
    <div class="card p-4">
        <h4 class="mb-4">Tambah Stok</h4>

        <form action="{{ route('stok.store') }}" method="POST">
            @csrf

            @include('stok._form')

            <div class="mt-4">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('stok.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
@endsection