<?php

namespace App\Http\Controllers;

use App\Models\Tugas;
use App\Models\Kategori;
use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function index()
    {
        $tugas = Tugas::with('kategori')->paginate(10);
        return view('halaman.tugas.index', compact('tugas'));
    }

    public function create()
    {
        $kategori = Kategori::all();
        return view('halaman.tugas.tambah', compact('kategori'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'id_kategoris' => 'required|exists:kategoris,id',
        ]);

        Tugas::create($request->only(['nama', 'id_kategoris']));

        return redirect()->route('tugas')->with('success', 'Tugas berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $tugas = Tugas::findOrFail($id);
        $kategori = Kategori::all();
        return view('halaman.tugas.edit', compact('tugas', 'kategori'));
    }

    public function update(Request $request, $id)
    {

        $tugas = Tugas::findOrFail($id);
        $request->validate([
            'nama' => 'required|string|max:255',
            'id_kategoris' => 'required|exists:kategoris,id'
        ]);
    
        $tugas->update([
            'nama' => $request->nama,
            'id_kategoris' => $request->id_kategoris
        ]);
    
        return redirect()->route('tugas')->with('success', 'Tugas berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $tugas = Tugas::findOrFail($id);
        $tugas->delete();

        return redirect()->route('tugas')->with('success', 'Tugas berhasil dihapus!');
    }
}
