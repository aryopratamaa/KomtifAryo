@extends('layouts.master')

@section('title', 'Detail User')

@section('content')
    <div class="card p-4">
        <h4 class="mb-4">Detail User</h4>

        <table class="table table-bordered">
            <tr>
                <th width="25%">Role</th>
                <td>{{ $user->role->nama ?? '-' }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $user->Email }}</td>
            </tr>
            <tr>
                <th>Dibuat Pada</th>
                <td>{{ $user->created_at?->format('d M Y H:i') }}</td>
            </tr>
            <tr>
                <th>Diubah Pada</th>
                <td>{{ $user->updated_at?->format('d M Y H:i') }}</td>
            </tr>
        </table>

        <div class="mt-3">
            <a href="{{ route('user.index') }}" class="btn btn-secondary">Kembali</a>
            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning">Edit User</a>
        </div>
    </div>
@endsection
