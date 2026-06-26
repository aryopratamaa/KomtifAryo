@extends('layouts.master')
@section('title', 'Tambah Role')

@section('content')
    <div class="card p-4">
        <h4 class="mb-4">Tambah Role</h4>

        <form action="{{ route('setting.store') }}" method="POST">
            @csrf

            @include('setting._form')

            <div class="mt-4">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('setting.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
@endsection
