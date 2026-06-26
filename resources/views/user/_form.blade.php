@php
    $user = $user ?? new \App\Models\User();
    $roles = $roles ?? \App\Models\Role::orderBy('nama')->get();
@endphp

<div class="mb-3">
    <label for="role_id" class="form-label">Role</label>
    <select name="role_id" id="role_id" class="form-select @error('role_id') is-invalid @enderror">
        <option value="">-- Pilih Role --</option>
        @foreach ($roles as $role)
            <option value="{{ $role->id }}"
                {{ old('role_id', $user->role_id ?? '') == $role->id ? 'selected' : '' }}>
                {{ $role->nama }}
            </option>
        @endforeach
    </select>
    @error('role_id')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label for="Nama" class="form-label">Nama</label>
    <input type="text" name="Nama" id="Nama" class="form-control @error('Nama') is-invalid @enderror"
        value="{{ old('Nama', $user->Nama ?? '') }}">
    @error('Nama')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label for="Email" class="form-label">Email</label>
    <input type="email" name="Email" id="Email" class="form-control @error('Email') is-invalid @enderror"
        value="{{ old('Email', $user->Email ?? '') }}">
    @error('Email')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror">
    @error('password')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
</div>
