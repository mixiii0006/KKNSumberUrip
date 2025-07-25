<x-guest-layout>
    @include('artikels.css')
    <div class="max-w-4xl mx-auto py-10 px-4 sm:px-6 lg:px-8 bg-white rounded shadow-md">
        <h2 class="text-2xl font-semibold mb-6">Edit Artikel</h2>

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
        <form id="edit-article-form" method="POST" action="{{ route('artikels.update', $artikel->id) }}"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="judul" class="block font-medium text-sm text-gray-700">Judul</label>
                <input type="text" name="judul" id="judul" value="{{ old('judul', $artikel->judul) }}"
                    class="form-control mt-1 w-full" required>
            </div>

            <div class="mb-4">
                <label for="isi" class="block font-medium text-sm text-gray-700">Isi</label>
                <textarea name="isi" id="isi" rows="10" class="form-control mt-1 w-full" style="display: none;">{{ old('isi', $artikel->isi) }}</textarea>
                <div id="editor">{!! old('isi') !!}</div>

                {{-- <textarea name="isi" id="isi" rows="10" class="form-control mt-1 w-full" required>{{ old('isi') }}</textarea> --}}
            </div>

            {{-- Penulis --}}
            <div class="mb-4">
                <label for="penulis" class="block font-medium text-sm text-gray-700">Penulis (opsional)</label>
                <input type="text" name="penulis" id="penulis" value="{{ old('penulis', $artikel->penulis) }}"
                    class="form-control mt-1 w-full" placeholder="Kosongkan jika ingin 'Admin'">
            </div>

            {{-- Tanggal --}}
            <div class="mb-4">
                <label for="tanggal_publish" class="block font-medium text-sm text-gray-700">Tanggal Publish
                    (opsional)</label>
                <input type="date" name="tanggal_publish" id="tanggal_publish"
                    value="{{ old('tanggal_publish', $artikel->tanggal_publish) }}" class="form-control mt-1 w-full">
            </div>


            <div class="flex justify-end gap-3 mt-6">
                <a href="{{ route('welcome') }}"
                    class="bg-green-900 hover:bg-green-300 text-gray-700 px-4 py-2 rounded">Batal</a>
                <button type="submit"
                    style="background-color: #1f412b; " class="bg-green-900 hover:bg-green-700 text-white px-4 py-2 rounded">Perbarui</button>
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


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.getElementById('edit-article-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const form = this;
            const formData = new FormData(form);

            fetch(form.action, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            text: data.message,
                        }).then(() => {
                            window.location.href = data.redirect_url;
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal',
                            text: data.message || 'Terjadi kesalahan',
                        });
                    }
                })
                .catch(() => {
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal',
                        text: 'Terjadi kesalahan jaringan',
                    });
                });
        });
    </script>


</x-guest-layout>
