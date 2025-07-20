<x-app-layout>
    <div class="max-w-4xl mx-auto py-10">
        <h2 class="text-2xl font-semibold mb-6">Edit Artikel</h2>

        @if ($errors->any())
            <div class="mb-6 p-4 bg-red-100 text-red-700 rounded">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('artikels.update', $artikel->id) }}">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="judul" class="block font-medium text-sm text-gray-700">Judul</label>
                <input type="text" name="judul" id="judul" value="{{ old('judul', $artikel->judul) }}" class="form-input rounded-md shadow-sm mt-1 block w-full" required>
            </div>

            <div class="mb-4">
                <label for="isi" class="block font-medium text-sm text-gray-700">Isi</label>
                <textarea name="isi" id="isi" rows="6" class="form-textarea rounded-md shadow-sm mt-1 block w-full" required>{{ old('isi', $artikel->isi) }}</textarea>
            </div>

            <div class="mb-4">
                <label for="penulis" class="block font-medium text-sm text-gray-700">Penulis</label>
                <input type="text" name="penulis" id="penulis" value="{{ old('penulis', $artikel->penulis) }}" class="form-input rounded-md shadow-sm mt-1 block w-full">
            </div>

            <div class="mb-4">
                <label for="tanggal_publish" class="block font-medium text-sm text-gray-700">Tanggal Publish</label>
                <input type="date" name="tanggal_publish" id="tanggal_publish" value="{{ old('tanggal_publish', $artikel->tanggal_publish->format('Y-m-d')) }}" class="form-input rounded-md shadow-sm mt-1 block w-full" required>
            </div>

            <div class="flex items-center justify-end">
                <a href="{{ route('artikels.index') }}" class="btn btn-secondary mr-4">Batal</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</x-app-layout>
