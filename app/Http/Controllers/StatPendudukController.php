<?php

namespace App\Http\Controllers;

use App\Models\StatPenduduk;
use Illuminate\Http\Request;

class StatPendudukController extends Controller
{
    public function index()
    {
        $data = StatPenduduk::orderByDesc('tahun')->paginate(20);
        return view('stat_penduduk.index', compact('data'));
    }

    public function create()
    {
        return view('stat_penduduk.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'tahun' => 'required|integer|min:2000|max:2100|unique:stat_penduduks,tahun',
            'laki_laki' => 'required|integer|min:0',
            'perempuan' => 'required|integer|min:0',
            'penduduk_sementara' => 'required|integer|min:0',
            'mutasi_penduduk' => 'required|integer|min:0',
            'kk' => 'required|integer|min:0',
        ]);

        StatPenduduk::create($validated);
        return redirect()->route('stat-penduduk.index')->with('success', 'Data tersimpan');
    }

    public function edit(StatPenduduk $stat_penduduk)
    {
        return view('stat_penduduk.edit', ['item' => $stat_penduduk]);
    }

    public function update(Request $request, StatPenduduk $stat_penduduk)
    {
        $validated = $request->validate([
            'tahun' => 'required|integer|min:2000|max:2100|unique:stat_penduduks,tahun,' . $stat_penduduk->id,
            'laki_laki' => 'required|integer|min:0',
            'perempuan' => 'required|integer|min:0',
            'penduduk_sementara' => 'required|integer|min:0',
            'mutasi_penduduk' => 'required|integer|min:0',
            'kk' => 'required|integer|min:0',
        ]);

        $stat_penduduk->update($validated);
        return redirect()->route('stat-penduduk.index')->with('success', 'Data diupdate');
    }

    public function destroy(StatPenduduk $stat_penduduk)
    {
        $stat_penduduk->delete();
        return back()->with('success', 'Data dihapus');
    }
}