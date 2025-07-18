<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Anggota Organisasi') }}
        </h2>
    </x-slot>

    <div class="py-12 max-w-3xl mx-auto">
        <form method="POST" action="{{ route('organisasi.update', $organisasi->id) }}">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <x-input-label for="nama" :value="__('Nama')" />
                <x-text-input id="nama" class="block mt-1 w-full" type="text" name="nama" value="{{ old('nama', $organisasi->nama) }}" required autofocus />
                <x-input-error :messages="$errors->get('nama')" class="mt-2" />
            </div>

            <div class="mb-4">
                <x-input-label for="instansi" :value="__('Instansi')" />
                <select id="instansi" name="instansi" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" required>
                    <option value="perangkat" {{ old('instansi', $organisasi->instansi) == 'perangkat' ? 'selected' : '' }}>Perangkat</option>
                    <option value="pokdarwis" {{ old('instansi', $organisasi->instansi) == 'pokdarwis' ? 'selected' : '' }}>Pokdarwis</option>
                    <option value="bpd" {{ old('instansi', $organisasi->instansi) == 'bpd' ? 'selected' : '' }}>BPD</option>
                    <option value="bumdes" {{ old('instansi', $organisasi->instansi) == 'bumdes' ? 'selected' : '' }}>BUMDes</option>
                    <option value="bma" {{ old('instansi', $organisasi->instansi) == 'bma' ? 'selected' : '' }}>BMA</option>
                </select>
                <x-input-error :messages="$errors->get('instansi')" class="mt-2" />
            </div>

            <div class="mb-4">
                <x-input-label for="jabatan" :value="__('Jabatan')" />
                <x-text-input id="jabatan" class="block mt-1 w-full" type="text" name="jabatan" value="{{ old('jabatan', $organisasi->jabatan) }}" required />
                <x-input-error :messages="$errors->get('jabatan')" class="mt-2" />
            </div>

            <div class="mb-4">
                <x-input-label for="nip" :value="__('NIP')" />
                <x-text-input id="nip" class="block mt-1 w-full" type="text" name="nip" value="{{ old('nip', $organisasi->nip) }}" />
                <x-input-error :messages="$errors->get('nip')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button>
                    {{ __('Update') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>
