<x-guest-layout>
<div class="container mx-auto px-4">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Sejarah Organisasi</h1>
        <div>
            <a href="{{ route('sejarah.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Tambah Sejarah
            </a>
        </div>
    </div>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <table class="min-w-full bg-white border border-gray-200">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">Tahun</th>
                <th class="py-2 px-4 border-b">Deskripsi</th>
                <th class="py-2 px-4 border-b">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sejarahs as $sejarah)
            <tr>
                <td class="py-2 px-4 border-b">{{ $sejarah->tahun->format('Y-m-d') }}</td>
                <td class="py-2 px-4 border-b">{{ $sejarah->deskripsi }}</td>
                <td class="py-2 px-4 border-b">
                    <a href="{{ route('sejarah.edit', $sejarah->id) }}" class="text-blue-600 hover:text-blue-900 mr-4">Edit</a>
                    <form action="{{ route('sejarah.destroy', $sejarah->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:text-red-900">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</x-guest-layout>
