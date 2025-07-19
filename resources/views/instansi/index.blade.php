<x-guest-layout>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-semibold mb-6">Daftar Instansi</h2>
        <a href="{{ route('instansi.create') }}" class="btn btn-primary mb-4">Tambah Instansi Baru</a>
        @if(session('success'))
            <div class="mb-4 p-4 bg-green-100 text-green-700 rounded">
                {{ session('success') }}
            </div>
        @endif
        <table class="min-w-full bg-white rounded shadow">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Nama</th>
                    <th class="py-2 px-4 border-b">Deskripsi</th>
                    <th class="py-2 px-4 border-b">Foto</th>
                    <th class="py-2 px-4 border-b">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($instansis as $instansi)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $instansi->name }}</td>
                    <td class="py-2 px-4 border-b">{{ $instansi->description }}</td>
                    <td class="py-2 px-4 border-b">
                        @if($instansi->photo)
                            <img src="{{ asset('storage/' . $instansi->photo) }}" alt="{{ $instansi->name }}" class="w-20 h-20 object-cover rounded" />
                        @else
                            -
                        @endif
                    </td>
                    <td class="py-2 px-4 border-b">
                        <a href="{{ route('instansi.edit', $instansi->id) }}" class="btn btn-warning mr-2">Edit</a>
                        <form action="{{ route('instansi.destroy', $instansi->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus instansi ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-guest-layout>
