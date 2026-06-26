@extends('layouts.master')

@section('title', 'Edit Event')

@section('content')
    <div class="card p-4">
        <h4 class="mb-4">Edit Event</h4>

        <form action="{{ route('event.update', $event->id) }}" method="POST">
            @csrf
            @method('PUT')

            @include('event._form')

            <div class="mt-4">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('event.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
@endsection
