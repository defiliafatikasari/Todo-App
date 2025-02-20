<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //func index merupakan func untuk mengambil data dan melemparkan ke halaman utama
        $data = Kategori::get();
        return view('halaman.kategori.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //func index merupakan func untuk mengambil data / hanya menampilkan halaman pembuatan data
        return view('halaman.kategori.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //func index merupakan func untuk meminta data dari user dan mengembalikan tampilan ke halaman utama
        $nama = $request->namaKategori; //meminta user untuk menginput nama

        Kategori::create([
            'nama' => $nama
        ]);
        return redirect()->route('kategori');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kategori $kategori)
    {
         //func index merupakan func untuk mengambil 1 data berdasarkan id lalu ditampilkan
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //func index merupakan func untuk mengambil 1 data berdasarkan id lalu di edit
        $cari = Kategori::findorfail($id); //jika menggunakan ID
        // $cari = Kategori::where('id', $id)->first(); jika tidak menggunakan ID

        return view('halaman.kategori.edit', compact('cari'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //func index merupakan func untuk mengambil 1 data berdasarkan id lalu di perbarui datanya
        $nama = $request->nama;
        $cari = Kategori::findorfail($id);

        $cari->update([
            'nama' => $nama
        ]);

        return redirect()->route('kategori');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //func index merupakan func untuk mengambil 1 data berdasarkan id lalu di hapus
        $cari = Kategori::findorfail($id);
        $cari->delete();

        return redirect()->route('kategori');
    }
}
