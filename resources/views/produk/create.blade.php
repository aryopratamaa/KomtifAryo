@extends('layouts.master')

@section('title', 'Tambah Produk')

@section('content')
    <div class="container">
        <h1>Tambah Produk</h1>
        <form action="{{ route('produk.store') }}" method="POST">
            @csrf
            @include('produk._form')
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
