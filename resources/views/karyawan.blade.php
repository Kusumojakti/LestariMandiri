@extends ('layout.app')

@section('content')
    <section class="section">
        <div class="page-heading">
            <h3>Data Karyawan</h3>
        </div>
        <div class="page-content">
            <section class="row">
                {{-- <div class="col-12 col-lg-5">
                    <div class="row">
                        <div class="col-12">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div> --}}
                <!-- <div class="col-12 mt-4 flex-column d-flex align-items-end">
                                                                                                                                                                                                                                                                                                                                                                                                <button type="button" class="btn btn-primary mb-2 w-50">Tambah Data</button>
                                                                                                                                                                                                                                                                                                                                                                                                <button type="button" class="btn btn-primary mb-2 w-50">Edit</button>
                                                                                                                                                                                                                                                                                                                                                                                                <button type="button" class="btn btn-primary mb-2 w-50">Hapus</button>
                                                                                                                                                                                                                                                                                                                                                                                        </div> -->
                {{-- </div>
                </div> --}}
                <section class="section">
                    <div class="row justify-content-end mt-4">
                        <div class="col-12 col-lg-6">
                            <div class="row">
                                <div class="col-lg-8 mb-3">
                                    <input class="form-control" id="exampleDataList" placeholder="Search...">
                                </div>
                                <div class="col-lg-4">
                                    <button type="button" class="btn btn-primary w-100 text-bold-800"
                                        data-bs-target="#tambahdata" data-bs-toggle="modal">Tambah Data</button>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4" id="basic-table">
                            <div class="col-12 col-lg-12">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <!-- Table with outer spacing -->
                                            <div class="table-responsive">
                                                <table class="table table-lg">
                                                    <thead>
                                                        <tr>
                                                            <th>Username</th>
                                                            <th>Nama</th>
                                                            <th>Role</th>
                                                            <th>No Telp</th>
                                                            <th>Alamat</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($data as $item)
                                                            <tr>
                                                                <td class="text-bold-500">{{ $item->username }}</td>
                                                                <td class="text-bold-500">{{ $item->nama }}</td>
                                                                <td class="text-bold-500">{{ $item->role }}</td>
                                                                <td class="text-bold-500">{{ $item->noTelp }}</td>
                                                                <td class="text-bold-500">{{ $item->alamat }}</td>
                                                                <td>
                                                                    <div class="dropdown">
                                                                        <button class="btn btn-primary dropdown-toggle"
                                                                            type="button" data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                            Opsi
                                                                        </button>
                                                                        <ul class="dropdown-menu dropdown-menu-lg-end">
                                                                            <li><button class="dropdown-item edit-btn"
                                                                                    data-id="{{ $item->id }}">Edit</button>
                                                                            </li>
                                                                            <li>
                                                                                <form
                                                                                    action="{{ route('karyawan.destroy', $item->id) }}"
                                                                                    method="POST">
                                                                                    @csrf
                                                                                    @method('DELETE')
                                                                                    <button type="submit"
                                                                                        class="dropdown-item">Hapus</button>
                                                                                </form>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
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
                </section>
            </section>
        </div>
        <!-- modal add data -->
        <div class="modal fade" id="tambahdata" aria-hidden="true" aria-labelledby="tambahdata" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Tambah Data Karyawan</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('karyawan.store') }}" method="POST">
                        @csrf

                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="add_namaKaryawan" class="form-label">Nama Karyawan</label>
                                <input type="text" class="form-control" id="add_namaKaryawan" name="nama"
                                    placeholder="Masukkan Nama Karyawan" required>
                            </div>
                            <div class="mb-3">
                                <label for="add_username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="add_username" name="username"
                                    placeholder="Masukkan Username" required>
                            </div>
                            <div class="mb-3">
                                <label for="add_password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="add_password" name="password"
                                    placeholder="Masukkan Password" required>
                            </div>
                            <div class="mb-3">
                                <label for="add_role" class="form-label">Role</label>
                                <select name="role" class="form-control" id="add_role">
                                    <option value="admin">Admin</option>
                                    <option value="sales">Sales</option>
                                    <option value="owner">Owner</option>
                                    <option value="driver">Driver</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="add_notelpon" class="form-label">No Telepon</label>
                                <input type="text" class="form-control" id="add_notelpon" name="noTelp"
                                    placeholder="Masukkan No Telpon" required>
                            </div>
                            <div class="mb-3">
                                <label for="add_alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="add_alamat" name="alamat"
                                    placeholder="Masukkan Alamat" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" type="submit">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- modal edit data -->
        <div class="modal fade" id="editdata" aria-hidden="true" aria-labelledby="editdata" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Edit Data Karyawan</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="editForm" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="edt_namaKaryawan" class="form-label">Nama Karyawan</label>
                                <input type="text" class="form-control" id="edt_namaKaryawan" name="nama"
                                    placeholder="Masukkan Nama Karyawan" required>
                            </div>
                            <div class="mb-3">
                                <label for="edt_username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="edt_username" name="username"
                                    placeholder="Masukkan Username" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="edt_role" class="form-label">Role</label>
                                <select name="role" class="form-control" id="edt_role">
                                    <option value="admin">Admin</option>
                                    <option value="sales">Sales</option>
                                    <option value="owner">Owner</option>
                                    <option value="driver">Driver</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="edt_notelpon" class="form-label">No Telepon</label>
                                <input type="text" class="form-control" id="edt_notelpon" name="noTelp"
                                    placeholder="Masukkan No Telpon" required>
                            </div>
                            <div class="mb-3">
                                <label for="edt_alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="edt_alamat" name="alamat"
                                    placeholder="Masukkan Alamat" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" id="simpan-edit" type="submit">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/js/karyawan.js"></script>
@endsection
