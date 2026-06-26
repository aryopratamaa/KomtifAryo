@php
    $event = $event ?? new \App\Models\Event();
    $users = $users ?? \App\Models\User::orderBy('Email')->get();
@endphp

<div class="mb-3">
    <label for="Nama" class="form-label">Nama Event</label>
    <input type="text" name="Nama" id="Nama" class="form-control @error('Nama') is-invalid @enderror"
        value="{{ old('Nama', $event->Nama ?? '') }}">
    @error('Nama')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label for="tglmulai" class="form-label">Tanggal Mulai</label>
    <input type="date" name="tglmulai" id="tglmulai" class="form-control @error('tglmulai') is-invalid @enderror"
        value="{{ old('tglmulai', $event->tglmulai ?? '') }}">
    @error('tglmulai')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label for="tglselesai" class="form-label">Tanggal Selesai</label>
    <input type="date" name="tglselesai" id="tglselesai"
        class="form-control @error('tglselesai') is-invalid @enderror"
        value="{{ old('tglselesai', $event->tglselesai ?? '') }}">
    @error('tglselesai')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label for="Deskripsi" class="form-label">Deskripsi</label>
    <textarea name="Deskripsi" id="Deskripsi" rows="3" class="form-control @error('Deskripsi') is-invalid @enderror">{{ old('Deskripsi', $event->Deskripsi ?? '') }}</textarea>
    @error('Deskripsi')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label for="User_id" class="form-label">Koordinator</label>
    <select name="User_id" id="User_id" class="form-select @error('User_id') is-invalid @enderror">
        <option value="">-- Pilih Koordinator --</option>
        @foreach ($users as $user)
            <option value="{{ $user->id }}"
                {{ old('User_id', $event->User_id ?? '') == $user->id ? 'selected' : '' }}>
                {{ $user->Nama }} ({{ $user->Email }})
            </option>
        @endforeach
    </select>
    @error('User_id')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
