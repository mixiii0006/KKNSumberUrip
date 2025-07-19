<x-guest-layout>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-semibold mb-6">Edit Instansi</h2>
        <form method="POST" action="{{ route('instansi.update', $instansi->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="name" class="block font-medium text-sm text-gray-700">Nama Instansi</label>
                <input id="name" name="name" type="text" value="{{ old('name', $instansi->name) }}" required class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" />
                @error('name')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="description" class="block font-medium text-sm text-gray-700">Deskripsi</label>
                <textarea id="description" name="description" rows="4" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm">{{ old('description', $instansi->description) }}</textarea>
                @error('description')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="photo" class="block font-medium text-sm text-gray-700">Foto Instansi</label>
                @if($instansi->photo)
                    <img src="{{ asset('storage/' . $instansi->photo) }}" alt="{{ $instansi->name }}" class="w-32 h-32 object-cover rounded mb-2" />
                @endif
                <input id="photo" name="photo" type="file" accept="image/*" class="block mt-1 w-full" />
                @error('photo')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex items-center justify-end mt-4">
                <button type="submit" class="btn btn-primary px-4 py-2 rounded">Update</button>
            </div>
        </form>
    </div>
</x-guest-layout>
