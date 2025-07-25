<x-guest-layout>
    <div class="container py-5">
        {{-- Header dan Pencarian --}}
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-start mb-4">
            <div>
                <h2 class="fw-bold fs-3 mb-2">Daftar Artikel</h2>
                <a href="{{ route('welcome') }}" class="text-decoration-none text-primary small">← Kembali ke Beranda</a>
            </div>
            <form method="GET" action="{{ route('artikels.index') }}" class="mt-3 mt-md-0">
                <input 
                    type="text" 
                    name="search" 
                    value="{{ request('search') }}" 
                    placeholder="Cari judul artikel..." 
                    class="form-control"
                >
            </form>
        </div>

        {{-- List Artikel --}}
        @if ($artikels->count())
            <div class="d-flex flex-column gap-3">
                @foreach ($artikels as $artikel)
                    @php
                        // Cek gambar utama atau dari isi artikel
                        $imgSrc = null;
                        if ($artikel->gambar) {
                            $imgSrc = asset('storage/' . $artikel->gambar);
                        } else {
                            preg_match('/<img[^>]+src="([^">]+)"/', $artikel->isi, $matches);
                            $imgSrc = $matches[1] ?? null;
                        }
                    @endphp

                    <a href="{{ route('artikels.show', $artikel->slug) }}" class="card p-3 d-flex flex-row align-items-start text-decoration-none text-dark shadow-sm">
                        @if($imgSrc)
                            <img src="{{ $imgSrc }}" alt="{{ $artikel->judul }}" class="rounded me-3" style="width: 80px; height: 80px; object-fit: cover;">
                        @endif
                        <div>
                            <h5 class="mb-1 fw-semibold">{{ $artikel->judul }}</h5>
                            <p class="text-muted mb-1 small">
                                Penulis: {{ $artikel->penulis }} | {{ $artikel->tanggal_publish->format('d M Y') }}
                            </p>
                            <p class="mb-0 small">
                                {{ \Illuminate\Support\Str::limit(strip_tags($artikel->isi), 150) }}
                            </p>
                        </div>
                    </a>
                @endforeach
            </div>

            {{-- Pagination --}}
            <div class="mt-4">
                {{ $artikels->appends(['search' => request('search')])->links() }}
            </div>
        @else
            <div class="alert alert-info mt-5 text-center">
                Tidak ada artikel ditemukan.
            </div>
        @endif
    </div>
</x-guest-layout>
