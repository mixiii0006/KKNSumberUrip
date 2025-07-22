<x-guest-layout>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold mb-4 text-center">{{ $artikel->judul }}</h1>
        <p class="text-gray-600 mb-6 text-center">Penulis: {{ $artikel->penulis }} | Tanggal: {{ $artikel->tanggal_publish->format('d M Y') }}</p>
        @if($artikel->gambar)
            <img src="{{ asset('storage/' . $artikel->gambar) }}" alt="{{ $artikel->judul }}" class="mb-6 img-fluid rounded">
        @endif
        <div class="prose max-w-none">
            {!! $artikel->isi !!}
        </div>
        @if(Auth::check() && Auth::user()->is_admin)
            <div class="mt-6 flex gap-2">
                <a href="{{ route('artikels.edit', $artikel->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('artikels.destroy', $artikel->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus artikel ini?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        @endif
        <a href="{{ route('welcome') }}" class="inline-block mt-6 text-blue-600 hover:underline">Kembali ke Beranda</a>
        <a href="{{ route('artikels.index') }}" class="inline-block mt-6 ml-4 text-blue-600 hover:underline">Kembali ke daftar artikel</a>
    </div>
</x-guest-layout>
