@extends('layouts.master')

@section('title', 'Tambah User')

@section('content')
    <div class="card p-4">
        <h4 class="mb-4">Tambah User</h4>

        <form action="{{ route('user.store') }}" method="POST">
            @csrf

            @include('user._form')

            <div class="mt-4">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('user.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
@endsection
