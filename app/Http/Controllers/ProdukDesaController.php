<?php

namespace App\Http\Controllers;

use App\Models\ProdukDesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProdukDesaController extends Controller
{
    public function index()
    {
        $data = ProdukDesa::orderByDesc('created_at')->paginate(20);
        return view('produk_desa.index', compact('data'));
    }

    public function create()
    {
        return view('produk_desa.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:produk_desas,slug',
            'harga' => 'required|integer|min:0',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|max:4096',
            'is_active' => 'nullable|boolean',
        ]);

        if ($request->hasFile('gambar')) {
            $validated['gambar_path'] = $request->file('gambar')->store('produk', 'public');
        }

        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['nama']) . '-' . substr(Str::uuid(), 0, 8);
        }

        $validated['is_active'] = $request->boolean('is_active');

        ProdukDesa::create($validated);
        return redirect()->route('produk-desa.index')->with('success', 'Produk tersimpan');
    }

    public function edit(ProdukDesa $produk_desum)
    {
        return view('produk_desa.edit', ['item' => $produk_desum]);
    }

    public function update(Request $request, ProdukDesa $produk_desum)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:produk_desas,slug,' . $produk_desum->id,
            'harga' => 'required|integer|min:0',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|max:4096',
            'is_active' => 'nullable|boolean',
        ]);

        if ($request->hasFile('gambar')) {
            if ($produk_desum->gambar_path)
                Storage::disk('public')->delete($produk_desum->gambar_path);
            $validated['gambar_path'] = $request->file('gambar')->store('produk', 'public');
        }

        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['nama']) . '-' . substr(Str::uuid(), 0, 8);
        }
        $validated['is_active'] = $request->boolean('is_active');

        $produk_desum->update($validated);
        return redirect()->route('produk-desa.index')->with('success', 'Produk diupdate');
    }

    public function destroy(ProdukDesa $produk_desum)
    {
        if ($produk_desum->gambar_path)
            Storage::disk('public')->delete($produk_desum->gambar_path);
        $produk_desum->delete();
        return back()->with('success', 'Produk dihapus');
    }
}
