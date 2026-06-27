@extends('layouts.master')

@section('title', 'Data Produk')

@section('content')
    <div class="card p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="mb-0">Data Produk</h4>
            <a href="{{ route('produk.create') }}" class="btn btn-primary"><i class="ti ti-plus"></i> Tambah Produk</a>
        </div>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="table-responsive">
            <table class="table table-bordered align-middle text-nowrap">
                <thead class="table-light">
                    <tr>
                        <th width="5%">No</th>
                        <th>Nama Produk</th>
                        <th>Kategori</th>
                        <th>Harga Modal</th>
                        <th>Harga Jual</th>
                        <th width="25%" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($produk as $index => $item)
                        <tr>
                            <td>{{ $produk->firstItem() + $index }}</td>
                            <td>{{ $item->Nama }}</td>
                            <td>{{ $item->kategori->Nama ?? '-' }}</td>
                            <td>{{ number_format($item->Harga_modal, 0, ',', '.') }}</td>
                            <td>{{ number_format($item->Harga_jual, 0, ',', '.') }}</td>
                            <td class="text-center">
                                <form action="{{ route('produk.destroy', $item->id) }}" method="POST" class="d-inline"
                                    onsubmit="return confirm('Yakin hapus produk ini?')">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ route('produk.show', $item->id) }}" class="btn btn-info btn-sm">Detail</a>

                                    <a href="{{ route('produk.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>

                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center text-muted">Belum ada data produk.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
