@extends ('layout.app')

@section('content')
<section class="section">
    <div class="page-content">
        <section class="section">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <h3 class="mb-0">Tambah Orderan</h3>
                        <div class="d-flex">
                            <div class="me-2">
                                <input class="form-control" id="exampleDataList" placeholder="Search...">
                            </div>
                            <div>
                                <button type="button" class="btn btn-primary w-100 text-bold-800" data-bs-target="#tambahorderan" data-bs-toggle="modal">Tambah Data</button>
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
                                    <div class="d-flex justify-content-end mt-2">
                                        <button class="btn btn-primary" type="submit"><b>Checkout</b></button>
                                    </div>
                               </div>
                           </div>
                       </div>
                    </div>                 
            </div>
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
                        <input type="text" class="form-control" id="edt_banyaknya" placeholder="Masukkan Nama Barang">
                    </div>
                    <div class="mb-3">
                        <label for="edt_banyaknya" class="form-label">Banyaknya</label>
                        <input type="text" class="form-control" id="edt_banyaknya" placeholder="Masukkan Banyaknya">
                    </div>
                    <div class="mb-3">
                        <label for="edt_harga" class="form-label">Harga</label>
                        <input type="text" class="form-control" id="edt_harga" placeholder="Masukkan Harga">
                    </div>
                    <div class="mb-3">
                        <label for="edt_keterangan" class="form-label">Keterangan</label>
                        <input type="text" class="form-control" id="edt_keterangan" placeholder="Masukkan Keterangan">
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
