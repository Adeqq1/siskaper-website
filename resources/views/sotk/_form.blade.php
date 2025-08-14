<!-- Card form SOTK -->
<div class="card shadow-sm">
    <div class="card-body">
        <div class="row g-3">
            <!-- Nama -->
            <div class="col-md-6">
                <label class="form-label fw-semibold">Nama <span class="text-danger">*</span></label>
                <div class="input-group input-group-lg">
                    <span class="input-group-text bg-light border-0 rounded-3">
                        <i class="fas fa-user"></i>
                    </span>
                    <input type="text" name="nama" value="{{ old('nama', $sotk->nama ?? '') }}"
                        class="form-control bg-light border-0 rounded-3" placeholder="Masukkan nama">
                </div>
                @error('nama')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
            </div>

            <!-- Jabatan -->
            <div class="col-md-6">
                <label class="form-label fw-semibold">Jabatan <span class="text-danger">*</span></label>
                <div class="input-group input-group-lg">
                    <span class="input-group-text bg-light border-0 rounded-3">
                        <i class="fas fa-id-badge"></i>
                    </span>
                    <input type="text" name="jabatan" value="{{ old('jabatan', $sotk->jabatan ?? '') }}"
                        class="form-control bg-light border-0 rounded-3" placeholder="Masukkan jabatan">
                </div>
                @error('jabatan')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
            </div>

            <!-- Urutan -->
            <div class="col-md-6">
                <label class="form-label fw-semibold">Urutan</label>
                <div class="input-group input-group-lg">
                    <span class="input-group-text bg-light border-0 rounded-3">
                        <i class="fas fa-sort-numeric-down"></i>
                    </span>
                    <input type="number" name="urutan" min="0" value="{{ old('urutan', $sotk->urutan ?? 0) }}"
                        class="form-control bg-light border-0 rounded-3" placeholder="Masukkan urutan">
                </div>
            </div>

            <!-- Foto -->
            <div class="col-md-6">
                <label class="form-label fw-semibold">Foto</label>
                <div class="input-group input-group-lg">
                    <span class="input-group-text bg-light border-0 rounded-3">
                        <i class="far fa-image"></i>
                    </span>
                    <input type="file" name="foto" accept="image/*" class="form-control bg-light rounded-3">
                </div>
                @isset($sotk->foto_path)
                    <div class="mt-2">
                        <img src="{{ Storage::url($sotk->foto_path) }}" alt="foto" class="img-thumbnail"
                            style="height:64px;width:auto;">
                    </div>
                @endisset
            </div>

            <!-- Keterangan -->
            <div class="col-12">
                <label class="form-label fw-semibold">Keterangan</label>
                <div class="input-group input-group-lg">
                    <span class="input-group-text bg-light border-0 rounded-3 align-items-start">
                        <i class="far fa-sticky-note mt-1"></i>
                    </span>
                    <textarea name="keterangan" rows="4" class="form-control bg-light border-0 rounded-3"
                        placeholder="Tulis keterangan">{{ old('keterangan', $sotk->keterangan ?? '') }}</textarea>
                </div>
            </div>
        </div>

        <!-- Aksi -->
        <div class="d-flex justify-content-end mt-4">
            <button type="submit" class="btn btn-danger">
                <i class="fas fa-paper-plane me-2"></i> Simpan
            </button>
        </div>
    </div>
</div>