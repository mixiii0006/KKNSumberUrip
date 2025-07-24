<x-guest-layout>
    <style>
        .steps-container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
            display: flex;
            flex-direction: column;
            gap: 20px;
            font-family: Arial, sans-serif;
        }

        .step-item {
            display: flex;
            align-items: stretch;
            /* Membuat tahun setinggi deskripsi */
            gap: 20px;
        }

        .step-item.left {
            flex-direction: row;
        }

        .step-item.right {
            flex-direction: row-reverse;
        }

        .step-number {
            min-width: 160px;
            display: flex;
            align-items: center;
            /* Vertikal tengah */
            justify-content: center;
            /* Horizontal tengah */
            padding: 0 20px;
            font-size: 2rem;
            font-weight: bold;
            border-radius: 8px;
            background-color: #d9534f;
            /* Default warna */
            color: white;
            white-space: nowrap;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            user-select: none;
        }

        /* Warna-warna khusus berdasarkan step */
        .step-number.step-2 {
            background-color: #337ab7;

        }

        .step-number.step-3 {
            background-color: #f0ad4e;

        }

        .step-number.step-4 {
            background-color: #5cb85c;

        }

        .step-content {
            background-color: #f9f9f9;
            border-radius: 8px;
            padding: 20px 30px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            font-size: 1rem;
            color: #333;
            position: relative;
            width: 100%;
            box-sizing: border-box;
        }

        .step-content h5 {
            margin-top: 0;
            font-weight: 600;
            font-size: 1.2rem;
            color: #555;
        }

        .step-content p {
            margin-bottom: 0;
            color: #666;
            line-height: 1.5;
        }

        .crud-buttons {
            margin-top: 15px;
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .crud-buttons a,
        .crud-buttons button {
            padding: 8px 16px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
            font-size: 0.9rem;
            transition: background-color 0.3s ease;
            cursor: pointer;
            display: inline-block;
            border: none;
            text-align: center;
        }

        .crud-buttons a {
            background-color: #facc15;
            color: #000;
        }

        .crud-buttons a:hover {
            background-color: #eab308;
            color: #000;
        }

        .crud-buttons button {
            background-color: #ef4444;
            color: #fff;
        }

        .crud-buttons button:hover {
            background-color: #dc2626;
        }

        .add-button {
            display: inline-block;
            margin-bottom: 20px;
            background-color: #22c55e;
            color: white;
            font-weight: bold;
            padding: 10px 20px;
            border-radius: 6px;
            text-decoration: none;
        }

        .add-button:hover {
            background-color: #16a34a;
        }
    </style>


    <div class="steps-container">
        @auth
            @if (Auth::user()->is_admin)
                <div class="">
                    <a href="{{ route('sejarah.create') }}" class="add-button">Tambah Sejarah</a>
                </div>
            @endif
        @endauth
        @foreach ($sejarahs as $index => $sejarah)
            <div class="step-item {{ $index % 2 == 0 ? 'left' : 'right' }}">
                <div class="step-number step-{{ ($index % 4) + 1 }}-number step-{{ ($index % 4) + 1 }}">
                    {{ str_pad($sejarah->tahun, 2, '0', STR_PAD_LEFT) }}
                </div>
                <div class="step-content">
                    <h5>{{ $sejarah->tahun }}</h5>
                    <p>{{ $sejarah->deskripsi }}</p>
                    @auth
                        @if (Auth::user()->is_admin)
                            <div class="crud-buttons">
                                <a href="{{ route('sejarah.edit', $sejarah->id) }}">Edit</a>
                                <form action="{{ route('sejarah.destroy', $sejarah->id) }}" method="POST"
                                    onsubmit="return confirm('Yakin ingin menghapus data ini?');" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Hapus</button>
                                </form>
                            </div>
                        @endif
                    @endauth
                </div>
            </div>
        @endforeach
    </div>
</x-guest-layout>
