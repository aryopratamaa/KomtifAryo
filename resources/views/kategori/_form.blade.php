<div class="mb-3">
    <label for="Nama" class="form-label">Nama Kategori</label>
    <input type="text" name="Nama" id="Nama" class="form-control @error('Nama') is-invalid @enderror" value="{{ old('Nama', $kategori->Nama ?? '') }}">
    @error('Nama') 
        <small class="text-danger">{{ $message }}</small> 
    @enderror
</div>

<div class="mb-3">
    <label for="Deskripsi" class="form-label">Deskripsi</label>
    <textarea name="Deskripsi" id="Deskripsi" class="form-control @error('Deskripsi') is-invalid @enderror" rows="3">{{ old('Deskripsi', $kategori->Deskripsi ?? '') }}</textarea>
    @error('Deskripsi') 
        <small class="text-danger">{{ $message }}</small> 
    @enderror
</div>