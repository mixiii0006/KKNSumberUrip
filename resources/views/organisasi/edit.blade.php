<x-guest-layout>
    <style>
        .edit-instansi-container {
            max-width: 1200px;
            background-color: #ffffff;
            padding: 30px;
            margin: 40px auto;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            font-family: Arial, sans-serif;
            margin-bottom: 30px;
        }

        .form-title {
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            color: #348E38;
            text-align: center;
        }

        .edit-instansi-form .form-group {
            margin-bottom: 1.25rem;
        }

        .edit-instansi-form label {
            display: block;
            font-weight: 500;
            color: #374151;
            margin-bottom: 0.5rem;
        }

        .edit-instansi-form input[type="text"],
        .edit-instansi-form select,
        .edit-instansi-form textarea,
        .edit-instansi-form input[type="file"] {
            width: 100%;
            padding: 10px 14px;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.03);
            font-size: 0.95rem;
        }

        .instansi-photo-preview {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 6px;
            margin-bottom: 10px;
        }

        .error-text {
            color: #dc2626;
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }

        .form-actions {
            display: flex;
            justify-content: flex-end;
            margin-top: 1.5rem;
        }

        .btn-submit {
            background: linear-gradient(90deg, #2f7a2f, #348E38);
            border: none;
            color: white;
            font-weight: 600;
            padding: 10px;
            width: 100%;
            border-radius: 5px;
            transition: background 0.3s ease;
        }

        .btn-submit:hover {
            background-color: #0b5e11;
        }
    </style>

    <div class="edit-instansi-container">
        <h2 class="form-title">Edit Anggota Organisasi</h2>

        <form method="POST" action="{{ route('organisasi.update', $organisasi->id) }}" enctype="multipart/form-data"
            class="edit-instansi-form">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nama">Nama</label>
                <input id="nama" name="nama" type="text" value="{{ old('nama', $organisasi->nama) }}"
                    required />
                @error('nama')
                    <p class="error-text">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="instansi_id">Instansi</label>
                <select id="instansi_id" name="instansi_id" required>
                    <option value="">-- Pilih Instansi --</option>
                    @foreach ($instansis as $instansi)
                        <option value="{{ $instansi->id }}"
                            {{ old('instansi_id', $organisasi->instansi_id) == $instansi->id ? 'selected' : '' }}>
                            {{ $instansi->name }}
                        </option>
                    @endforeach
                </select>
                @error('instansi_id')
                    <p class="error-text">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="jabatan">Jabatan</label>
                <input id="jabatan" name="jabatan" type="text" value="{{ old('jabatan', $organisasi->jabatan) }}"
                    required />
                @error('jabatan')
                    <p class="error-text">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="nip">NIP</label>
                <input id="nip" name="nip" type="text" value="{{ old('nip', $organisasi->nip) }}" />
                @error('nip')
                    <p class="error-text">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="photo">Foto Anggota</label>
                @if ($organisasi->photo)
                    <img src="{{ asset('storage/' . $organisasi->photo) }}" alt="{{ $organisasi->nama }}"
                        class="instansi-photo-preview" />
                @endif
                <input id="photo" name="photo" type="file" accept="image/*" />
                @error('photo')
                    <p class="error-text">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-actions">
                <button type="submit" class="btn-submit">Update</button>
            </div>
        </form>
    </div>
</x-guest-layout>
