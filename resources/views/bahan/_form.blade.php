@php
    $satuanOptions = $satuanOptions ?? \App\Models\Bahan::satuanOptions();
@endphp

<div class="mb-3">
    <label for="Nama" class="form-label">Nama Bahan</label>
    <input type="text" name="Nama" id="Nama" class="form-control @error('Nama') is-invalid @enderror"
        value="{{ old('Nama', $bahan->Nama ?? '') }}">
    @error('Nama')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label for="Satuan" class="form-label">Satuan</label>
    <select name="Satuan" id="Satuan" class="form-select @error('Satuan') is-invalid @enderror">
        <option value="">-- Pilih Satuan --</option>
        @foreach ($satuanOptions as $satuan)
            <option value="{{ $satuan }}" {{ old('Satuan', $bahan->Satuan ?? '') === $satuan ? 'selected' : '' }}>
                {{ strtoupper($satuan) }}
            </option>
        @endforeach
    </select>
    @error('Satuan')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
