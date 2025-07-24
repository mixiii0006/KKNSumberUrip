<x-guest-layout>
    <div class="max-w-4xl mx-auto py-10 px-4 sm:px-6 lg:px-8 bg-white rounded shadow-md">
        <h2 class="text-2xl font-semibold mb-6">Tambah Artikel Baru</h2>

        {{-- Notifikasi --}}
        @if (session('success'))
            <div class="mb-6 p-4 bg-green-100 text-green-700 rounded">{{ session('success') }}</div>
        @endif

        @if (session('error'))
            <div class="mb-6 p-4 bg-red-100 text-red-700 rounded">{{ session('error') }}</div>
        @endif

        @if ($errors->any())
            <div class="mb-6 p-4 bg-red-100 text-red-700 rounded">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Form --}}
        <form method="POST" action="{{ route('artikels.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label for="judul" class="block font-medium text-sm text-gray-700">Judul</label>
                <input type="text" name="judul" id="judul" value="{{ old('judul') }}"
                    class="form-control mt-1 w-full" required>
            </div>

            <div class="mb-4">
                <label for="isi" class="block font-medium text-sm text-gray-700">Isi</label>
                <textarea name="isi" id="isi" rows="10" class="form-control mt-1 w-full" style="display: none;">{{ old('isi') }}</textarea>
                <div id="editor">{!! old('isi') !!}</div>

                {{-- <textarea name="isi" id="isi" rows="10" class="form-control mt-1 w-full" required>{{ old('isi') }}</textarea> --}}
            </div>

            {{-- Penulis --}}
            <div class="mb-4">
                <label for="penulis" class="block font-medium text-sm text-gray-700">Penulis (opsional)</label>
                <input type="text" name="penulis" id="penulis" value="{{ old('penulis') }}"
                    class="form-control mt-1 w-full" placeholder="Kosongkan jika ingin 'Admin'">
            </div>

            {{-- Tanggal --}}
            <div class="mb-4">
                <label for="tanggal_publish" class="block font-medium text-sm text-gray-700">Tanggal Publish
                    (opsional)</label>
                <input type="date" name="tanggal_publish" id="tanggal_publish" value="{{ old('tanggal_publish') }}"
                    class="form-control mt-1 w-full">
            </div>

            {{-- <div class="mb-4">
                <label for="tanggal_publish" class="block font-medium text-sm text-gray-700">Tanggal Publish</label>
                <input type="date" name="tanggal_publish" id="tanggal_publish" value="{{ old('tanggal_publish') }}"
                    class="form-control mt-1 w-full" required>
            </div>

            <div class="mb-4">
                <label for="gambar" class="block font-medium text-sm text-gray-700">Gambar Utama</label>
                <input type="file" name="gambar" id="gambar" class="form-control mt-1 w-full" accept="image/*">
            </div> --}}

            <div class="flex justify-end gap-3 mt-6">
                <a href="{{ route('welcome') }}"
                    class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-4 py-2 rounded">Batal</a>
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Simpan</button>
            </div>
        </form>
    </div>

    {{-- CKEditor --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#isi'), {
                ckfinder: {
                    uploadUrl: '{{ route('ckeditor.upload') . '?_token=' . csrf_token() }}'
                }
            })
            .then(editor => {
                window.editor = editor;
            })
            .catch(error => {
                console.error(error);
            });

        document.querySelector('form').addEventListener('submit', function(e) {
            document.querySelector('#isi').value = window.editor.getData();
        });
    </script>


</x-guest-layout>
