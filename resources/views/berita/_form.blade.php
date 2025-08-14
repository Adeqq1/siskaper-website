<!-- Card form Berita -->
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

            <!-- Slug -->
            <div class="col-md-6">
                <label class="form-label fw-semibold">Slug (opsional)</label>
                <div class="input-group input-group-lg">
                    <span class="input-group-text bg-light border-0 rounded-3">
                        <i class="fas fa-link"></i>
                    </span>
                    <input type="text" name="slug" value="{{ old('slug', $item->slug ?? '') }}"
                        class="form-control bg-light border-0 rounded-3" placeholder="contoh: kegiatan-gotong-royong">
                </div>
                @error('slug')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
            </div>

            <!-- Gambar Cover -->
            <div class="col-12">
                <label class="form-label fw-semibold">Gambar Cover</label>
                <div class="input-group input-group-lg">
                    <span class="input-group-text bg-light border-0 rounded-3">
                        <i class="far fa-image"></i>
                    </span>
                    <input type="file" name="gambar" accept="image/*" class="form-control bg-light rounded-3">
                </div>
                @isset($item->gambar_path)
                    <div class="mt-2">
                        <img src="{{ Storage::url($item->gambar_path) }}" class="img-thumbnail"
                            style="height:64px;width:auto" alt="cover preview">
                    </div>
                @endisset
                @error('gambar')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
            </div>

            <!-- Excerpt -->
            <div class="col-12">
                <label class="form-label fw-semibold">Excerpt</label>
                <div class="input-group input-group-lg">
                    <span class="input-group-text bg-light border-0 rounded-3 align-items-start">
                        <i class="far fa-file-alt mt-1"></i>
                    </span>
                    <textarea name="excerpt" rows="3" class="form-control bg-light border-0 rounded-3"
                        placeholder="Ringkasan singkat">{{ old('excerpt', $item->excerpt ?? '') }}</textarea>
                </div>
                @error('excerpt')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
            </div>

            <!-- Konten -->
            <div class="col-12">
                <label class="form-label fw-semibold">Konten</label>
                <div class="input-group input-group-lg">
                    <span class="input-group-text bg-light border-0 rounded-3 align-items-start">
                        <i class="fas fa-paragraph mt-1"></i>
                    </span>
                    <textarea name="konten" rows="8" class="form-control bg-light border-0 rounded-3"
                        placeholder="Tulis konten lengkap">{{ old('konten', $item->konten ?? '') }}</textarea>
                </div>
                @error('konten')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
            </div>

            <!-- Status & Published At -->
            <div class="col-md-6">
                <label class="form-label fw-semibold">Status</label>
                <div class="input-group input-group-lg">
                    <span class="input-group-text bg-light border-0 rounded-3">
                        <i class="fas fa-toggle-on"></i>
                    </span>
                    <select name="status" class="form-select bg-light border-0 rounded-3">
                        <option value="draft" @selected(old('status', $item->status ?? 'draft') === 'draft')>Draft
                        </option>
                        <option value="published" @selected(old('status', $item->status ?? '') === 'published')>Published
                        </option>
                    </select>
                </div>
                @error('status')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
            </div>

            <div class="col-md-6">
                <label class="form-label fw-semibold">Published At (opsional)</label>
                <div class="input-group input-group-lg">
                    <span class="input-group-text bg-light border-0 rounded-3">
                        <i class="far fa-clock"></i>
                    </span>
                    <input type="datetime-local" name="published_at"
                        value="{{ old('published_at', isset($item->published_at) ? $item->published_at->format('Y-m-d\\TH:i') : '') }}"
                        class="form-control bg-light border-0 rounded-3">
                </div>
                @error('published_at')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
            </div>
        </div>

        <div class="d-flex justify-content-end mt-4">
            <button type="submit" class="btn btn-danger">
                <i class="fas fa-paper-plane me-2"></i> Simpan
            </button>
        </div>
    </div>
</div>