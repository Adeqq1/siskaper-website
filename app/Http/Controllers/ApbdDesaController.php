<?php

namespace App\Http\Controllers;

use App\Models\ApbdDesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ApbdDesaController extends Controller
{
    public function index()
    {
        $data = ApbdDesa::orderByDesc('tahun')->paginate(20);
        return view('apbd_desa.index', compact('data'));
    }

    public function create()
    {
        return view('apbd_desa.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'tahun' => 'required|integer|min:2000|max:2100|unique:apbd_desas,tahun',
            'pendapatan' => 'required|integer|min:0',
            'belanja' => 'required|integer|min:0',
            'pembiayaan' => 'required|integer|min:0',
            'rincian' => 'nullable|array',
            'lampiran' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:4096',
        ]);

        if ($request->hasFile('lampiran')) {
            $validated['lampiran_path'] = $request->file('lampiran')->store('apbd', 'public');
        }

        ApbdDesa::create($validated);
        return redirect()->route('apbd-desa.index')->with('success', 'Data tersimpan');
    }

    public function edit(ApbdDesa $apbd_desa)
    {
        return view('apbd_desa.edit', ['item' => $apbd_desa]);
    }

    public function update(Request $request, ApbdDesa $apbd_desa)
    {
        $validated = $request->validate([
            'tahun' => 'required|integer|min:2000|max:2100|unique:apbd_desas,tahun,' . $apbd_desa->id,
            'pendapatan' => 'required|integer|min:0',
            'belanja' => 'required|integer|min:0',
            'pembiayaan' => 'required|integer|min:0',
            'rincian' => 'nullable|array',
            'lampiran' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:4096',
        ]);

        if ($request->hasFile('lampiran')) {
            if ($apbd_desa->lampiran_path)
                Storage::disk('public')->delete($apbd_desa->lampiran_path);
            $validated['lampiran_path'] = $request->file('lampiran')->store('apbd', 'public');
        }

        $apbd_desa->update($validated);
        return redirect()->route('apbd-desa.index')->with('success', 'Data diupdate');
    }

    public function destroy(ApbdDesa $apbd_desa)
    {
        if ($apbd_desa->lampiran_path)
            Storage::disk('public')->delete($apbd_desa->lampiran_path);
        $apbd_desa->delete();
        return back()->with('success', 'Data dihapus');
    }
}