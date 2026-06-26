<?php

namespace App\Http\Controllers;

use App\Models\Bahan;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BahanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bahans = Bahan::latest()->paginate(5);
        return view('bahan.index', compact('bahans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bahan.create', [
            'satuanOptions' => Bahan::satuanOptions(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'Nama' => 'required|string|max:100',
            'Satuan' => ['required', Rule::in(Bahan::satuanOptions())],
        ]);

        Bahan::create($validated);
        return redirect()->route('bahan.index')->with('success', 'Bahan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bahan $bahan)
    {
        return view('bahan.show', compact('bahan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bahan $bahan)
    {
        return view('bahan.edit', [
            'bahan' => $bahan,
            'satuanOptions' => Bahan::satuanOptions(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bahan $bahan)
    {
        $validated = $request->validate([
            'Nama' => 'required|string|max:100',
            'Satuan' => ['required', Rule::in(Bahan::satuanOptions())],
        ]);
        $bahan->update($validated);
        return redirect()->route('bahan.index')->with('success', 'Bahan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bahan $bahan)
    {
        $bahan->delete();

        return redirect()->route('bahan.index')->with('success', 'Bahan berhasil dihapus.');
    }
}
