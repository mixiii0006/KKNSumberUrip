<x-guest-layout>
    @include('artikels.css')
    <div class="max-w-4xl mx-auto py-10">
        <h2 class="text-2xl font-semibold mb-6">Edit Artikel</h2>

        <form id="edit-article-form" method="POST" action="{{ route('artikels.update', $artikel->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="judul" class="block font-medium text-sm text-gray-700">Judul</label>
                <input type="text" name="judul" id="judul" value="{{ old('judul', $artikel->judul) }}" class="form-input rounded-md shadow-sm mt-1 block w-full" required>
            </div>

            <div class="mb-4">
                <label for="isi" class="block font-medium text-sm text-gray-700">Isi</label>
                <textarea name="isi" id="isi" rows="6" class="form-textarea rounded-md shadow-sm mt-1 block w-full" required>{{ old('isi', $artikel->isi) }}</textarea>
            </div>

            <div class="mb-4">
                <label for="penulis" class="block font-medium text-sm text-gray-700">Penulis</label>
                <input type="text" name="penulis" id="penulis" value="{{ old('penulis', $artikel->penulis) }}" class="form-input rounded-md shadow-sm mt-1 block w-full">
            </div>

            <div class="mb-4">
                <label for="tanggal_publish" class="block font-medium text-sm text-gray-700">Tanggal Publish</label>
                <input type="date" name="tanggal_publish" id="tanggal_publish" value="{{ old('tanggal_publish', $artikel->tanggal_publish->format('Y-m-d')) }}" class="form-input rounded-md shadow-sm mt-1 block w-full" required>
            </div>

            <div class="mb-4">
                <label for="gambar" class="block font-medium text-sm text-gray-700">Gambar</label>
                <input type="file" name="gambar" id="gambar" accept="image/*" class="form-input rounded-md shadow-sm mt-1 block w-full">
                @if($artikel->gambar)
                    <img src="{{ asset('storage/' . $artikel->gambar) }}" alt="Gambar Artikel" class="mt-2 max-h-48 rounded">
                @endif
            </div>

            <div class="flex items-center justify-end">
                <a href="{{ route('artikels.index') }}" class="btn btn-secondary mr-4">Batal</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>

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
                if(data.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: data.message,
                    }).then(() => {
                        window.location.href = "{{ route('artikels.index') }}";
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
