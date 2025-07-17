<x-guest-layout>
    <style>
        .steps-container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
            display: grid;
            grid-template-columns: 150px 1fr 150px;
            grid-gap: 20px 40px;
            align-items: stretch;
            font-family: Arial, sans-serif;
            justify-content: center;
        }
        .step-number {
            background-color: #d9534f;
            color: white;
            font-size: 2.5rem;
            font-weight: bold;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            user-select: none;
            line-height: 1.1;
            white-space: nowrap;
            width: 150px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .step-number.step-2 {
            background-color: #337ab7;
            width: 150px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .step-number.step-3 {
            background-color: #f0ad4e;
            width: 150px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .step-number.step-4 {
            background-color: #5cb85c;
            width: 150px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .step-content {
            background-color: #f9f9f9;
            border-radius: 8px;
            padding: 20px 30px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
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
            line-height: 1.4;
        }
        .step-icon {
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 1.2rem;
            color: #999;
        }
        /* Grid placement for steps */
        @for ($i = 0; $i < count($sejarahs); $i++)
            .step-{{ $i + 1 }}-number {
                grid-column: {{ $i % 2 == 0 ? 1 : 3 }};
                grid-row: {{ floor($i / 2) + 1 }};
            }
            .step-{{ $i + 1 }}-content {
                grid-column: 2 / 4;
                grid-row: {{ floor($i / 2) + 1 }};
            }
        @endfor
        .crud-buttons {
            margin-top: 10px;
        }
        .crud-buttons a, .crud-buttons form {
            display: inline-block;
            margin-right: 10px;
        }
        .crud-buttons a {
            color: #2563eb;
            text-decoration: underline;
        }
        .crud-buttons button {
            background: none;
            border: none;
            color: #dc2626;
            cursor: pointer;
            padding: 0;
            font: inherit;
            text-decoration: underline;
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
            align-items: center;
            gap: 20px;
        }
        .step-item.left {
            flex-direction: row;
        }
        .step-item.right {
            flex-direction: row-reverse;
        }
        .step-number {
            background-color: #d9534f;
            color: white;
            font-size: 2.5rem;
            font-weight: bold;
            border-radius: 8px;
            padding: 20px;
            width: 150px;
            display: flex;
            align-items: stretch;
            justify-content: center;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            user-select: none;
            line-height: 1.1;
            white-space: nowrap;
            height: 100%;
            min-height: unset;
            min-height: fit-content;
        }
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
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            font-size: 1rem;
            color: #333;
            position: relative;
            width: 100%;
            box-sizing: border-box;
        }
    </style>    

    @auth
        @if(Auth::user()->is_admin)
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-right">
                <a href="{{ route('sejarah.create') }}" class="add-button">Tambah Sejarah</a>
            </div>
        @endif
    @endauth

    <div class="steps-container">
        @foreach($sejarahs as $index => $sejarah)
            <div class="step-item {{ $index % 2 == 0 ? 'left' : 'right' }}">
                <div class="step-number step-{{ ($index % 4) + 1 }}-number step-{{ ($index % 4) + 1 }}">
                    {{ str_pad($sejarah->tahun, 2, '0', STR_PAD_LEFT) }}
                </div>
                <div class="step-content">
                    <h5>{{ $sejarah->tahun }}</h5>
                    <p>{{ $sejarah->deskripsi }}</p>
                    @auth
                        @if(Auth::user()->is_admin)
                            <div class="crud-buttons">
                                <a href="{{ route('sejarah.edit', $sejarah->id) }}">Edit</a>
                                <form action="{{ route('sejarah.destroy', $sejarah->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?');" style="display:inline;">
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
