<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $dosens = Dosen::all();
        return view('dosen.index', compact('dosens'));
    }

    public function create()
    {
        return view('dosen.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nipd' => 'required|unique:dosens'
        ]);

        Dosen::create($request->all());
        return redirect()->route('dosen.index')->with('success', 'Dosen berhasil ditambahkan');
    }

    public function show(Dosen $dosen)
    {
        return view('dosen.show', compact('dosen'));
    }

    public function edit(Dosen $dosen)
    {
        return view('dosen.edit', compact('dosen'));
    }

    public function update(Request $request, Dosen $dosen)
    {
        $request->validate([
            'nama_dosen' => 'required',
            'nipd' => 'required|unique:dosens,nipd,' . $dosen->id
        ]);

        $dosen->update($request->all());
        return redirect()->route('dosen.index')->with('success', 'Dosen berhasil diupdate');
    }

    public function destroy(Dosen $dosen)
    {
        $dosen->delete();
        return redirect()->route('dosen.index')->with('success', 'Dosen berhasil dihapus');
    }
}
