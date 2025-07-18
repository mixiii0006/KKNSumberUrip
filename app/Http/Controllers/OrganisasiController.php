<?php

namespace App\Http\Controllers;

use App\Models\Organisasi;
use Illuminate\Http\Request;

use Illuminate\Routing\Controller;

class OrganisasiController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', \App\Http\Middleware\AdminMiddleware::class])->except(['index']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $organisasi = Organisasi::all()->groupBy('instansi');
        return view('organisasi_updated', ['organisasiGrouped' => $organisasi]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('organisasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'instansi' => 'required|in:perangkat,pokdarwis,bpd,bumdes,bma',
            'jabatan' => 'required|string|max:255',
            'nip' => 'nullable|string|max:255',
        ]);

        Organisasi::create($validated);

        return redirect()->route('organisasi.index')->with('success', 'Anggota berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Organisasi $organisasi)
    {
        return view('organisasi.edit', compact('organisasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Organisasi $organisasi)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'instansi' => 'required|in:perangkat,pokdarwis,bpd,bumdes,bma',
            'jabatan' => 'required|string|max:255',
            'nip' => 'nullable|string|max:255',
        ]);

        $organisasi->update($validated);

        return redirect()->route('organisasi.index')->with('success', 'Anggota berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Organisasi $organisasi)
    {
        $organisasi->delete();

        return redirect()->route('organisasi.index')->with('success', 'Anggota berhasil dihapus.');
    }
}