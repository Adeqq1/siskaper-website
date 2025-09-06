<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PengajuanSurat;
use Illuminate\Http\Request;

class PengajuanSuratAdminController extends Controller
{
    public function index()
    {
        $unreadCount = PengajuanSurat::unread()->count();
        $data = PengajuanSurat::latest()->paginate(20);
        return view('admin.pengajuan_surat.index', compact('data','unreadCount'));
    }

    public function show(PengajuanSurat $pengajuan)
    {
        if (is_null($pengajuan->read_at)) $pengajuan->markAsRead();
        return view('admin.pengajuan_surat.show', compact('pengajuan'));
    }

    public function markAsRead(PengajuanSurat $pengajuan)
    {
        if (is_null($pengajuan->read_at)) $pengajuan->markAsRead();
        return back()->with('success','Ditandai sudah dibaca.');
    }

    public function destroy(PengajuanSurat $pengajuan)
    {
        $pengajuan->delete();
        return back()->with('success','Data dihapus.');
    }
}
