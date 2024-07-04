@extends ('layout.app')

@section('content')
<section class="section">
    <div class="page-heading">
        <h3>Status Pengiriman</h3>
    </div>
    <div class="page-content">
        <section class="row">
          <div class="col-12 col-lg-5">
            <div class="row g-3 align-items-center">
                <div class="col-3">
                    <label for="nofaktur" class="col-form-label">No. Faktur</label>
                </div>
                <div class="col-9">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-3">
                    <label for="nofaktur" class="col-form-label">Pelanggan</label>
                </div>
                <div class="col-9">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                
            </div>
        </div>
          <section class="section">
            <div class="row justify-content-end">
                <div class="col-12 col-lg-6" >
                   <div class="col-11">
                       <label for="date" class="col-form-label">Date</label>
                    </div>
                    <div class="col-12">
                        <div class="input-group date" id="datepicker">
                            <input type="date" class="form-control" id="date"/>
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
                                            <th>No. Faktur</th>
                                            <th>Tanggal</th>
                                            <th>Pelanggan</th>
                                            <th>Alamat</th>
                                            <th>Driver</th>   
                                            <th>Status Pengiriman</th>  
                                            <th>Opsi</th>                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <td class="text-bold-500">01</td>
                                            <td class="text-bold-500">04-07-2024</td>
                                            <td class="text-bold-500">Kulkas 18 Pintu</td>
                                            <td class="text-bold-500">12</td>
                                            <td class="text-bold-500">Rp. 2.000.000</td>
                                            <td class="text-bold-500">Lorem, ipsum.</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Opsi
                                                    </button>
                                                    <ul class="dropdown-menu">
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
    <!-- modal edit data -->
    <div class="modal fade" id="editdata" aria-hidden="true" aria-labelledby="editdata" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Edit Status Pengiriman</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="edt_nofaktur" class="form-label">No Faktur</label>
                    <input type="text" class="form-control" id="edt_nofaktur" placeholder="Masukkan Nama Pelanggan">
                </div>
                <div class="mb-3">
                    <label for="edt_tanggal" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" id="edt_tanggal" placeholder="Masukkan No Telpon Pelanggan">
                </div>
                <div class="mb-3">
                    <label for="edt_alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="edt_alamat" placeholder="Masukkan Alamat">
                </div>
                 <div class="mb-3">
                    <label for="edt_driver" class="form-label">Driver</label>
                    <input type="text" class="form-control" id="edt_driver" placeholder="Masukkan Alamat">
                </div>
                 <div class="mb-3">
                    <label for="edt_status-kirim" class="form-label">Status Pengiriman</label>
                    <input type="text" class="form-control" id="edt_status-kirim" placeholder="Masukkan Alamat">
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
    <script type="text/javascript">
         $(function () {
             $('#datetimepicker1').datetimepicker();
         });
      </script>
    </section>
@endsection