@extends('layouts.master')
@section('title', 'Detail Role')

@section('content')
    <div class="card p-4">
        <h4 class="mb-4">Detail Role</h4>

        <div class="mb-3">
            <label for="Nama" class="form-label">Nama Role</label>
            <input type="text" id="nama" class="form-control" value="{{ $role->nama }}" readonly>
        </div>

        <a href="{{ route('setting.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
@endsection
