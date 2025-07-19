<x-guest-layout>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="bg-white shadow sm:rounded-lg p-6">
            <h2 class="text-2xl font-semibold mb-6">Edit Anggota Organisasi</h2>
            <form method="POST" action="{{ route('organisasi.update', $organisasi->id) }}">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="nama" class="block font-medium text-sm text-gray-700">Nama</label>
                    <input id="nama" name="nama" type="text" value="{{ old('nama', $organisasi->nama) }}" required class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" />
                    @error('nama')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="instansi" class="block font-medium text-sm text-gray-700">Instansi</label>
                    <select id="instansi" name="instansi" required class="block mt-1 w-full border-gray-300 rounded-md shadow-sm">
                        <option value="perangkat" {{ old('instansi', $organisasi->instansi) == 'perangkat' ? 'selected' : '' }}>Perangkat</option>
                        <option value="pokdarwis" {{ old('instansi', $organisasi->instansi) == 'pokdarwis' ? 'selected' : '' }}>Pokdarwis</option>
                        <option value="bpd" {{ old('instansi', $organisasi->instansi) == 'bpd' ? 'selected' : '' }}>BPD</option>
                        <option value="bumdes" {{ old('instansi', $organisasi->instansi) == 'bumdes' ? 'selected' : '' }}>BUMDes</option>
                        <option value="bma" {{ old('instansi', $organisasi->instansi) == 'bma' ? 'selected' : '' }}>BMA</option>
                    </select>
                    @error('instansi')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="jabatan" class="block font-medium text-sm text-gray-700">Jabatan</label>
                    <input id="jabatan" name="jabatan" type="text" value="{{ old('jabatan', $organisasi->jabatan) }}" required class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" />
                    @error('jabatan')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="nip" class="block font-medium text-sm text-gray-700">NIP</label>
                    <input id="nip" name="nip" type="text" value="{{ old('nip', $organisasi->nip) }}" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" />
                    @error('nip')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-end mt-4">
                    <button type="submit" class="btn btn-primary px-4 py-2 rounded">Update</button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
