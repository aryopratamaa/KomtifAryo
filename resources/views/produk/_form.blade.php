@php
    $produk = $produk ?? new \App\Models\Produk();
    $kategoriList = $kategoriList ?? \App\Models\Kategori::orderBy('Nama')->get();
@endphp

<div class="mb-3">
    <label for="Kat_id" class="form-label">Kategori</label>
    <select name="Kat_id" id="Kat_id" class="form-select @error('Kat_id') is-invalid @enderror">
        <option value="">-- Pilih Kategori --</option>
        @foreach ($kategoriList as $kategori)
            <option value="{{ $kategori->id }}"
                {{ old('Kat_id', $produk->Kat_id ?? '') == $kategori->id ? 'selected' : '' }}>
                {{ $kategori->Nama }}
            </option>
        @endforeach
    </select>
    @error('Kat_id')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label for="Nama" class="form-label">Nama Produk</label>
    <input type="text" name="Nama" id="Nama" class="form-control @error('Nama') is-invalid @enderror"
        value="{{ old('Nama', $produk->Nama ?? '') }}">
    @error('Nama')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label for="Harga_modal" class="form-label">Harga Modal</label>
    <input type="number" name="Harga_modal" id="Harga_modal"
        class="form-control @error('Harga_modal') is-invalid @enderror"
        value="{{ old('Harga_modal', $produk->Harga_modal ?? '') }}" min="0" step="1">
    @error('Harga_modal')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label for="Harga_jual" class="form-label">Harga Jual</label>
    <input type="number" name="Harga_jual" id="Harga_jual"
        class="form-control @error('Harga_jual') is-invalid @enderror"
        value="{{ old('Harga_jual', $produk->Harga_jual ?? '') }}" min="0" step="1">
    @error('Harga_jual')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
