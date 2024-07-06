@extends ('layout.app')
@section('title', 'Data Barang')

@section('content')
    <section class="section">
        <div class="page-content">
            <section class="row">
                <section class="section">
                    <div class="row justify-content-end mt-4">
                        <div class="col-12 col-lg-12">
                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <h3 class="mb-0">Data Barang</h3>
                                <div class="d-flex">
                                    <form action="/search" method="GET">
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
                                                        <th>Kode</th>
                                                        <th>Nama</th>
                                                        <th>Stock</th>
                                                        <th>Harga</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($data as $item)
                                                        <tr>
                                                            <td class="text-bold-500">{{ $item->kodeBrg }}</td>
                                                            <td class="text-bold-500">{{ $item->nama }}</td>
                                                            <td class="text-bold-500">{{ $item->stock }}</td>
                                                            <td class="text-bold-500">{{ $item->harga }}</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <button class="btn btn-primary dropdown-toggle"
                                                                        type="button" data-bs-toggle="dropdown"
                                                                        aria-expanded="false">
                                                                        Opsi
                                                                    </button>
                                                                    <ul class="dropdown-menu dropdown-menu-lg-end">
                                                                        <li><button class="dropdown-item edit-btn"
                                                                                data-id="{{ $item->kodeBrg }}">Edit</button>
                                                                        </li>
                                                                        <li>
                                                                            <form
                                                                                action="{{ route('barang.destroy', $item->kodeBrg) }}"
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
                        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Tambah Data Barang</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('barang.store') }}" method="POST">
                        @csrf

                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="add_kodeBrg" class="form-label">Kode Barang</label>
                                <input type="text" class="form-control" id="add_kodeBrg" name="kodeBrg"
                                    placeholder="Masukkan Kode Barang" required>
                            </div>
                            <div class="mb-3">
                                <label for="add_namaBarang" class="form-label">Nama Barang</label>
                                <input type="text" class="form-control" id="add_namaBarang" name="nama"
                                    placeholder="Masukkan Nama Barang" required>
                            </div>
                            <div class="mb-3">
                                <label for="add_stock" class="form-label">Stock</label>
                                <input type="stock" class="form-control" id="add_stock" name="stock"
                                    placeholder="Masukkan Stock" required>
                            </div>
                            <div class="mb-3">
                                <label for="add_harga" class="form-label">Harga</label>
                                <input type="text" class="form-control" id="add_harga" name="harga"
                                    placeholder="Masukkan Harga" required>
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
                                <label for="edt_kodeBrg" class="form-label">Kode Barang</label>
                                <input type="text" class="form-control" id="edt_kodeBrg" name="kodeBrg"
                                    placeholder="Masukkan Kode Barang" required disabled>
                            </div>
                            <div class="mb-3">
                                <label for="edt_namaBarang" class="form-label">Nama Barang</label>
                                <input type="text" class="form-control" id="edt_namaBarang" name="nama"
                                    placeholder="Masukkan Nama Barang" required>
                            </div>
                            <div class="mb-3">
                                <label for="edt_stock" class="form-label">Stock</label>
                                <input type="stock" class="form-control" id="edt_stock" name="stock"
                                    placeholder="Masukkan Stock" required>
                            </div>
                            <div class="mb-3">
                                <label for="edt_harga" class="form-label">Harga</label>
                                <input type="text" class="form-control" id="edt_harga" name="harga"
                                    placeholder="Masukkan Harga" required>
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
    <script src="assets/js/barang.js"></script>
@endsection
