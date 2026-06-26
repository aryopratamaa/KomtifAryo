@php
    $namaOptions = $namaOptions ?? \App\Models\Role::namaOptions();
    $role = $role ?? new \App\Models\Role();
@endphp

<div class="mb-3">
    <label for="nama" class="form-label">Nama Role</label>
    <select name="nama" id="nama" class="form-select @error('nama') is-invalid @enderror">
        <option value="">-- Pilih Role --</option>
        @foreach ($namaOptions as $nama)
            <option value="{{ $nama }}" {{ old('nama', $role->nama ?? '') === $nama ? 'selected' : '' }}>
                {{ ucfirst($nama) }}
            </option>
        @endforeach
    </select>
    @error('nama')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
