<!-- Card form Galeri Desa -->
<div class="card shadow-sm">
    <div class="card-body">
        <div class="row g-3">
            <!-- Judul -->
            <div class="col-md-6">
                <label class="form-label fw-semibold">Judul <span class="text-danger">*</span></label>
                <div class="input-group input-group-lg">
                    <span class="input-group-text bg-light border-0 rounded-3">
                        <i class="fas fa-heading"></i>
                    </span>
                    <input type="text" name="judul" value="{{ old('judul', $item->judul ?? '') }}"
                        class="form-control bg-light border-0 rounded-3" placeholder="Masukkan judul">
                </div>
                @error('judul')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
            </div>

            <!-- Tanggal -->
            <div class="col-md-6">
                <label class="form-label fw-semibold">Tanggal <span class="text-danger">*</span></label>
                <div class="input-group input-group-lg">
                    <span class="input-group-text bg-light border-0 rounded-3">
                        <i class="far fa-calendar-alt"></i>
                    </span>
                    <input type="date" name="tanggal"
                        value="{{ old('tanggal', isset($item->tanggal) ? $item->tanggal->format('Y-m-d') : '') }}"
                        class="form-control bg-light border-0 rounded-3">
                </div>
                @error('tanggal')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
            </div>

            <!-- Gambar -->
            <div class="col-md-6">
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

            <!-- Caption -->
            <div class="col-md-6">
                <label class="form-label fw-semibold">Caption</label>
                <div class="input-group input-group-lg">
                    <span class="input-group-text bg-light border-0 rounded-3 align-items-start">
                        <i class="far fa-comment-dots mt-1"></i>
                    </span>
                    <textarea name="caption" rows="3" class="form-control bg-light border-0 rounded-3"
                        placeholder="Tulis caption">{{ old('caption', $item->caption ?? '') }}</textarea>
                </div>
                @error('caption')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
            </div>
        </div>

        <div class="d-flex justify-content-end mt-4">
            <button type="submit" class="btn btn-danger">
                <i class="fas fa-paper-plane me-2"></i> Simpan
            </button>
        </div>
    </div>
</div>