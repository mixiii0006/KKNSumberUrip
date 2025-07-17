<?php

namespace App\Http\Controllers;

use App\Models\Sejarah;
use Illuminate\Http\Request;

class SejarahController extends Controller
{
    /**
     * Display a listing of the sejarah entries.
     */
    public function index()
    {
        if (\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->is_admin) {
            $sejarahs = Sejarah::orderBy('tahun', 'desc')->get();
            return view('admin.sejarah.index', compact('sejarahs'));
        } else {
            return view('sejarah');
        }
    }

    /**
     * Display the public sejarah page with sejarah data.
     */
    public function publicIndex()
    {
        $sejarahs = Sejarah::orderBy('tahun', 'desc')->get();
        return view('sejarah', compact('sejarahs'));
    }

    /**
     * Show the form for creating a new sejarah entry.
     */
    public function create()
    {
        return view('admin.sejarah.create');
    }

    /**
     * Store a newly created sejarah entry in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tahun' => 'required|integer',
            'deskripsi' => 'required|string|max:255',
        ]);

        Sejarah::create($request->all());

        return redirect()->route('sejarah.public')->with('success', 'Sejarah entry created successfully.');
    }

    /**
     * Show the form for editing the specified sejarah entry.
     */
    public function edit(Sejarah $sejarah)
    {
        return view('admin.sejarah.edit', compact('sejarah'));
    }

    /**
     * Update the specified sejarah entry in storage.
     */
    public function update(Request $request, Sejarah $sejarah)
    {
        $request->validate([
            'tahun' => 'required|integer',
            'deskripsi' => 'required|string|max:255',
        ]);

        $sejarah->update($request->all());

        return redirect()->route('sejarah.public')->with('success', 'Sejarah entry updated successfully.');
    }

    /**
     * Remove the specified sejarah entry from storage.
     */
    public function destroy(Sejarah $sejarah)
    {
        $sejarah->delete();

        return redirect()->route('sejarah.public')->with('success', 'Sejarah entry deleted successfully.');
    }
}