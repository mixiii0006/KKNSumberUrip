<x-guest-layout>
    <style>
        .org-container {
            max-width: 1200px;
            margin: 40px auto;
            font-family: Arial, sans-serif;
            padding: 20px;
            box-sizing: border-box;
        }

        .org-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            box-sizing: border-box;
        }

        .org-description {
            flex: 1;
            background-color: #f9f9f9;
            border-radius: 12px;
            padding: 30px 40px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            font-size: 1rem;
            color: #333;
            position: relative;
            line-height: 1.5;
            margin-right: 20px;
        }

        .org-description h2 {
            font-weight: 700;
            margin-bottom: 15px;
        }

        .org-description::before {
            content: '';
            position: absolute;
            top: 40px;
            left: 20px;
            width: 12px;
            height: 12px;
            background-color: #4CAF50;
            border-radius: 50%;
        }

        .org-logo-container {
            width: 300px;
            height: 300px;
            background: linear-gradient(135deg, #2e7d32, #81c784);
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            color: white;
            font-weight: bold;
            font-size: 1.5rem;
            display: flex;
            justify-content: center;
            align-items: center;
            user-select: none;
            position: relative;
        }

        .org-nav-button {
            font-size: 2rem;
            color: #4CAF50;
            cursor: pointer;
            user-select: none;
            padding: 0 10px;
            transition: color 0.3s ease;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 10;
        }

        .org-nav-prev {
            left: -40px;
        }

        .org-nav-next {
            right: -40px;
        }

        .org-nav-button:hover {
            color: #388E3C;
        }

        .anggota-section {
            background-color: #f9f5f0;
            border-radius: 12px;
            padding: 20px 30px;
            box-sizing: border-box;
            position: relative;
        }

        .anggota-title {
            font-weight: 700;
            font-size: 1.2rem;
            margin-bottom: 20px;
            color: #333;
        }

        .member-list {
            display: flex;
            overflow-x: auto;
            gap: 15px;
            padding-bottom: 10px;
        }

        .member-card {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 2px 13px rgba(0, 0, 0, 0.15);
            text-align: left;
            padding: 15px;
            font-size: 0.9rem;
            width: 140px;
            flex-shrink: 0;
        }

        .member-photo {
            width: 100%;
            height: 110px;
            border-radius: 15px;
            object-fit: cover;
            background-color: #ccc;
            margin-bottom: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .member-name {
            font-weight: 700;
            color: #222;
            margin-bottom: 6px;
        }

        .member-desc {
            color: #555;
            font-size: 0.85rem;
            line-height: 1.2;
        }

        .crud-buttons {
            margin-top: 10px;
        }

        .crud-buttons a,
        .crud-buttons button {
            margin-right: 5px;
            font-size: 0.8rem;
            padding: 5px 10px;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
        }

        .btn-primary {
            background-color: #4CAF50;
            color: white;
            border: none;
        }

        .btn-warning {
            background-color: #FFC107;
            color: black;
            border: none;
        }

        .btn-danger {
            background-color: #F44336;
            color: white;
            border: none;
        }

        .btn-primary:hover {
            background-color: #45a049;
        }

        .btn-warning:hover {
            background-color: #e0a800;
        }

        .btn-danger:hover {
            background-color: #d32f2f;
        }

        @media (max-width: 600px) {
            .org-top {
                flex-direction: column;
            }

            .org-logo-container {
                margin-top: 20px;
                width: 100%;
                height: 200px;
                border-radius: 12px;
            }
        }

        .form-wrapper {
            max-width: 100%;
            background-color: #ffffff;
            padding: 30px;
            margin-top: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            font-family: Arial, sans-serif;
            margin-bottom: 30px;
        }

        h3 {
            font-size: 1.8rem;
            font-weight: 700;
            color: #348E38;
            margin-bottom: 20px;
            text-align: center;
        }

        label {
            font-weight: 600;
            margin-bottom: 0.5rem;
            display: block;
            color: #374151;
        }

        input[type="text"],
        input[type="file"],
        input[type="number"],
        select,
        textarea {
            width: 100%;
            padding: 0.5rem 0.75rem;
            border: 1px solid #d1d5db;
            border-radius: 0.375rem;
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.05);
            color: #374151;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        input:focus,
        select:focus,
        textarea:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.3);
            outline: none;
        }

        .btn-primary {
            background: linear-gradient(90deg, #2f7a2f, #348E38);
            border: none;
            color: white;
            font-weight: 600;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background 0.3s ease;
        }

        .btn-primary:hover {
            background: linear-gradient(90deg, #1f4f1f, #246624);
        }

        .text-red-600 {
            color: #e3342f;
        }

        .mt-1 {
            margin-top: 0.25rem;
        }

        .mb-4 {
            margin-bottom: 1rem;
        }

        .mt-4 {
            margin-top: 1rem;
        }

        .text-sm {
            font-size: 0.875rem;
        }

        .font-medium {
            font-weight: 500;
        }
    </style>

    <div class="org-container">
        @php
            $instansiKeys = $organisasiGrouped->keys()->toArray();
            $instansiData = $instansis
                ->mapWithKeys(function ($instansi) {
                    return [
                        $instansi->id => [
                            'name' => $instansi->name,
                            'description' => $instansi->description,
                            'photo' => $instansi->photo ? asset('storage/' . $instansi->photo) : null,
                        ],
                    ];
                })
                ->toArray();
            $currentIndex = 0;
        @endphp

        <script>
            let currentIndex = 0;
            let instansiKeys = @json($instansiKeys);
        </script>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const instansiEditBtn = document.getElementById('instansi-edit-btn');
                const orgPrevBtn = document.getElementById('org-prev');
                const orgNextBtn = document.getElementById('org-next');

                function updateEditLink(index) {
                    if (instansiEditBtn) {
                        instansiEditBtn.href = `/instansi/${instansiKeys[index]}/edit`;
                    }
                }

                orgPrevBtn.addEventListener('click', () => {
                    currentIndex = (currentIndex - 1 + instansiKeys.length) % instansiKeys.length;
                    updateEditLink(currentIndex);
                });

                orgNextBtn.addEventListener('click', () => {
                    currentIndex = (currentIndex + 1) % instansiKeys.length;
                    updateEditLink(currentIndex);
                });

                // Initialize edit link on page load
                updateEditLink(currentIndex);
            });
        </script>

        @auth
            @if (Auth::user()->is_admin)
            <div class="org-top d-flex justify-content-end">
                <div>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahOrganisasiModal">+
                        Tambah Instansi</button>
                </div>
            </div>
                <div class="form-wrapper">

                    <!-- Modal Tambah Instansi -->
                    <div class="modal fade" id="tambahOrganisasiModal" tabindex="-1"
                        aria-labelledby="tambahOrganisasiModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-xl">
                            <form method="POST" action="{{ route('instansi.store') }}" enctype="multipart/form-data"
                                class="w-100">
                                @csrf
                                <div class="modal-content p-3 shadow">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="tambahOrganisasiModalLabel">Tambah Instansi</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row g-4">
                                            <div class="col-md-6">
                                                <label for="name" class="form-label">Nama Instansi</label>
                                                <input id="name" name="name" type="text"
                                                    value="{{ old('name') }}" required class="form-control">
                                                @error('name')
                                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-md-6">
                                                <label for="photo" class="form-label">Foto Instansi</label>
                                                <input id="photo" name="photo" type="file" accept="image/*"
                                                    class="form-control">
                                                @error('photo')
                                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-12">
                                                <label for="description" class="form-label">Deskripsi</label>
                                                <textarea id="description" name="description" rows="4" class="form-control">{{ old('description') }}</textarea>
                                                @error('description')
                                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>



                    <!-- Form Tambah Anggota -->
                    <div class="d-flex justify-content-between align-items-center mb-0 pb-0">
                        <h5>Tambah Anggota Organisasi</h3>
                            <button class="btn border-0 bg-transparent p-0" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFormAnggota" aria-expanded="false"
                                aria-controls="collapseFormAnggota" title="Tampilkan/Sembunyikan Form">
                                <i class="bi bi-chevron-down fs-5"></i>
                            </button>


                    </div>
                    <div class="collapse" id="collapseFormAnggota">
                        <form method="POST" action="{{ route('organisasi.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-4">
                                <label for="nama">Nama</label>
                                <input id="nama" name="nama" type="text" value="{{ old('nama') }}" required>
                                @error('nama')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="instansi_id">Instansi</label>
                                <select id="instansi_id" name="instansi_id" required>
                                    <option value="">-- Pilih Instansi --</option>
                                    @foreach ($instansis ?? [] as $instansi)
                                        <option value="{{ $instansi->id }}"
                                            {{ old('instansi_id') == $instansi->id ? 'selected' : '' }}>
                                            {{ $instansi->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('instansi_id')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="jabatan">Jabatan</label>
                                <input id="jabatan" name="jabatan" type="text" value="{{ old('jabatan') }}" required>
                                @error('jabatan')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="nip">NIP</label>
                                <input id="nip" name="nip" type="text" value="{{ old('nip') }}">
                                @error('nip')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="photo">Foto Anggota</label>
                                <input id="photo" name="photo" type="file" accept="image/*">
                                @error('photo')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mt-4">
                                <button type="submit" class="btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>

                </div>

            @endif
        @endauth

        @if (count($instansiKeys) > 0)
            <div class="org-top"
                style="position: relative; display: flex; align-items: center; justify-content: flex-start; gap: 20px;">
                <button class="org-nav-button org-nav-prev" id="org-prev"
                    style="border: 1px solid #4CAF50; color: #4CAF50; font-weight: bold; font-size: 1.5rem; width: 40px; height: 40px; border-radius: 5px; margin-right: 10px; z-index: 20; position: relative;">&#10094;</button>
                <div class="org-description" id="org-description"
                    style="flex: 1; position: relative; padding-left: 50px; padding-right: 50px;">
                    <h2 id="instansi-name"></h2>
                    <div id="instansi-description" style="margin-top: 10px;"></div>
                    @auth
                        <div id="instansi-admin-actions" style="margin-top: 10px;">
                            @auth
                                @if (auth()->user()->is_admin)
                                    <a href="#" id="instansi-edit-btn" class="btn btn-warning mr-2">Edit</a>
                                @endif
                            @endauth
                        </div>
                    @endauth
                </div>

                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const instansiKeys = @json($instansiKeys);
                        const instansiData = @json($instansiData);
                        let currentIndex = 0;

                        function renderOrg(index) {
                            if (!instansiKeys || instansiKeys.length === 0) {
                                // No instansi keys available, skip rendering
                                return;
                            }
                            if (index < 0 || index >= instansiKeys.length) {
                                // Index out of bounds, skip rendering
                                return;
                            }
                            const instansiId = instansiKeys[index];
                            const instansi = instansiData[instansiId];
                            const anggota = @json($organisasiGrouped);

                            if (!instansi || typeof instansi === 'undefined' || instansi === null) {
                                // If instansi data is undefined or null, skip rendering
                                console.warn('Instansi data undefined for index:', index, 'instansiId:', instansiId);
                                // Try to find a valid instansi to render instead
                                for (let i = 0; i < instansiKeys.length; i++) {
                                    const altInstansi = instansiData[instansiKeys[i]];
                                    if (altInstansi && altInstansi.name) {
                                        currentIndex = i;
                                        renderOrg(i);
                                        updateEditLink(i);
                                        return;
                                    }
                                }
                                return;
                            }

                            // Update instansi name and description
                            document.getElementById('instansi-name').textContent = instansi.name;
                            document.getElementById('instansi-description').textContent = instansi.description ||
                                'Deskripsi tidak tersedia.';

                            // Update instansi photo or placeholder
                            const instansiPhotoElem = document.getElementById('instansi-photo');
                            const instansiPhotoPlaceholder = document.getElementById('instansi-photo-placeholder');
                            if (instansi.photo) {
                                instansiPhotoElem.src = instansi.photo;
                                instansiPhotoElem.style.display = 'block';
                                instansiPhotoPlaceholder.style.display = 'none';
                            } else {
                                instansiPhotoElem.style.display = 'none';
                                instansiPhotoPlaceholder.style.display = 'flex';
                                instansiPhotoPlaceholder.textContent = instansi.name.charAt(0).toUpperCase();
                            }

                            // Clear member list
                            const memberList = document.getElementById('member-list');
                            memberList.innerHTML = '';

                            // Add anggota cards
                            const anggotaList = anggota[instansiId] || [];

                            if (anggotaList.length === 0) {
                                const emptyMsg = document.createElement('div');
                                emptyMsg.className = 'text-muted';
                                emptyMsg.textContent = 'Belum ada anggota untuk instansi ini.';
                                memberList.appendChild(emptyMsg);
                            } else {
                                anggotaList.forEach(member => {
                                        if (!member.nama) return;

                                        const card = document.createElement('div');
                                        card.className = 'member-card';

                                        const photo = document.createElement('img');
                                        photo.className = 'member-photo';
                                        photo.alt = member.nama;
                                        if (member.photo) {
                                            photo.src = member.photo.startsWith('http') ? member.photo :
                                                `/storage/${member.photo}`;
                                        } else {
                                            photo.src = 'https://via.placeholder.com/140x110?text=No+Photo';
                                        }
                                        card.appendChild(photo);

                                        const name = document.createElement('div');
                                        name.className = 'member-name';
                                        name.textContent = member.nama;
                                        card.appendChild(name);

                                        const desc = document.createElement('div');
                                        desc.className = 'member-desc';
                                        desc.innerHTML = `Jabatan: ${member.jabatan}<br>NIP: ${member.nip || '-'}`;
                                        card.appendChild(desc);

                                        @auth
                                        @if (auth()->user()->is_admin)
                                            const crudDiv = document.createElement('div');
                                            crudDiv.className = 'crud-buttons';

                                            const editLink = document.createElement('a');
                                            editLink.href = `/organisasi/${member.id}/edit`;
                                            editLink.className = 'btn btn-warning';
                                            editLink.textContent = 'Edit';
                                            crudDiv.appendChild(editLink);

                                            const deleteForm = document.createElement('form');
                                            deleteForm.action = `/organisasi/${member.id}`;
                                            deleteForm.method = 'POST';
                                            deleteForm.style.display = 'inline';

                                            const csrfInput = document.createElement('input');
                                            csrfInput.type = 'hidden';
                                            csrfInput.name = '_token';
                                            csrfInput.value = '{{ csrf_token() }}';
                                            deleteForm.appendChild(csrfInput);

                                            const methodInput = document.createElement('input');
                                            methodInput.type = 'hidden';
                                            methodInput.name = '_method';
                                            methodInput.value = 'DELETE';
                                            deleteForm.appendChild(methodInput);

                                            const deleteButton = document.createElement('button');
                                            deleteButton.type = 'submit';
                                            deleteButton.className = 'btn btn-danger';
                                            deleteButton.textContent = 'Hapus';
                                            deleteButton.onclick = function() {
                                                return confirm('Yakin ingin menghapus anggota ini?');
                                            };
                                            deleteForm.appendChild(deleteButton);

                                            crudDiv.appendChild(deleteForm);
                                            card.appendChild(crudDiv);
                                        @endif
                                    @endauth

                                    memberList.appendChild(card);
                                });
                        }

                    }

                    // Navigation buttons
                    document.getElementById('org-prev').addEventListener('click', () => {
                        currentIndex = (currentIndex - 1 + instansiKeys.length) % instansiKeys.length;
                        renderOrg(currentIndex);
                        updateEditLink(currentIndex);
                    });

                    document.getElementById('org-next').addEventListener('click', () => {
                        currentIndex = (currentIndex + 1) % instansiKeys.length;
                        renderOrg(currentIndex);
                        updateEditLink(currentIndex);
                    });

                    // Update edit link
                    const instansiEditBtn = document.getElementById('instansi-edit-btn');

                    function updateEditLink(index) {
                        if (instansiEditBtn) {
                            instansiEditBtn.href = `/instansi/${instansiKeys[index]}/edit`;
                        }
                    }

                    // Initial render
                    renderOrg(currentIndex); updateEditLink(currentIndex);
                    });
                </script>
                <div class="org-logo-container" id="org-logo"
                    style="width: 300px; height: 300px; position: relative;">
                    <img id="instansi-photo" src="" alt=""
                        style="width: 100%; height: 100%; border-radius: 12px; object-fit: cover; display: none;" />
                    <div id="instansi-photo-placeholder"
                        style="color: white; font-weight: bold; font-size: 1.5rem; display: flex; justify-content: center; align-items: center; height: 100%; border-radius: 12px; background: linear-gradient(135deg, #2e7d32, #81c784);">
                    </div>
                </div>
                <button class="org-nav-button org-nav-next" id="org-next"
                    style="border: 1px solid #4CAF50; color: #4CAF50; font-weight: bold; font-size: 1.5rem; width: 40px; height: 40px; border-radius: 5px; margin-left: 10px; z-index: 20; position: relative;">&#10095;</button>
            </div>

            <div class="anggota-section">
                <div class="anggota-title">Anggota</div>
                <button class="org-nav-button org-nav-prev" id="member-prev"
                    style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); z-index: 10;border: 1px solid #4CAF50;font-weight: bold; font-size: 1.5rem; color: #4CAF50;  border-radius: 5px; width: 40px; height: 40px; ">&#10094;</button>
                <div class="member-list" id="member-list" style="scroll-behavior: smooth; margin: 0 40px;">
                    <!-- Member cards will be rendered dynamically -->
                </div>
                <button class="org-nav-button org-nav-next" id="member-next"
                    style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); z-index: 10; border: 1px solid #4CAF50;font-weight: bold; font-size: 1.5rem; color: #4CAF50;  border-radius: 5px; width: 40px; height: 40px; ">&#10095;</button>
            </div>
        @else
            <p>Tidak ada data organisasi yang tersedia.</p>
        @endif

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const instansiKeys = @json($instansiKeys);
            const instansiData = @json($instansiData);
            console.log('instansiKeys:', instansiKeys);
            console.log('instansiData:', instansiData);
            const organisasiGrouped = @json($organisasiGrouped);
            console.log('organisasiGrouped:', organisasiGrouped);
            let currentIndex = 0;

            const orgDescription = document.getElementById('org-description');
            const orgLogo = document.getElementById('org-logo');
            const instansiNameElem = document.getElementById('instansi-name');
            const instansiDescriptionElem = document.getElementById('instansi-description');
            const instansiPhotoElem = document.getElementById('instansi-photo');
            const instansiPhotoPlaceholder = document.getElementById('instansi-photo-placeholder');
            const memberList = document.getElementById('member-list');
            const prevBtn = document.getElementById('org-prev');
            const nextBtn = document.getElementById('org-next');
            const orgContainer = document.querySelector('.org-container');

            function renderOrg(index) {
                const instansiId = instansiKeys[index];
                const instansi = instansiData[instansiId];
                const anggota = organisasiGrouped;

                console.log('Rendering instansi:', instansi);
                console.log('Rendering anggota:', anggota[instansiId]);

                // Update instansi name and description
                instansiNameElem.textContent = instansi.name;
                instansiDescriptionElem.textContent = instansi.description || 'Deskripsi tidak tersedia.';

                // Update instansi photo or placeholder
                if (instansi.photo) {
                    instansiPhotoElem.src = instansi.photo;
                    instansiPhotoElem.style.display = 'block';
                    instansiPhotoPlaceholder.style.display = 'none';
                } else {
                    instansiPhotoElem.style.display = 'none';
                    instansiPhotoPlaceholder.style.display = 'flex';
                    instansiPhotoPlaceholder.textContent = instansi.name.charAt(0).toUpperCase();
                }

                // Clear member list
                memberList.innerHTML = '';

                // Add anggota cards
                anggota[instansiId].forEach(member => {
                        const card = document.createElement('div');
                        card.className = 'member-card';

                        const photo = document.createElement('img');
                        photo.className = 'member-photo';
                        photo.alt = member.nama;
                        if (member.photo) {
                            photo.src = `/storage/${member.photo}`;
                        } else {
                            photo.src = 'https://via.placeholder.com/140x110?text=No+Photo';
                        }
                        card.appendChild(photo);

                        const name = document.createElement('div');
                        name.className = 'member-name';
                        name.textContent = member.nama;
                        card.appendChild(name);

                        const desc = document.createElement('div');
                        desc.className = 'member-desc';
                        desc.innerHTML = `Jabatan: ${member.jabatan}<br>NIP: ${member.nip || '-'}`;
                        card.appendChild(desc);

                        @auth
                        @if (auth()->user()->is_admin)
                            const crudDiv = document.createElement('div');
                            crudDiv.className = 'crud-buttons';

                            const editLink = document.createElement('a');
                            editLink.href = `/organisasi/${member.id}/edit`;
                            editLink.className = 'btn btn-warning';
                            editLink.textContent = 'Edit';
                            crudDiv.appendChild(editLink);

                            const deleteForm = document.createElement('form');
                            deleteForm.action = `/organisasi/${member.id}`;
                            deleteForm.method = 'POST';
                            deleteForm.style.display = 'inline';

                            const csrfInput = document.createElement('input');
                            csrfInput.type = 'hidden';
                            csrfInput.name = '_token';
                            csrfInput.value = '{{ csrf_token() }}';
                            deleteForm.appendChild(csrfInput);

                            const methodInput = document.createElement('input');
                            methodInput.type = 'hidden';
                            methodInput.name = '_method';
                            methodInput.value = 'DELETE';
                            deleteForm.appendChild(methodInput);

                            const deleteButton = document.createElement('button');
                            deleteButton.type = 'submit';
                            deleteButton.className = 'btn btn-danger';
                            deleteButton.textContent = 'Hapus';
                            deleteButton.onclick = function() {
                                return confirm('Yakin ingin menghapus anggota ini?');
                            };
                            deleteForm.appendChild(deleteButton);

                            crudDiv.appendChild(deleteForm);
                            card.appendChild(crudDiv);
                        @endif
                    @endauth

                    memberList.appendChild(card);
                });
        }

        prevBtn.addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + instansiKeys.length) % instansiKeys.length;
            renderOrg(currentIndex);
        });

        nextBtn.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % instansiKeys.length;
            renderOrg(currentIndex);
        });

        const memberPrevBtn = document.getElementById('member-prev');
        const memberNextBtn = document.getElementById('member-next');

        memberPrevBtn.addEventListener('click', () => {
            memberList.scrollBy({
                left: -150,
                behavior: 'smooth'
            });
        });

        memberNextBtn.addEventListener('click', () => {
            memberList.scrollBy({
                left: 150,
                behavior: 'smooth'
            });
        });

        // Swipe detection variables
        let startX = 0;
        let isDragging = false;

        orgContainer.addEventListener('touchstart', (e) => {
            startX = e.touches[0].clientX;
            isDragging = true;
        });

        orgContainer.addEventListener('touchmove', (e) => {
            if (!isDragging) return;
            const currentX = e.touches[0].clientX;
            const diffX = currentX - startX;

            // Threshold for swipe
            if (Math.abs(diffX) > 50) {
                if (diffX > 0) {
                    // Swipe right - previous instansi
                    currentIndex = (currentIndex - 1 + instansiKeys.length) % instansiKeys.length;
                } else {
                    // Swipe left - next instansi
                    currentIndex = (currentIndex + 1) % instansiKeys.length;
                }
                renderOrg(currentIndex);
                isDragging = false;
            }
        });

        orgContainer.addEventListener('touchend', () => {
            isDragging = false;
        });

        // Mouse drag support for desktop
        orgContainer.addEventListener('mousedown', (e) => {
            startX = e.clientX;
            isDragging = true;
        });

        orgContainer.addEventListener('mousemove', (e) => {
            if (!isDragging) return;
            const currentX = e.clientX;
            const diffX = currentX - startX;

            if (Math.abs(diffX) > 50) {
                if (diffX > 0) {
                    currentIndex = (currentIndex - 1 + instansiKeys.length) % instansiKeys.length;
                } else {
                    currentIndex = (currentIndex + 1) % instansiKeys.length;
                }
                renderOrg(currentIndex);
                isDragging = false;
            }
        });

        orgContainer.addEventListener('mouseup', () => {
            isDragging = false;
        });

        orgContainer.addEventListener('mouseleave', () => {
            isDragging = false;
        });

        renderOrg(currentIndex);
        });
    </script>
</x-guest-layout>
