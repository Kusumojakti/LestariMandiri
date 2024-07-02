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
                <div class="col-12 mt-4 flex-column d-flex align-items-end">
                        <button type="button" class="btn btn-primary mb-2 w-50">Tambah Data</button>
                        <button type="button" class="btn btn-primary mb-2 w-50">Edit</button>
                        <button type="button" class="btn btn-primary mb-2 w-50">Hapus</button>
                </div>
            </div>
        </div>
          <section class="section">
            <div class="row justify-content-end">
                <div class="col-12 col-lg-6" >
                    <input class="form-control mt-4" id="exampleDataList" placeholder="Search...">
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
                                            <th>Nopol</th>
                                            <th>Jenis Kendaraan</th>
                                            <th>BBM</th>
                                            <th>Driver</th>
                                            <th>Aksi</th>                                                 
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
    </section>
@endsection