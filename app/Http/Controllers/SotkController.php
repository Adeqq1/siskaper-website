<?php

namespace App\Http\Controllers;

use App\Models\Sotk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SotkController extends Controller
{
    public function index()
    {
        $data = Sotk::orderBy('urutan')->paginate(20);
        return view('sotk.index', compact('data'));
    }

    public function create()
    {
        return view('sotk.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'urutan' => 'nullable|integer|min:0',
            'keterangan' => 'nullable|string',
            'foto' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $validated['foto_path'] = $request->file('foto')->store('sotk', 'public');
        }

        Sotk::create($validated);
        return redirect()->route('sotk.index')->with('success','Data tersimpan');
    }

    public function edit(Sotk $sotk)
    {
        return view('sotk.edit', compact('sotk'));
    }

    public function update(Request $request, Sotk $sotk)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'urutan' => 'nullable|integer|min:0',
            'keterangan' => 'nullable|string',
            'foto' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            if ($sotk->foto_path) Storage::disk('public')->delete($sotk->foto_path);
            $validated['foto_path'] = $request->file('foto')->store('sotk', 'public');
        }

        $sotk->update($validated);
        return redirect()->route('sotk.index')->with('success','Data diupdate');
    }

    public function destroy(Sotk $sotk)
    {
        if ($sotk->foto_path) Storage::disk('public')->delete($sotk->foto_path);
        $sotk->delete();
        return back()->with('success','Data dihapus');
    }
}