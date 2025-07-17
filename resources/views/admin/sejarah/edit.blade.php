<x-guest-layout>
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-6">Edit Sejarah Organisasi</h1>

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('sejarah.update', $sejarah->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="tahun" class="block text-gray-700 font-bold mb-2">Tahun</label>
            <input type="number" name="tahun" id="tahun" value="{{ old('tahun', $sejarah->tahun) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>

        <div class="mb-4">
            <label for="deskripsi" class="block text-gray-700 font-bold mb-2">Deskripsi</label>
            <input type="text" name="deskripsi" id="deskripsi" value="{{ old('deskripsi', $sejarah->deskripsi) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>

        <div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update</button>
            <a href="{{ route('sejarah.public') }}" class="ml-4 text-gray-700 hover:text-gray-900">Batal</a>
        </div>
    </form>
</div>
</x-guest-layout>
