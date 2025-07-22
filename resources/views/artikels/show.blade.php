<x-guest-layout>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold mb-4 text-center">{{ $artikel->judul }}</h1>
        <p class="text-gray-600 mb-6 text-center">Penulis: {{ $artikel->penulis }} | Tanggal: {{ $artikel->tanggal_publish->format('d M Y') }}</p>
        <div class="prose max-w-none">
            {!! $artikel->isi !!}
        </div>
        <a href="{{ route('welcome') }}" class="inline-block mt-6 text-blue-600 hover:underline">Kembali ke Beranda</a>
        <a href="{{ route('artikels.index') }}" class="inline-block mt-6 ml-4 text-blue-600 hover:underline">Kembali ke daftar artikel</a>
    </div>
</x-guest-layout>
