@php
	$bahans = $bahans ?? \App\Models\Bahan::orderBy('Nama')->get();
@endphp

<div class="mb-3">
	<label for="Bahan_id" class="form-label">Bahan</label>
	<select name="Bahan_id" id="Bahan_id" class="form-select @error('Bahan_id') is-invalid @enderror">
		<option value="">-- Pilih Bahan --</option>
		@foreach ($bahans as $bahan)
			<option value="{{ $bahan->id }}" {{ old('Bahan_id', $stok->Bahan_id ?? '') == $bahan->id ? 'selected' : '' }}>
				{{ $bahan->Nama }} ({{ $bahan->Satuan }})
			</option>
		@endforeach
	</select>
	@error('Bahan_id')
		<small class="text-danger">{{ $message }}</small>
	@enderror
</div>

<div class="mb-3">
	<label for="Stoknow" class="form-label">Stok Sekarang</label>
	<input type="number" name="Stoknow" id="Stoknow" min="0" step="1"
		class="form-control @error('Stoknow') is-invalid @enderror"
		value="{{ old('Stoknow', $stok->Stoknow ?? '') }}">
	@error('Stoknow')
		<small class="text-danger">{{ $message }}</small>
	@enderror
</div>

<div class="mb-3">
	<label for="Stokmin" class="form-label">Stok Minimum</label>
	<input type="number" name="Stokmin" id="Stokmin" min="0" step="1"
		class="form-control @error('Stokmin') is-invalid @enderror"
		value="{{ old('Stokmin', $stok->Stokmin ?? '') }}">
	@error('Stokmin')
		<small class="text-danger">{{ $message }}</small>
	@enderror
</div>
