<?php

namespace App\Http\Controllers;

use App\Models\Meteran;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class MeteranController extends Controller
{
    public function index()
    {
        $meterans = Meteran::with(['pelanggan'])->get();
        return view('meteran.index', compact('meterans'));
    }

    public function create()
    {
        $pelanggan = Pelanggan::all();
        return view('meteran.create', compact('pelanggan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pelanggan_id' =>'required',
            'nomor_meteran' =>'required',
        ]);

        Meteran::create($request->all());
        return redirect()->route('meteran.index')->withSuccess('Data meteran berhasil ditambahkan');
    }
    
    public function show(Meteran $meteran)
    {
        return view('meteran.show', compact('meteran'));
    }

    public function edit(Meteran $meteran)
    {
        $pelanggan = Pelanggan::all();
        return view('meteran.edit', compact('meteran', 'pelanggan'));
    }

    public function update(Request $request, Meteran $meteran)
    {
        $request->validate([
            'pelanggan_id' =>'required',
            'nomor_meteran' =>'required',
        ]);

        $meteran->update($request->all());
        return redirect()->route('meteran.index')->withSuccess('Data meteran berhasil diubah');
    }

    public function destroy(Meteran $meteran)
    {
        $meteran->delete();
        return redirect()->route('meteran.index')->withSuccess('Data meteran berhasil dihapus');
    }
}