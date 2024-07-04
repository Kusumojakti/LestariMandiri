@extends ('layout.app')

@section('content')
<section class="section">
    <div class="page-heading">
        <h3>Data Pelanggan</h3>
    </div>
    <div class="page-content">
        <section class="row">
          <div class="col-12 col-lg-5">
            <div class="row">
                <div class="col-12">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <!-- <div class="col-12 mt-4 flex-column d-flex align-items-end">
                        <button type="button" class="btn btn-primary mb-2 w-50">Tambah Data</button>
                        <button type="button" class="btn btn-primary mb-2 w-50">Edit</button>
                        <button type="button" class="btn btn-primary mb-2 w-50">Hapus</button>
                </div> -->
            </div>
        </div>
          <section class="section">
            <div class="row justify-content-end mt-4">
                <div class="col-12 col-lg-6" >
                    <div class="row">
                        <div class="col-lg-8 mb-3">
                            <input class="form-control" id="exampleDataList" placeholder="Search...">
                        </div>
                        <div class="col-lg-4">
                            <button type="button" class="btn btn-primary w-100 text-bold-800" data-bs-target="#tambahdata" data-bs-toggle="modal">Tambah Data</button>
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
                                            <th>No. Pel</th>
                                            <th>Nama Karyawan</th>
                                            <th>No Telp</th>
                                            <th>Alamat</th>
                                            <th>Aksi</th>                                                 
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <td class="text-bold-500">01</td>
                                            <td class="text-bold-500">Kulkas 18 Pintu</td>
                                            <td class="text-bold-500">12</td>
                                            <td class="text-bold-500">Rp. 2.000.000</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Opsi
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-lg-end">
                                                        <li><a class="dropdown-item" href="#" data-bs-target="#editdata" data-bs-toggle="modal">Edit</a></li>
                                                        <li><a class="dropdown-item" href="#">Hapus</a></li>
                                                    </ul>
                                                </div>                                    
                                            </td>
                                            </tr>
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
                <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Tambah Data Pelanggan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="edt_namapelanggan" class="form-label">Nama Pelanggan</label>
                    <input type="text" class="form-control" id="edt_namapelanggan" placeholder="Masukkan Nama Pelanggan">
                </div>
                <div class="mb-3">
                    <label for="edt_notelpon" class="form-label">No Telepon</label>
                    <input type="text" class="form-control" id="edt_notelpon" placeholder="Masukkan No Telpon Pelanggan">
                </div>
                <div class="mb-3">
                    <label for="edt_alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="edt_alamat" placeholder="Masukkan Alamat">
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Simpan</button>
            </div>
            </div>
        </div>
        </div>
        <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Modal 2</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Hide this modal and show the first with the button below.
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to first</button>
            </div>
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
            <div class="modal-body">
                <div class="mb-3">
                    <label for="edt_namapelanggan" class="form-label">Nama Pelanggan</label>
                    <input type="text" class="form-control" id="edt_namapelanggan" placeholder="Masukkan Nama Pelanggan">
                </div>
                <div class="mb-3">
                    <label for="edt_notelpon" class="form-label">No Telepon</label>
                    <input type="text" class="form-control" id="edt_notelpon" placeholder="Masukkan No Telpon Pelanggan">
                </div>
                <div class="mb-3">
                    <label for="edt_alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="edt_alamat" placeholder="Masukkan Alamat">
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Simpan</button>
            </div>
            </div>
        </div>
        </div>
        <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Modal 2</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Hide this modal and show the first with the button below.
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to first</button>
            </div>
            </div>
        </div>
    </div>
    </section>
@endsection