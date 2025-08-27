<!-- Card form - 2 kolom (md ke atas), 1 kolom (mobile) -->
<div class="card shadow-sm">
    <div class="card-body">
        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label fw-semibold">Tahun <span class="text-danger">*</span></label>
                <div class="input-group input-group-lg">
                    <span class="input-group-text bg-light border-0 rounded-3">
                        <i class="far fa-calendar-alt"></i>
                    </span>
                    <input type="number" name="tahun" min="0" value="{{ old('tahun', $item->tahun ?? '') }}"
                        class="form-control bg-light border-0 rounded-3" placeholder="Masukkan tahun">
                </div>
            </div>

            <div class="col-md-6">
                <label class="form-label fw-semibold">KK <span class="text-danger">*</span></label>
                <div class="input-group input-group-lg">
                    <span class="input-group-text bg-light border-0 rounded-3">
                        <i class="fas fa-users"></i>
                    </span>
                    <input type="number" name="kk" min="0" value="{{ old('kk', $item->kk ?? 0) }}"
                        class="form-control bg-light border-0 rounded-3" placeholder="Masukkan jumlah KK">
                </div>
            </div>

            <div class="col-md-6">
                <label class="form-label fw-semibold">Laki-laki <span class="text-danger">*</span></label>
                <div class="input-group input-group-lg">
                    <span class="input-group-text bg-light border-0 rounded-3">
                        <i class="fas fa-mars"></i>
                    </span>
                    <input type="number" name="laki_laki" min="0" value="{{ old('laki_laki', $item->laki_laki ?? 0) }}"
                        class="form-control bg-light border-0 rounded-3" placeholder="Masukkan jumlah laki-laki">
                </div>
            </div>

            <div class="col-md-6">
                <label class="form-label fw-semibold">Perempuan <span class="text-danger">*</span></label>
                <div class="input-group input-group-lg">
                    <span class="input-group-text bg-light border-0 rounded-3">
                        <i class="fas fa-venus"></i>
                    </span>
                    <input type="number" name="perempuan" min="0" value="{{ old('perempuan', $item->perempuan ?? 0) }}"
                        class="form-control bg-light border-0 rounded-3" placeholder="Masukkan jumlah perempuan">
                </div>
            </div>

            <div class="col-md-6">
                <label class="form-label fw-semibold">Penduduk Sementara <span class="text-danger">*</span></label>
                <div class="input-group input-group-lg">
                    <span class="input-group-text bg-light border-0 rounded-3">
                        <i class="fas fa-venus"></i>
                    </span>
                    <input type="number" name="penduduk_sementara" min="0" value="{{ old('penduduk_sementara', $item->penduduk_sementara ?? 0) }}"
                        class="form-control bg-light border-0 rounded-3" placeholder="Masukkan jumlah Penduduk Sementara">
                </div>
            </div>

            <div class="col-md-6">
                <label class="form-label fw-semibold">Mutasi Penduduk <span class="text-danger">*</span></label>
                <div class="input-group input-group-lg">
                    <span class="input-group-text bg-light border-0 rounded-3">
                        <i class="fas fa-venus"></i>
                    </span>
                    <input type="number" name="mutasi_penduduk" min="0" value="{{ old('mutasi_penduduk', $item->mutasi_penduduk ?? 0) }}"
                        class="form-control bg-light border-0 rounded-3" placeholder="Masukkan Mutasi Penduduk">
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-end mt-4">
            <button type="submit" class="btn btn-danger">
                <i class="fas fa-paper-plane me-2"></i> Kirim
            </button>
        </div>
    </div>
</div>