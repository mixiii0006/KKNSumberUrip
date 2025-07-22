<x-guest-layout>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-semibold mb-6">Daftar Artikel</h2>
        <a href="{{ route('welcome') }}" class="inline-block mb-6 text-blue-600 hover:underline">Kembali ke Beranda</a>
        @include('artikels.css')
        @foreach ($artikels as $artikel)
            <a href="{{ route('artikels.show', $artikel->slug) }}" class="artikel-container position-relative d-block">
                @if($artikel->gambar)
                    <img src="{{ asset('storage/' . $artikel->gambar) }}" alt="{{ $artikel->judul }}" class="mb-3 img-fluid rounded">
                @endif
                <h3 class="artikel-title">
                    {{ $artikel->judul }}
                </h3>
                <p class="artikel-meta">Penulis: {{ $artikel->penulis }} | Tanggal: {{ $artikel->tanggal_publish->format('d M Y') }}</p>
                <div class="artikel-excerpt">
                    {!! Str::limit(strip_tags($artikel->isi), 200) !!}
                </div>
                @if(Auth::check() && Auth::user()->is_admin)
                    <div class="d-flex justify-content-end gap-2 mt-auto">
                    </div>
                @endif
            </a>
        @endforeach

        <div class="mt-6">
            {{ $artikels->links() }}
        </div>
    </div>
</x-guest-layout>
