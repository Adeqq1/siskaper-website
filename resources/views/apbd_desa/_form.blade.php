<div class="grid grid-cols-2 gap-4">
    <div>
        <label>Tahun</label>
        <input type="number" name="tahun" value="{{ old('tahun', $item->tahun ?? '') }}" class="w-full">
    </div>
    <div>
        <label>Pendapatan</label>
        <input type="number" name="pendapatan" value="{{ old('pendapatan', $item->pendapatan ?? 0) }}" class="w-full">
    </div>
    <div>
        <label>Belanja</label>
        <input type="number" name="belanja" value="{{ old('belanja', $item->belanja ?? 0) }}" class="w-full">
    </div>
    <div>
        <label>Pembiayaan</label>
        <input type="number" name="pembiayaan" value="{{ old('pembiayaan', $item->pembiayaan ?? 0) }}" class="w-full">
    </div>
    <div class="col-span-2">
        <label>Rincian (JSON optional)</label>
        <textarea name="rincian" rows="4"
            class="w-full">{{ old('rincian', isset($item->rincian) ? json_encode($item->rincian, JSON_PRETTY_PRINT) : '') }}</textarea>
        <small>Isi dengan JSON valid jika perlu breakdown.</small>
    </div>
    <div class="col-span-2">
        <label>Lampiran (PDF/JPG/PNG)</label>
        <input type="file" name="lampiran" accept="application/pdf,image/*">
        @isset($item->lampiran_path)
            <a href="{{ Storage::url($item->lampiran_path) }}" target="_blank">Lihat lampiran</a>
        @endisset
    </div>
</div>