@extends('layouts.master')
@section('title', 'Setting Role')

@section('content')
    <div class="card p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="mb-0">Setting Role</h4>
            <a href="{{ route('setting.create') }}" class="btn btn-primary"><i class="ti ti-plus"></i> Tambah Role</a>
        </div>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="table-responsive">
            <table class="table table-bordered align-middle text-nowrap">
                <thead class="table-light">
                    <tr>
                        <th width="5%">#</th>
                        <th>Nama Role</th>
                        <th width="25%" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($roles as $index => $role)
                        <tr>
                            <td>{{ $roles->firstItem() + $index }}</td>
                            <td>{{ $role->nama }}</td>
                            <td class="text-center">
                                <form action="{{ route('setting.destroy', $role->id) }}" method="POST" class="d-inline"
                                    onsubmit="return confirm('Apakah Anda yakin ingin menghapus role ini?')">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ route('setting.show', $role->id) }}" class="btn btn-info btn-sm">Detail</a>
                                    <a href="{{ route('setting.edit', $role->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center text-muted">Belum ada data role.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-3">
            {{ $roles->links() }}
        </div>
    </div>
@endsection
