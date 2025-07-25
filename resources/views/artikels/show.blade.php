@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<x-guest-layout>
    <div class="max-w-3xl mx-auto py-10 px-4 sm:px-6 lg:px-8 bg-white rounded shadow-md">
        <h1 class="pt-4 text-3xl sm:text-4xl font-bold mb-4 text-center text-blue-800 leading-snug">
            {{ $artikel->judul }}
        </h1>

        <p class="text-sm sm:text-base text-gray-500 mb-6 text-center italic">
            Penulis: {{ $artikel->penulis }} |
            Tanggal: {{ $artikel->tanggal_publish->format('d M Y') }}
        </p>

        {{-- Gambar Utama --}}
        @if ($artikel->gambar)
            <div class="text-center mb-4">
                <img src="{{ asset('storage/' . $artikel->gambar) }}" alt="{{ $artikel->judul }}"
                    class="img-fluid rounded shadow-sm mx-auto d-block"
                    style="max-width: 800px; width: 100%; height: auto;">
            </div>
        @endif

        {{-- Isi Artikel --}}
        <div class="prose prose-sm sm:prose lg:prose-lg max-w-none text-justify artikel-isi">
            {!! $artikel->isi !!}
        </div>


        @if (Auth::check() && Auth::user()->is_admin)
            <div class="mt-4 d-flex justify-content-end mb-3">
                <div class="d-flex gap-2">
                    <!-- Tombol Edit -->
                    <a href="{{ route('artikels.edit', $artikel->id) }}" class="btn btn-warning px-4"
                        style="min-width: 120px;">
                        <i class="bi bi-pencil-square me-2"></i> Edit
                    </a>

                    <!-- Tombol Hapus -->
                    <form action="{{ route('artikels.destroy', $artikel->id) }}" method="POST"
                        onsubmit="return confirm('Yakin ingin menghapus artikel ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger px-4" style="min-width: 120px;">
                            <i class="bi bi-trash me-2"></i> Hapus
                        </button>
                    </form>
                </div>
            </div>
        @endif




        {{-- Navigasi --}}
        <div class="mt-10 text-center">
            <a href="{{ route('welcome') }}" class="text-blue-600 hover:underline font-medium">← Kembali ke Beranda</a>
            <span class="mx-2 text-gray-400">|</span>
            <a href="{{ route('artikels.index') }}" class="text-blue-600 hover:underline font-medium">Daftar Artikel</a>
        </div>

    </div>

    {{-- Gaya CSS agar gambar di isi artikel responsif --}}
    <style>
        .artikel-isi img {
            max-width: 800px;
            width: 100%;
            height: auto;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</x-guest-layout>
