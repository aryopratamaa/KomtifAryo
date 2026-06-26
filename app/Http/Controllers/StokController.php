<?php

namespace App\Http\Controllers;

use App\Models\Bahan;
use App\Models\Stok;
use Illuminate\Http\Request;

class StokController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stoks = Stok::with('bahan')->latest()->paginate(5);

        return view('stok.index', compact('stoks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bahans = Bahan::orderBy('Nama')->get();

        return view('stok.create', compact('bahans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'Bahan_id' => 'required|exists:bahans,id',
            'Stoknow' => 'required|integer|min:0',
            'Stokmin' => 'required|integer|min:0',
        ]);
        Stok::create($validated);
        return redirect()->route('stok.index')->with('success', 'Stok berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Stok $stok)
    {
        $stok->load('bahan');

        return view('stok.show', compact('stok'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stok $stok)
    {
        $bahans = Bahan::orderBy('Nama')->get();

        return view('stok.edit', compact('stok', 'bahans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Stok $stok)
    {
        $validated = $request->validate([
            'Bahan_id' => 'required|exists:bahans,id',
            'Stoknow' => 'required|integer|min:0',
            'Stokmin' => 'required|integer|min:0',
        ]);
        $stok->update($validated);
        return redirect()->route('stok.index')->with('success', 'Stok berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stok $stok)
    {
        $stok->delete();
        return redirect()->route('stok.index')
            ->with('success', 'Stok berhasil dihapus.');
    }
}
