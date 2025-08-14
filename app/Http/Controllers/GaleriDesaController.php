<?php

namespace App\Http\Controllers;

use App\Models\GaleriDesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriDesaController extends Controller
{
    public function index()
    {
        $data = GaleriDesa::orderByDesc('tanggal')->orderByDesc('created_at')->paginate(24);
        return view('galeri_desa.index', compact('data'));
    }

    public function create()
    {
        return view('galeri_desa.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'gambar' => 'required|image|max:4096',
            'caption' => 'nullable|string',
            'tanggal' => 'nullable|date',
        ]);

        if ($request->hasFile('gambar')) {
            $validated['gambar_path'] = $request->file('gambar')->store('galeri', 'public');
        }

        GaleriDesa::create($validated);
        return redirect()->route('galeri-desa.index')->with('success', 'Foto tersimpan');
    }

    public function edit(GaleriDesa $galeri_desum)
    {
        return view('galeri_desa.edit', ['item' => $galeri_desum]);
    }

    public function update(Request $request, GaleriDesa $galeri_desum)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'gambar' => 'nullable|image|max:4096',
            'caption' => 'nullable|string',
            'tanggal' => 'nullable|date',
        ]);

        if ($request->hasFile('gambar')) {
            if ($galeri_desum->gambar_path)
                Storage::disk('public')->delete($galeri_desum->gambar_path);
            $validated['gambar_path'] = $request->file('gambar')->store('galeri', 'public');
        }

        $galeri_desum->update($validated);
        return redirect()->route('galeri-desa.index')->with('success', 'Foto diupdate');
    }

    public function destroy(GaleriDesa $galeri_desum)
    {
        if ($galeri_desum->gambar_path)
            Storage::disk('public')->delete($galeri_desum->gambar_path);
        $galeri_desum->delete();
        return back()->with('success', 'Foto dihapus');
    }
}
