<?php

namespace App\Http\Controllers;

use App\Models\Pembacaan;
use App\Models\Meteran;
use Illuminate\Http\Request;

class PembacaanController extends Controller
{
    public function index()
    {
        $pembacaans = Pembacaan::with('meteran')->get();
        return view('pembacaans.index', compact('pembacaans'));
    }

    public function create()
    {
        $meterans = Meteran::all();
        return view('pembacaans.create', compact('meterans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'meteran_id' => 'required',
            'tanggal_pembacaan' => 'required|date',
            'pembacaan_sebelumnya' => 'required|integer',
            'pembacaan_sekarang' => 'required|integer',
        ]);

        Pembacaan::create($request->all());
        return redirect()->route('pembacaans.index')->with('success', 'Data pembacaan berhasil ditambahkan');
    }

    public function show(Pembacaan $pembacaan)
    {
        return view('pembacaans.show', compact('pembacaan'));
    }

    public function edit(Pembacaan $pembacaan)
    {
        $meterans = Meteran::all();
        return view('pembacaans.edit', compact('pembacaan','meterans'));
    }

    public function update(Request $request, Pembacaan $pembacaan)
    {
        $request->validate([
            'meteran_id' => 'required',
            'tanggal_pembacaan' => 'required|date',
            'pembacaan_sebelumnya' => 'required|integer',
            'pembacaan_sekarang' => 'required|integer',
        ]);

        $pembacaan->update($request->all());
        return redirect()->route('pembacaans.index')->with('success', 'Data pembacaan berhasil diubah');
    }

    public function destroy(Pembacaan $pembacaan)
    {
        $pembacaan->delete();
        return redirect()->route('pembacaans.index')->with('success', 'Data pembacaan berhasil dihapus');
    }
}
