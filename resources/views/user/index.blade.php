@extends('layouts.master')

@section('title', 'Daftar User')

@section('content')
    <div class="card p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="mb-0">Daftar User</h4>
            <a href="{{ route('user.create') }}" class="btn btn-primary"><i class="ti ti-plus"></i> Tambah User</a>
        </div>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="table-responsive">
            <table class="table table-bordered align-middle text-nowrap">
                <thead class="table-light">
                    <tr>
                        <th width="5%">#</th>
                        <th>Role</th>
                        <th>Email</th>
                        <th width="25%" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $index => $user)
                        <tr>
                            <td>{{ $users->firstItem() + $index }}</td>
                            <td>{{ $user->role->nama ?? '-' }}</td>
                            <td>{{ $user->Email }}</td>
                            <td class="text-center">
                                <form action="{{ route('user.destroy', $user->id) }}" method="POST" class="d-inline"
                                    onsubmit="return confirm('Yakin hapus user ini?')">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ route('user.show', $user->id) }}" class="btn btn-info btn-sm">Detail</a>

                                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning btn-sm">Edit</a>

                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center text-muted">Belum ada data user.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-3">
            {{ $users->links() }}
        </div>
    </div>
@endsection
