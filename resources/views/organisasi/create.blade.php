<x-guest-layout>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="bg-white shadow sm:rounded-lg p-6">
            <h2 class="text-2xl font-semibold mb-6">Tambah Anggota Organisasi</h2>
            <form method="POST" action="{{ route('organisasi.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="mb-4">
                    <label for="nama" class="block font-medium text-sm text-gray-700">Nama</label>
                    <input id="nama" name="nama" type="text" value="{{ old('nama') }}" required class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" />
                    @error('nama')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="instansi_id" class="block font-medium text-sm text-gray-700">Instansi</label>
                    <select id="instansi_id" name="instansi_id" required class="block mt-1 w-full border-gray-300 rounded-md shadow-sm">
                        <option value="">-- Pilih Instansi --</option>
                        @foreach ($instansis as $instansi)
                            <option value="{{ $instansi->id }}" {{ old('instansi_id') == $instansi->id ? 'selected' : '' }}>
                                {{ $instansi->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('instansi_id')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="jabatan" class="block font-medium text-sm text-gray-700">Jabatan</label>
                    <input id="jabatan" name="jabatan" type="text" value="{{ old('jabatan') }}" required class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" />
                    @error('jabatan')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="nip" class="block font-medium text-sm text-gray-700">NIP</label>
                    <input id="nip" name="nip" type="text" value="{{ old('nip') }}" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" />
                    @error('nip')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="photo" class="block font-medium text-sm text-gray-700">Foto Anggota</label>
                    <input id="photo" name="photo" type="file" accept="image/*" class="block mt-1 w-full" />
                    @error('photo')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-end mt-4">
                    <button type="submit" class="btn btn-primary px-4 py-2 rounded">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
