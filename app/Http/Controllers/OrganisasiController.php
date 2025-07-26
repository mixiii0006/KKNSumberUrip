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
    $organisasi = Organisasi::with('instansi')->get()->groupBy('instansi_id');
    $instansis = \App\Models\Instansi::all()->keyBy('id');

    // Pastikan setiap instansi memiliki entry meskipun tidak punya anggota
    foreach ($instansis as $id => $instansi) {
        if (!isset($organisasi[$id])) {
            $organisasi[$id] = collect(); // atau [] kalau kamu pakai json langsung
        }
    }

    return view('organisasi_updated', [
        'organisasiGrouped' => $organisasi,
        'instansis' => $instansis
    ]);
}

    
    // public function index()
    // {
    //     $organisasi = Organisasi::with('instansi')->get()->groupBy('instansi_id');
    //     $instansis = \App\Models\Instansi::all()->keyBy('id');
    //     return view('organisasi_updated', ['organisasiGrouped' => $organisasi, 'instansis' => $instansis]);
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $instansis = \App\Models\Instansi::all();
        return view('organisasi.create', compact('instansis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'instansi_id' => 'required|exists:instansis,id',
            'jabatan' => 'required|string|max:255',
            'nip' => 'nullable|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('organisasi_photos', 'public');
            $validated['photo'] = $path;
        }

        Organisasi::create($validated);

        return redirect()->route('organisasi.index')->with('success', 'Anggota berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Organisasi $organisasi)
    {
        $instansis = \App\Models\Instansi::all();
        return view('organisasi.edit', compact('organisasi', 'instansis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Organisasi $organisasi)
{
    $validated = $request->validate([
        'nama' => 'required|string|max:255',
        'instansi_id' => 'required|exists:instansis,id',
        'jabatan' => 'required|string|max:255',
        'nip' => 'nullable|string|max:255',
        'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    if ($request->hasFile('photo')) {
        // Hapus file lama jika ada
        if ($organisasi->photo && \Storage::disk('public')->exists($organisasi->photo)) {
            \Storage::disk('public')->delete($organisasi->photo);
        }

        $path = $request->file('photo')->store('organisasi_photos', 'public');
        $validated['photo'] = $path;
    }

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