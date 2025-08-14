<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    public function index()
    {
        $data = Berita::orderByDesc('published_at')->orderByDesc('created_at')->paginate(20);
        return view('berita.index', compact('data'));
    }

    public function create()
    {
        return view('berita.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:beritas,slug',
            'gambar' => 'nullable|image|max:4096',
            'excerpt' => 'nullable|string',
            'konten' => 'required|string',
            'status' => 'required|in:draft,published',
            'published_at' => 'nullable|date',
        ]);

        if ($request->hasFile('gambar')) {
            $validated['gambar_path'] = $request->file('gambar')->store('berita', 'public');
        }

        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['judul']) . '-' . substr(Str::uuid(), 0, 8);
        }

        $item = Berita::create($validated);
        return redirect()->route('berita.index')->with('success', 'Berita tersimpan');
    }

    public function edit(Berita $beritum)
    {
        return view('berita.edit', ['item' => $beritum]);
    }

    public function update(Request $request, Berita $beritum)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:beritas,slug,' . $beritum->id,
            'gambar' => 'nullable|image|max:4096',
            'excerpt' => 'nullable|string',
            'konten' => 'required|string',
            'status' => 'required|in:draft,published',
            'published_at' => 'nullable|date',
        ]);

        if ($request->hasFile('gambar')) {
            if ($beritum->gambar_path)
                Storage::disk('public')->delete($beritum->gambar_path);
            $validated['gambar_path'] = $request->file('gambar')->store('berita', 'public');
        }

        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['judul']) . '-' . substr(Str::uuid(), 0, 8);
        }

        $beritum->update($validated);
        return redirect()->route('berita.index')->with('success', 'Berita diupdate');
    }

    public function destroy(Berita $beritum)
    {
        if ($beritum->gambar_path)
            Storage::disk('public')->delete($beritum->gambar_path);
        $beritum->delete();
        return back()->with('success', 'Berita dihapus');
    }
}
