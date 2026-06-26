@extends('layouts.master')
@section('title', 'Edit Produk')

@section('content')
    <div class="card p-4">
        <h4 class="mb-4">Edit Produk</h4>

        <form action="{{ route('produk.update', $produk->id) }}" method="POST">
            @csrf
            @method('PUT')

            @include('produk._form')

            <div class="mt-4">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('produk.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
@endsection
