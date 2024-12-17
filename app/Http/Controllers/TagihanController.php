<?php

namespace App\Http\Controllers;

use App\Models\Tagihan;
use App\Models\Pembacaan;
use Illuminate\Http\Request;

class TagihanController extends Controller
{
    public function index()
    {
        $tagihans = Tagihan::with('pembacaan')->get();
        return view('tagihan.index', compact('tagihans'));
    }

    public function create()
    {
        $pembacaans = Pembacaan::all();
        return view('tagihan.create', compact('pembacaans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pembacaan_id' => 'required',
            'tanggal_tagihan' => 'required',
            'jumlah' => 'required|numeric',
        ]);

        Tagihan::create($request->all());
        return redirect()->route('tagihan.index')->with('success', 'Tagihan berhasil ditambahkan');
    }

    public function show(Tagihan $tagihan)
    {
        return view('tagihan.show', compact('tagihan'));
    }

    public function edit(Tagihan $tagihan)
    {
        $pembacaans = Pembacaan::all();
        return view('tagihan.edit', compact('tagihan', 'pembacaans'));
    }

    public function update(Request $request, Tagihan $tagihan)
    {
        $request->validate([
            'pembacaan_id' => 'required',
            'tanggal_tagihan' => 'required',
            'jumlah' => 'required|numeric',
        ]);

        $tagihan->update($request->all());
        return redirect()->route('tagihan.index')->with('success', 'Tagihan berhasil diubah');
    }

    public function destroy(Tagihan $tagihan)
    {
        $tagihan->delete();
        return redirect()->route('tagihan.index')->with('success', 'Tagihan berhasil dihapus');
    }
}
