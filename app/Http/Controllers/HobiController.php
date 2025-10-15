<?php

namespace App\Http\Controllers;

use App\Models\Hobi;
use Illuminate\Http\Request;

class HobiController extends Controller
{
    public function index()
    {
        $hobis = Hobi::all();
        return view('hobi.index', compact('hobis'));
    }

    public function create()
    {
        return view('hobi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_hobi' => 'required'
        ]);

        Hobi::create($request->all());
        return redirect()->route('hobi.index')->with('success', 'Hobi berhasil ditambahkan');
    }

    public function show(Hobi $hobi)
    {
        return view('hobi.show', compact('hobi'));
    }

    public function edit(Hobi $hobi)
    {
        return view('hobi.edit', compact('hobi'));
    }

    public function update(Request $request, Hobi $hobi)
    {
        $request->validate([
            'nama_hobi' => 'required'
        ]);

        $hobi->update($request->all());
        return redirect()->route('hobi.index')->with('success', 'Hobi berhasil diupdate');
    }

    public function destroy(Hobi $hobi)
    {
        $hobi->delete();
        return redirect()->route('hobi.index')->with('success', 'Hobi berhasil dihapus');
    }
}

