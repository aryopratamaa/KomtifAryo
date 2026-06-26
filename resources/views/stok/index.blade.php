@extends('layouts.master')

@section('title', 'Daftar Stok')

@section('content')
    <div class="card p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="mb-0">Daftar Stok</h4>
            <a href="{{ route('stok.create') }}" class="btn btn-primary"><i class="ti ti-plus"></i> Tambah Stok</a>
        </div>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="table-responsive">
            <table class="table table-bordered align-middle text-nowrap">
                <thead class="table-light">
                    <tr>
                        <th width="5%">#</th>
                        <th>Bahan</th>
                        <th>Satuan</th>
                        <th>Stok Sekarang</th>
                        <th>Stok Minimum</th>
                        <th width="25%" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($stoks as $index => $item)
                        <tr>
                            <td>{{ $stoks->firstItem() + $index }}</td>
                            <td>{{ $item->bahan->Nama ?? '-' }}</td>
                            <td>{{ $item->bahan->Satuan ?? '-' }}</td>
                            <td>{{ $item->Stoknow }}</td>
                            <td>{{ $item->Stokmin }}</td>
                            <td class="text-center">
                                <form action="{{ route('stok.destroy', $item->id) }}" method="POST" class="d-inline"
                                    onsubmit="return confirm('Yakin hapus stok ini?')">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ route('stok.show', $item->id) }}" class="btn btn-info btn-sm">Detail</a>

                                    <a href="{{ route('stok.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>

                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center text-muted">Belum ada data stok.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-3">
            {{ $stoks->links() }}
        </div>
    </div>
@endsection