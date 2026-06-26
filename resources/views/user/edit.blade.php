@extends('layouts.master')

@section('title', 'Edit User')

@section('content')
    <div class="card p-4">
        <h4 class="mb-4">Edit User</h4>

        <form action="{{ route('user.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            @include('user._form')

            <div class="mt-4">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('user.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
@endsection
