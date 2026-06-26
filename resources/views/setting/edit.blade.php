@extends('layouts.master')
@section('title', 'Edit Role')

@section('content')
    <div class="card p-4">
        <h4 class="mb-4">Edit Role</h4>

        <form action="{{ route('setting.update', $role->id) }}" method="POST">
            @csrf
            @method('PUT')

            @include('setting._form')

            <div class="mt-4">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('setting.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
@endsection
