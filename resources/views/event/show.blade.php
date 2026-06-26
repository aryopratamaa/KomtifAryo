@extends('layouts.master')

@section('title', 'Detail Event')

@section('content')
    <div class="card p-4">
        <h4 class="mb-4">Detail Event</h4>

        <table class="table table-bordered">
            <tr>
                <th width="25%">Nama Event</th>
                <td>{{ $event->Nama }}</td>
            </tr>
            <tr>
                <th>Tanggal Mulai</th>
                <td>{{ $event->tglmulai }}</td>
            </tr>
            <tr>
                <th>Tanggal Selesai</th>
                <td>{{ $event->tglselesai }}</td>
            </tr>
            <tr>
                <th>Deskripsi</th>
                <td>{{ $event->Deskripsi }}</td>
            </tr>
            <tr>
                <th>User</th>
                <td>{{ $event->user->Email ?? '-' }}</td>
            </tr>
            <tr>
                <th>Dibuat Pada</th>
                <td>{{ $event->created_at?->format('d M Y H:i') }}</td>
            </tr>
        </table>

        <div class="mt-3">
            <a href="{{ route('event.index') }}" class="btn btn-secondary">Kembali</a>
            <a href="{{ route('event.edit', $event->id) }}" class="btn btn-warning">Edit Event</a>
        </div>
    </div>
@endsection
