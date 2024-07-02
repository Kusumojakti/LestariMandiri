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
                   <div class="col-3">
                       <label for="date" class="col-1 col-form-label">Date</label>
                    </div>
                    <div class="col-3">
                        <div class="input-group date" id="datepicker">
                            <input type="text" class="form-control" id="date"/>
                            <span class="input-group-append">
                            <span class="input-group-text bg-light d-block">
                                <i class="fa fa-calendar"></i>
                            </span>
                            </span>
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
                                            <td class="text-bold-500">Kulkas 18 Pintu</td>
                                            <td class="text-bold-500">12</td>
                                            <td class="text-bold-500">Rp. 2.000.000</td>
                                            <td class="text-bold-500">Lorem, ipsum.</td>
                                            <td class="text-bold-500">Lorem, ipsum.</td>
                                            </tr>
                                            <tr>
                                            <td class="text-bold-500">02</td>
                                            <td class="text-bold-500">Kulkas 18 Pintu</td>
                                            <td class="text-bold-500">12</td>
                                            <td class="text-bold-500">Rp. 2.000.000</td>
                                            <td class="text-bold-500">Lorem, ipsum.</td>
                                            <td class="text-bold-500">Lorem, ipsum.</td>
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