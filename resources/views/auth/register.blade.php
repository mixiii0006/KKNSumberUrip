<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Register - Sumber Urip</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            background-color: #f8f9fa;
        }

        .register-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .register-card {
            max-width: 900px;
            width: 100%;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 25px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            display: flex;
            flex-wrap: wrap;
        }

        .register-image {
            flex: 1 1 50%;
            background: url('{{ asset('assets/img/beranda1.JPG') }}') center center/cover no-repeat;
            min-height: 400px;
        }

        .register-form {
            flex: 1 1 50%;
            padding: 40px;
        }

        .register-form h2 {
            margin-bottom: 30px;
            color: #348E38;
            font-weight: 700;
            text-align: center;
        }

        .register-form p {
            text-align: center;
        }

        .form-control:focus {
            border-color: #348E38;
            box-shadow: 0 0 0 0.2rem rgba(52, 142, 56, 0.25);
        }

        .btn-register {
            background: linear-gradient(90deg, #2f7a2f, #348E38);
            border: none;
            color: white;
            font-weight: 600;
            padding: 10px;
            width: 100%;
            border-radius: 5px;
            transition: background 0.3s ease;
        }

        .btn-register:hover {
            background: linear-gradient(90deg, #1f4f1f, #246624);
        }

        .form-text a {
            color: #348E38;
            font-weight: 600;
            text-decoration: none;
        }

        .form-text a:hover {
            text-decoration: underline;
        }

        /* Responsive Styling */
        @media (max-width: 768px) {
            .register-card {
                flex-direction: column;
            }

            .register-image {
                height: 200px;
                /* Atur tinggi gambar untuk mobile */
                flex: none;
            }

            .register-form {
                padding: 30px 20px;
            }
        }
    </style>
</head>

<body>
    <div class="register-container">
        <div class="register-card">
            <div class="register-image"></div>
            <div class="register-form">
                <h2>Tambah Akun</h2>
                {{-- <p>Register to get started!</p> --}}
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input id="name" type="text" class="form-control" name="name"
                            value="{{ old('name') }}" required autofocus />
                        @error('name')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input id="username" type="text" class="form-control" name="username"
                            value="{{ old('username') }}" required />
                        @error('username')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" type="password" class="form-control" name="password" required
                            autocomplete="new-password" />
                        @error('password')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input id="password_confirmation" type="password" class="form-control"
                            name="password_confirmation" required autocomplete="new-password" />
                    </div>
                    <div class="d-grid gap-2 mt-4">
                        <button type="submit" class="btn btn-register w-100">Tambah</button>
                        <button type="button" class="btn btn-outline-secondary w-100" data-bs-toggle="modal"
                            data-bs-target="#adminListModal">Daftar Admin</button>
                    </div>

                    {{-- <button type="submit" class="btn btn-register">Tambah</button>
                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#adminListModal">Daftar Admin</button> --}}
                </form>
                <div class=" gap-2 mt-2">
                    <a href="/" class="btn btn-link text-center" style="color: #348E38; font-weight: 600;">&larr;
                        Kembali ke Beranda</a>
                    {{-- <a href="/" class="btn btn-outline-success w-100 mt-2">← Kembali ke Beranda</a> --}}

                </div>
                <!-- Modal -->
                <div class="modal fade" id="adminListModal" tabindex="-1" aria-labelledby="adminListModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="adminListModalLabel">Daftar Admin</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <table id="adminTable" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Nama</th>
                                            <th class="text-center">Username</th>
                                            <th class="text-center">Dibuat</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($admins as $index => $admin)
                                            <tr>
                                                <td class="text-center">{{ $index + 1 }}</td>
                                                <td>{{ $admin->name }}</td>
                                                <td>{{ $admin->username }}</td>
                                                <td>{{ $admin->created_at->format('d-m-Y H:i') }}</td>
                                                <td class="text-center align-middle">
                                                    <form action="{{ route('admin.destroy', $admin->id) }}"
                                                        method="POST"
                                                        onsubmit="return confirm('Yakin ingin menghapus admin ini?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="btn btn-sm btn-danger">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- jQuery + DataTables + Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" />
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#adminTable').DataTable();
        });
    </script>

</body>

</html>
