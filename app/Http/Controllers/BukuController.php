<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    // Menampilkan daftar buku
    public function index()
    {
        $buku = Buku::all();
        return view('buku.index', compact('buku'));
    }

    // Menampilkan formulir tambah buku
    public function create()
    {
        return view('buku.create');
    }

    // Menyimpan buku yang baru ditambahkan
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahunterbit' => 'required|numeric',
        ]);

        Buku::create($request->all());

        return redirect()->route('buku.index')->with('success', 'Buku berhasil ditambahkan');
    }

    // Menampilkan formulir edit buku
    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        return view('buku.edit', compact('buku'));
    }

    // Memperbarui data buku yang sudah ada
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahunterbit' => 'required|numeric',
        ]);

        $buku = Buku::findOrFail($id);
        $buku->update($request->all());

        return redirect()->route('buku.index')->with('success', 'Buku berhasil diperbarui');
    }

    // Menghapus buku
    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        $buku->delete();

        return redirect()->route('buku.index')->with('success', 'Buku berhasil dihapus');
    }
}
