<x-guest-layout>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-semibold mb-6">Daftar Artikel</h2>
        @foreach ($artikels as $artikel)
            <div class="mb-6 p-4 border rounded shadow-sm hover:shadow-md transition-shadow duration-200">
                <a href="{{ route('artikels.show', $artikel->slug) }}" class="text-xl font-bold text-blue-600 hover:underline">
                    {{ $artikel->judul }}
                </a>
                <p class="text-gray-600 text-sm mb-2">Penulis: {{ $artikel->penulis }} | Tanggal: {{ $artikel->tanggal_publish->format('d M Y') }}</p>
                <div class="text-gray-700">
                    {!! Str::limit(strip_tags($artikel->isi), 200) !!}
                </div>
            </div>
        @endforeach

        <div class="mt-6">
            {{ $artikels->links() }}
        </div>
    </div>
</x-guest-layout>
