<x-guest-layout>
    <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-semibold text-center mb-6">Tambah Instansi Baru</h2>

        <form method="POST" action="{{ route('instansi.store') }}" enctype="multipart/form-data" class="bg-white p-6 rounded shadow-md">
            @csrf

            <!-- Nama Instansi -->
            <div class="mb-4">
                <label for="name" class="block font-semibold text-gray-700 mb-1">Nama Instansi</label>
                <input id="name" name="name" type="text" value="{{ old('name') }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:border-blue-300"
                    required>
                @error('name')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Deskripsi -->
            <div class="mb-4">
                <label for="description" class="block font-semibold text-gray-700 mb-1">Deskripsi</label>
                <textarea id="description" name="description" rows="4"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:border-blue-300"
                    required>{{ old('description') }}</textarea>
                @error('description')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Foto Instansi -->
            <div class="mb-4">
                <label for="photo" class="block font-semibold text-gray-700 mb-1">Foto Instansi</label>
                <input id="photo" name="photo" type="file" accept="image/*"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:border-blue-300">
                @error('photo')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Tombol -->
            <div class="flex justify-end mt-6">
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded shadow">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</x-guest-layout>
