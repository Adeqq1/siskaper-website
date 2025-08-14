<!-- Card form Produk Desa -->
<div class="card shadow-sm">
    <div class="card-body">
        <div class="row g-3">
            <!-- Nama -->
            <div class="col-md-6">
                <label class="form-label fw-semibold">Nama <span class="text-danger">*</span></label>
                <div class="input-group input-group-lg">
                    <span class="input-group-text bg-light border-0 rounded-3">
                        <i class="fas fa-tag"></i>
                    </span>
                    <input type="text" name="nama" value="{{ old('nama', $item->nama ?? '') }}"
                        class="form-control bg-light border-0 rounded-3" placeholder="Masukkan nama produk">
                </div>
                @error('nama')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
            </div>

            <!-- Slug (opsional) -->
            <div class="col-md-6">
                <label class="form-label fw-semibold">Slug (opsional)</label>
                <div class="input-group input-group-lg">
                    <span class="input-group-text bg-light border-0 rounded-3">
                        <i class="fas fa-link"></i>
                    </span>
                    <input type="text" name="slug" value="{{ old('slug', $item->slug ?? '') }}"
                        class="form-control bg-light border-0 rounded-3" placeholder="contoh: gula-aren-premium">
                </div>
                @error('slug')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
            </div>

            <!-- Harga -->
            <div class="col-md-6">
                <label class="form-label fw-semibold">Harga <span class="text-danger">*</span></label>
                <div class="input-group input-group-lg">
                    <span class="input-group-text bg-light border-0 rounded-3">
                        <i class="fas fa-coins"></i>
                    </span>
                    <input type="number" name="harga" min="0" value="{{ old('harga', $item->harga ?? 0) }}"
                        class="form-control bg-light border-0 rounded-3" placeholder="Masukkan harga">
                </div>
                @error('harga')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
            </div>

            <!-- Status -->
            <div class="col-md-6 d-flex align-items-end">
                <div class="form-check form-switch ms-1">
                    <input class="form-check-input" type="checkbox" role="switch" id="is_active" name="is_active"
                        value="1" @checked(old('is_active', $item->is_active ?? true))>
                    <label class="form-check-label fw-semibold" for="is_active">Aktif</label>
                </div>
            </div>

            <!-- Deskripsi -->
            <div class="col-12">
                <label class="form-label fw-semibold">Deskripsi</label>
                <div class="input-group input-group-lg">
                    <span class="input-group-text bg-light border-0 rounded-3 align-items-start">
                        <i class="fas fa-align-left mt-1"></i>
                    </span>
                    <textarea name="deskripsi" rows="4" class="form-control bg-light border-0 rounded-3"
                        placeholder="Tulis deskripsi produk">{{ old('deskripsi', $item->deskripsi ?? '') }}</textarea>
                </div>
                @error('deskripsi')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
            </div>

            <!-- Gambar -->
            <div class="col-12">
                <label class="form-label fw-semibold">Gambar</label>
                <div class="input-group input-group-lg">
                    <span class="input-group-text bg-light border-0 rounded-3">
                        <i class="far fa-image"></i>
                    </span>
                    <input type="file" name="gambar" accept="image/*" class="form-control bg-light rounded-3">
                </div>
                @isset($item->gambar_path)
                    <div class="mt-2">
                        <img src="{{ Storage::url($item->gambar_path) }}" class="img-thumbnail"
                            style="height:64px;width:auto" alt="preview">
                    </div>
                @endisset
                @error('gambar')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
            </div>
        </div>

        <div class="d-flex justify-content-end mt-4">
            <button type="submit" class="btn btn-danger">
                <i class="fas fa-paper-plane me-2"></i> Simpan
            </button>
        </div>
    </div>
</div>