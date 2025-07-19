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
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
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
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
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
            box-shadow: 0 2px 13px rgba(0,0,0,0.15);
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
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
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

        .crud-buttons a, .crud-buttons button {
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
    </style>

    <div class="org-container">
        @php
            $instansiKeys = $organisasiGrouped->keys()->toArray();
            $currentIndex = 0;
        @endphp

        @auth
            @if(Auth::user()->is_admin)
                <div class="add-anggota-form" style="margin-bottom: 30px; padding: 20px; border: 1px solid #ccc; border-radius: 8px;">
                    <h3>Tambah Anggota Organisasi</h3>
                    <form method="POST" action="{{ route('organisasi.store') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="nama" class="block font-medium text-sm text-gray-700">Nama</label>
                            <input id="nama" name="nama" type="text" value="{{ old('nama') }}" required class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" />
                            @error('nama')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="instansi" class="block font-medium text-sm text-gray-700">Instansi</label>
                            <select id="instansi" name="instansi" required class="block mt-1 w-full border-gray-300 rounded-md shadow-sm">
                                <option value="perangkat" {{ old('instansi') == 'perangkat' ? 'selected' : '' }}>Perangkat</option>
                                <option value="pokdarwis" {{ old('instansi') == 'pokdarwis' ? 'selected' : '' }}>Pokdarwis</option>
                                <option value="bpd" {{ old('instansi') == 'bpd' ? 'selected' : '' }}>BPD</option>
                                <option value="bumdes" {{ old('instansi') == 'bumdes' ? 'selected' : '' }}>BUMDes</option>
                                <option value="bma" {{ old('instansi') == 'bma' ? 'selected' : '' }}>BMA</option>
                            </select>
                            @error('instansi')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="jabatan" class="block font-medium text-sm text-gray-700">Jabatan</label>
                            <input id="jabatan" name="jabatan" type="text" value="{{ old('jabatan') }}" required class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" />
                            @error('jabatan')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="nip" class="block font-medium text-sm text-gray-700">NIP</label>
                            <input id="nip" name="nip" type="text" value="{{ old('nip') }}" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" />
                            @error('nip')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <button type="submit" class="btn btn-primary px-4 py-2 rounded">Simpan</button>
                        </div>
                    </form>
                </div>
            @endif
        @endauth

        @if(count($instansiKeys) > 0)
            <div class="org-top" style="position: relative; display: flex; align-items: center; justify-content: flex-start; gap: 20px;">
                <button class="org-nav-button org-nav-prev" id="org-prev" style="border: 1px solid #4CAF50; color: #4CAF50; font-weight: bold; font-size: 1.5rem; width: 40px; height: 40px; border-radius: 5px; margin-right: 10px; z-index: 20; position: relative;">&#10094;</button>
                <div class="org-description" id="org-description" style="flex: 1; position: relative; padding-left: 50px; padding-right: 50px;">
                    <h2>{{ strtoupper($instansiKeys[$currentIndex]) }}</h2>
                    <p>Deskripsi untuk instansi {{ $instansiKeys[$currentIndex] }} akan ditampilkan di sini.</p>
                </div>
                <div class="org-logo-container" id="org-logo" style="width: 300px; height: 300px;">
                    LOGO {{ strtoupper($instansiKeys[$currentIndex]) }}
                </div>
                <button class="org-nav-button org-nav-next" id="org-next" style="border: 1px solid #4CAF50; color: #4CAF50; font-weight: bold; font-size: 1.5rem; width: 40px; height: 40px; border-radius: 5px; margin-left: 10px; z-index: 20; position: relative;">&#10095;</button>
            </div>

            <div class="anggota-section">
                <div class="anggota-title">Anggota</div>
                <button class="org-nav-button org-nav-prev" id="member-prev" style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); z-index: 10;">&#10094;</button>
                <div class="member-list" id="member-list" style="scroll-behavior: smooth; margin: 0 40px;">
                    @foreach ($organisasiGrouped[$instansiKeys[$currentIndex]] as $anggota)
                        <div class="member-card">
                            <div class="member-photo"></div>
                            <div class="member-name">{{ $anggota->nama }}</div>
                            <div class="member-desc">
                                Jabatan: {{ $anggota->jabatan }}<br>
                                NIP: {{ $anggota->nip ?? '-' }}
                            </div>
                            @auth
                                @if(auth()->user()->is_admin)
                                    <div class="crud-buttons">
                                        <a href="{{ route('organisasi.edit', ['organisasi' => $anggota->id]) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('organisasi.destroy', ['organisasi' => $anggota->id]) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus anggota ini?')">Hapus</button>
                                        </form>
                                    </div>
                                @endif
                            @endauth
                        </div>
                    @endforeach
                </div>
                <button class="org-nav-button org-nav-next" id="member-next" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); z-index: 10;">&#10095;</button>
            </div>
        @else
            <p>Tidak ada data organisasi yang tersedia.</p>
        @endif
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const instansiKeys = @json($instansiKeys);
            let currentIndex = 0;

            const orgDescription = document.getElementById('org-description');
            const orgLogo = document.getElementById('org-logo');
            const memberList = document.getElementById('member-list');
            const prevBtn = document.getElementById('org-prev');
            const nextBtn = document.getElementById('org-next');
            const orgContainer = document.querySelector('.org-container');

            function renderOrg(index) {
                const instansi = instansiKeys[index];
                const anggota = @json($organisasiGrouped);

                // Update description and logo
                orgDescription.querySelector('h2').textContent = instansi.toUpperCase();
                orgDescription.querySelector('p').textContent = `Deskripsi untuk instansi ${instansi} akan ditampilkan di sini.`;
                orgLogo.textContent = `LOGO ${instansi.toUpperCase()}`;

                // Clear member list
                memberList.innerHTML = '';

                // Add anggota cards
                anggota[instansi].forEach(member => {
                    const card = document.createElement('div');
                    card.className = 'member-card';

                    const photo = document.createElement('div');
                    photo.className = 'member-photo';
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
                        @if(auth()->user()->is_admin)
                            const crudDiv = document.createElement('div');
                            crudDiv.className = 'crud-buttons';

                            const editLink = document.createElement('a');
                            editLink.href = `{{ url('organisasi') }}/${member.id}/edit`;
                            editLink.className = 'btn btn-warning';
                            editLink.textContent = 'Edit';
                            crudDiv.appendChild(editLink);

                            const deleteForm = document.createElement('form');
                            deleteForm.action = `{{ url('organisasi') }}/${member.id}`;
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
                memberList.scrollBy({ left: -150, behavior: 'smooth' });
            });

            memberNextBtn.addEventListener('click', () => {
                memberList.scrollBy({ left: 150, behavior: 'smooth' });
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
