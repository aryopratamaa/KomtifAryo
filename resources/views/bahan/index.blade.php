@extends('layouts.master')
@section('title', 'List Bahan Baku')

@section('content')
    <div class="card p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="mb-0">List Bahan Baku</h4>
            <div class="d-flex gap-2">
                <a href="{{ route('bahan.report.pdf') }}" target="_blank" class="btn btn-danger">
                    <i class="ti ti-file-type-pdf"></i> Cetak PDF
                </a>
                <a href="{{ route('bahan.create') }}" class="btn btn-primary"><i class="ti ti-plus"></i> Tambah Bahan Baku</a>
            </div>
        </div>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <div class="table-responsive">
            <table class="table table-bordered align-middle text-nowrap">
                <thead class="table-light">
                    <tr>
                        <th width="5%">#</th>
                        <th>Nama Bahan Baku</th>
                        <th>Satuan</th>
                        <th width="25%" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($bahans as $index => $bahan)
                        <tr>
                            <td>{{ $bahans->firstItem() + $index }}</td>
                            <td>{{ $bahan->Nama }}</td>
                            <td>{{ $bahan->Satuan }}</td>
                            <td class="text-center">
                                <form action="{{ route('bahan.destroy', $bahan->id) }}" method="POST" class="d-inline"
                                    onsubmit="return confirm('Yakin hapus bahan baku ini?')">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ route('bahan.show', $bahan->id) }}" class="btn btn-info btn-sm">Detail</a>

                                    <a href="{{ route('bahan.edit', $bahan->id) }}" class="btn btn-warning btn-sm">Edit</a>

                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center text-muted">Belum ada data bahan baku.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
