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
    </style>

    <div class="org-container">
        @php
            $instansiKeys = $organisasiGrouped->keys()->toArray();
            $currentIndex = 0;
        @endphp

        <div>
            <p>Debug: Authenticated? {{ auth()->check() ? 'Yes' : 'No' }}</p>
            <p>Debug: is_admin? {{ auth()->check() ? (auth()->user()->is_admin ? 'Yes' : 'No') : 'N/A' }}</p>
        </div>

        <div class="org-top">
            <div class="org-title">Struktur Organisasi</div>
            <div>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahOrganisasiModal">+ Tambah
                    Organisasi</button>
            </div>
        </div>


        {{-- <div class="org-top">
            <button class="org-nav-button org-nav-prev" id="org-prev">&#10094;</button>
            <div class="org-description" id="org-description">
                <h2>{{ strtoupper($instansiKeys[$currentIndex] ?? '') }}</h2>
                <p>Deskripsi untuk instansi {{ $instansiKeys[$currentIndex] ?? '' }} akan ditampilkan di sini.</p>
                @auth
                    @if (Auth::user()->is_admin)
                        <a href="{{ route('organisasi.create') }}" class="add-button">Tambah Anggota</a>
                    @endif
                @endauth
            </div>
            <div class="org-logo-container" id="org-logo">
                LOGO {{ strtoupper($instansiKeys[$currentIndex] ?? '') }}
            </div>
            <button class="org-nav-button org-nav-next" id="org-next">&#10095;</button>
        </div> --}}

        <div class="anggota-section">
            <div class="anggota-title">Anggota</div>
            <div class="member-list" id="member-list">
                {{-- @forelse ($organisasiGrouped[$instansiKeys[$currentIndex]] as $anggota) --}}
                @forelse ($organisasiGrouped[$instansiKeys[$currentIndex]] ?? [] as $anggota)
                    <div class="member-card">
                        <div class="member-photo"></div>
                        <div class="member-name">{{ $anggota->nama }}</div>
                        <div class="member-desc">
                            Jabatan: {{ $anggota->jabatan }}<br>
                            NIP: {{ $anggota->nip ?? '-' }}
                        </div>
                        @auth
                            @if (auth()->user()->is_admin)
                                <div class="crud-buttons">
                                    <a href="{{ route('organisasi.edit', ['organisasi' => $anggota->id]) }}"
                                        class="btn btn-warning">Edit</a>
                                    <form action="{{ route('organisasi.destroy', ['organisasi' => $anggota->id]) }}"
                                        method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Yakin ingin menghapus anggota ini?')">Hapus</button>
                                    </form>
                                </div>
                            @endif
                        @endauth
                    </div>
                @empty
                    <div class="text-muted">Belum ada anggota untuk instansi ini.</div>
                @endforelse
            </div>
        </div>
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

            function renderOrg(index) {
                const instansi = instansiKeys[index];
                const anggota = @json($organisasiGrouped);

                // Update description and logo
                orgDescription.querySelector('h2').textContent = instansi.toUpperCase();
                orgDescription.querySelector('p').textContent =
                    `Deskripsi untuk instansi ${instansi} akan ditampilkan di sini.`;
                orgLogo.textContent = `LOGO ${instansi.toUpperCase()}`;

                // Clear member list
                memberList.innerHTML = '';

                // Add anggota cards
                if (!anggota[instansi] || anggota[instansi].length === 0) {
                    memberList.innerHTML = '<div class="text-muted">Belum ada anggota untuk instansi ini.</div>';
                    return;
                }
                
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
                        @if (auth()->user()->is_admin)
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

        renderOrg(currentIndex);
        });
    </script>
</x-guest-layout>
