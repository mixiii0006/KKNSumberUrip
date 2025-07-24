<x-guest-layout>
    <style>
        .container1 {
            max-width: 700px;
            background-color: #ffffff;
            padding: 30px;
            margin-top: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            font-family: Arial, sans-serif;
        }

        h1 {
            color: #1f2937;
            /* Tailwind gray-800 */
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 1.5rem;
        }

        label {
            font-weight: 600;
            margin-bottom: 0.5rem;
            display: block;
            color: #374151;
            /* Tailwind gray-700 */
        }

        input[type="number"],
        input[type="text"] {
            width: 100%;
            padding: 0.5rem 0.75rem;
            border: 1px solid #d1d5db;
            /* Tailwind gray-300 */
            border-radius: 0.375rem;
            /* rounded */
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.05);
            color: #374151;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        input[type="number"]:focus,
        input[type="text"]:focus {
            border-color: #2563eb;
            /* Tailwind blue-600 */
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.3);
            outline: none;
        }

        .bg-red-100 {
            background-color: #fee2e2;
        }

        .border-red-400 {
            border-color: #f87171;
        }

        .text-red-700 {
            color: #b91c1c;
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
            background: linear-gradient(90deg, #1f4f1f, #246624);
        }

        .btn-cancel {
            display: inline-block;
            margin-top: 10px;
            color: #348E38;
            font-weight: 600;
            text-decoration: none;
        }

        .btn-cancel:hover {
            text-decoration: underline;
        }

        .link-cancel {
            margin-left: 1rem;
            color: #374151;
            transition: color 0.3s;
        }

        .link-cancel:hover {
            color: #111827;
            text-decoration: underline;
        }

        .list-disc {
            list-style-type: disc;
            padding-left: 1.25rem;
        }

        .mb-4 {
            margin-bottom: 1rem;
        }

        .judul {
            margin-bottom: 30px;
            color: #348E38;
            font-weight: 700;
            text-align: center;
        }
    </style>


    <div class="container1 mx-auto px-4">
        <h1 class="judul">Tambah Sejarah Organisasi</h1>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('sejarah.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="tahun">Tahun</label>
                <input type="number" name="tahun" id="tahun" value="{{ old('tahun') }}" required>
            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea id="deskripsi" name="deskripsi" class="form-control" rows="4" required>{{ old('deskripsi') }}</textarea>
            </div>



            <button type="submit" class="btn btn-submit">Simpan</button>
            <a href="{{ route('sejarah.public') }}" class="btn-cancel d-block text-center">Batal</a>
        </form>
    </div>
</x-guest-layout>
