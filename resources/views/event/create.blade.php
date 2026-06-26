@extends('layouts.master')

@section('title', 'Tambah Event')

@section('content')
    <div class="card p-4">
        <h4 class="mb-4">Tambah Event</h4>

        <form action="{{ route('event.store') }}" method="POST">
            @csrf

            @include('event._form')

            <div class="mt-4">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('event.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
@endsection
