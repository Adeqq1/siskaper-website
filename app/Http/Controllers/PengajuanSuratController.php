<?php

namespace App\Http\Controllers;

use App\Models\PengajuanSurat;
use Illuminate\Http\Request;

class PengajuanSuratController extends Controller
{
    public function create()
    {
        $jenisOptions = PengajuanSurat::jenisSuratOptions();
        return view('home.form_pengajuan_surat', compact('jenisOptions'));
    }

    public function store(Request $request)
    {
        $jenis = PengajuanSurat::jenisSuratOptions();
        $validated = $request->validate([
            'jenis_surat'   => 'required|string|in:'.implode(',', $jenis),
            'nama_pemohon'  => 'required|string|max:255',
            'alasan'        => 'nullable|string',
            'tempat_lahir'  => 'required|string|max:120',
            'tanggal_lahir' => 'required|date|before_or_equal:today',
            'jenis_kelamin' => 'required|in:L,P',
            'nik'           => ['required','regex:/^\d{16}$/'], // 16 digit
            'alamat'        => 'required|string',
        ], [
            'nik.regex' => 'NIK harus 16 digit angka.',
        ]);

        PengajuanSurat::create($validated);

        return redirect()
            ->route('ppid.ajukan')
            ->with('success','Permohonan berhasil dikirim. Tunggu verifikasi dari petugas.');
    }
}
