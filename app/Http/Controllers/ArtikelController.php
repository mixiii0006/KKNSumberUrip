<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;



class ArtikelController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', \App\Http\Middleware\AdminMiddleware::class])->except(['index', 'show']);
    }

    // Public listing of artikels
    public function index(Request $request)
    {
        $query = Artikel::query();

        if ($request->filled('search')) {
            $query->where('judul', 'like', '%' . $request->search . '%');
        }

        $artikels = $query->latest()->paginate(5);

        return view('artikels.index', compact('artikels'));
    }


    // public function index()
    // {
    //     $artikels = Artikel::orderBy('tanggal_publish', 'desc')->paginate(10);
    //     return view('artikels.index', compact('artikels'));
    // }

    // Show single artikel to public
    public function show($slug)
    {
        $artikel = Artikel::where('slug', $slug)->firstOrFail();
        return view('artikels.show', compact('artikel'));
    }

    // Admin: show create form
    public function create()
    {
        return view('artikels.create');
    }

    // Admin: store new artikel

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'penulis' => 'nullable|string|max:255',
            'tanggal_publish' => 'nullable|date',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        // Slug dan gambar
        $slug = Str::slug($validated['judul']);
        $originalSlug = $slug;
        $counter = 1;
        while (Artikel::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter++;
        }
        $validated['slug'] = $slug;

        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('artikels', 'public');
            $validated['gambar'] = $path;
        }

        $validated['penulis'] = $validated['penulis'] ?? 'Admin';
        $validated['tanggal_publish'] = $validated['tanggal_publish'] ? Carbon::parse($validated['tanggal_publish']) : now();

        try {
            $artikel = Artikel::create($validated);
            return response()->json([
                'success' => true,
                'message' => 'Artikel berhasil ditambahkan.',
                'redirect_url' => route('artikels.show', $artikel->slug)
            ]);
        } catch (\Exception $e) {
            Log::error('Artikel creation failed: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Gagal menambahkan artikel.'
            ], 500);
        }
    }



    // Admin: show edit form
    public function edit(Artikel $artikel)
    {
        return view('artikels.edit', compact('artikel'));
    }

    // Admin: update artikel
    public function update(Request $request, Artikel $artikel)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'penulis' => 'nullable|string|max:255',
            'tanggal_publish' => 'nullable|date',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $validated['slug'] = Str::slug($validated['judul']);

        $validated['tanggal_publish'] = $validated['tanggal_publish']
            ? Carbon::parse($validated['tanggal_publish'])
            : now();

        try {
            $artikel->update($validated);
            return response()->json([
                'success' => true,
                'message' => 'Artikel berhasil diperbarui.',
                'redirect_url' => route('artikels.show', $artikel->slug)
            ]);
        } catch (\Exception $e) {
            \Log::error('Update gagal: ' . $e->getMessage()); // untuk debug
            return response()->json([
                'success' => false,
                'message' => 'Gagal memperbarui artikel.'
            ]);
        }
    }


    // public function update(Request $request, Artikel $artikel)
    // {
    //     $validated = $request->validate([
    //         'judul' => 'required|string|max:255',
    //         'isi' => 'required|string',
    //         'penulis' => 'nullable|string|max:255',
    //         'tanggal_publish' => 'required|date',
    //         'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    //     ]);

    //     $validated['slug'] = Str::slug($validated['judul']);

    //     if ($request->hasFile('gambar')) {
    //         $path = $request->file('gambar')->store('artikels', 'public');
    //         $validated['gambar'] = $path;
    //     }

    //     try {
    //         $artikel->update($validated);
    //         return response()->json([
    //             'success' => true,
    //             'message' => 'Artikel berhasil diperbarui.',
    //             'redirect_url' => route('artikels.show', $artikel->slug)
    //         ]);
    //     } catch (\Exception $e) {
    //         return response()->json([
    //             'success' => false,
    //             'message' => 'Gagal memperbarui artikel.'
    //         ]);
    //     }
    // }

    // Admin: delete artikel
    public function destroy(Artikel $artikel)
    {
        try {
            // Jika ada gambar, hapus dari storage
            if ($artikel->gambar) {
                \Storage::disk('public')->delete($artikel->gambar);
            }

            $artikel->delete();

            return redirect()->route('welcome')->with('success', 'Artikel berhasil dihapus.');
        } catch (\Exception $e) {
            \Log::error('Gagal menghapus artikel: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Gagal menghapus artikel.');
        }
    }
}
