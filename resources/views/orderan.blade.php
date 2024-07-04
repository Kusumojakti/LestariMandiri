@extends ('layout.app')

@section('content')
<section class="section">
    <div class="page-heading">
        <h3>Data Orderan</h3>
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
                            <button type="button" class="btn btn-primary w-100 text-bold-800" data-bs-target="#tambahorderan" data-bs-toggle="modal">Tambah Data</button>
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
                                            <th>Item</th>
                                            <th>Name</th>
                                            <th>Banyaknya</th>
                                            <th>Harga</th>
                                            <th>Keterangan</th>                                            
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <td class="text-bold-500">01</td>
                                            <td class="text-bold-500">Kulkas 18 Pintu</td>
                                            <td class="text-bold-500">12</td>
                                            <td class="text-bold-500">Rp. 2.000.000</td>
                                            <td class="text-bold-500">Good Quality</td>
                                            </tr>
                                            <tr>
                                           <td class="text-bold-500">02</td>
                                            <td class="text-bold-500">Magic Skin</td>
                                            <td class="text-bold-500">10</td>
                                            <td class="text-bold-500">Rp. 1.000.000</td>
                                            <td class="text-bold-500">Good Quality</td>
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

    <!-- modal tambah order -->
    <div class="modal fade" id="tambahorderan" aria-hidden="true" aria-labelledby="tambahorderan" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Tambah Data Orderan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="edt_banyaknya" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" id="edt_banyaknya" placeholder="Masukkan Nama Pelanggan">
                </div>
                <div class="mb-3">
                    <label for="edt_banyaknya" class="form-label">Banyaknya</label>
                    <input type="text" class="form-control" id="edt_banyaknya" placeholder="Masukkan No Telpon Pelanggan">
                </div>
                <div class="mb-3">
                    <label for="edt_harga" class="form-label">Harga</label>
                    <input type="text" class="form-control" id="edt_harga" placeholder="Masukkan Alamat">
                </div>
                <div class="mb-3">
                    <label for="edt_keterangan" class="form-label">Keterangan</label>
                    <input type="text" class="form-control" id="edt_keterangan" placeholder="Masukkan Alamat">
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