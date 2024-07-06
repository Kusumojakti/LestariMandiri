@extends ('layout.app')

@section('title', 'Pelanggan')
@section('content')
    <section class="section">
        <div class="page-content">
            <section class="row">
                <section class="section">
                    <div class="row justify-content-end mt-4">
                        <div class="col-12 col-lg-12">
                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <h3 class="mb-0">Data Pelanggan</h3>
                                <div class="d-flex">
                                    <form action="/pelanggan" method="GET">
                                        <div class="me-2">
                                            <input class="form-control" name="search" type="text"
                                                placeholder="Search...">
                                        </div>
                                    </form>
                                    <div>
                                        <button type="button" class="btn btn-primary w-100 text-bold-800"
                                            data-bs-target="#tambahdata" data-bs-toggle="modal">Tambah Data</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-12 mt-4">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <!-- Table with outer spacing -->
                                        <div class="table-responsive">
                                            <table class="table table-lg">
                                                <thead>
                                                    <tr>
                                                        <th>No. Pel</th>
                                                        <th>Nama</th>
                                                        <th>No Telp</th>
                                                        <th>Alamat</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($data as $item)
                                                        <tr>
                                                            <td class="text-bold-500">{{ $item->id }}</td>
                                                            <td class="text-bold-500">{{ $item->nama }}</td>
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
                                                                                action="{{ route('pelanggan.destroy', $item->id) }}"
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
                </section>
            </section>
        </div>
        <!-- modal add data -->
        <div class="modal fade" id="tambahdata" aria-hidden="true" aria-labelledby="tambahdata" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Tambah Data Pelanggan</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('pelanggan.store') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="add_namapelanggan" class="form-label">Nama Pelanggan</label>
                                <input type="text" class="form-control" id="add_namapelanggan" name="nama"
                                    placeholder="Masukkan Nama Pelanggan">
                            </div>
                            <div class="mb-3">
                                <label for="add_notelpon" class="form-label">No Telepon</label>
                                <input type="text" class="form-control" id="add_notelpon" name="noTelp"
                                    placeholder="Masukkan No Telpon Pelanggan">
                            </div>
                            <div class="mb-3">
                                <label for="add_alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="add_alamat" name="alamat"
                                    placeholder="Masukkan Alamat">
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
                    <form method="POST" id="editForm">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="edt_namapelanggan" class="form-label">Nama Pelanggan</label>
                                <input type="text" class="form-control" id="edt_namapelanggan" name="nama"
                                    placeholder="Masukkan Nama Pelanggan">
                            </div>
                            <div class="mb-3">
                                <label for="edt_notelpon" class="form-label">No Telepon</label>
                                <input type="text" class="form-control" id="edt_notelpon" name="noTelp"
                                    placeholder="Masukkan No Telpon Pelanggan">
                            </div>
                            <div class="mb-3">
                                <label for="edt_alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="edt_alamat" name="alamat"
                                    placeholder="Masukkan Alamat">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" type="submit">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>
@endsection

@section('scripts')
    <script src="assets/js/pelanggan.js"></script>
@endsection
