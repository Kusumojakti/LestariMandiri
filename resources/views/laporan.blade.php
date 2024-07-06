@extends ('layout.app')

@section('content')
    <section class="section">
        <div class="page-heading">
            <h3>Laporan</h3>
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
                        <div class="col-12 col-lg-6">
                            <div class="col-11">
                                <label for="date" class="col-form-label">Date</label>
                            </div>
                            <div class="col-12">
                                <div class="input-group date" id="datepicker">
                                    <input type="date" class="form-control" id="date" />
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
                                                        <th>No. Faktur</th>
                                                        <th>Tanggal</th>
                                                        <th>Pelanggan</th>
                                                        <th>Alamat</th>
                                                        <th>Tanggal Pengiriman</th>
                                                        <th>Status Pengiriman</th>
                                                        <th>Total Pembelian</th>
                                                        <th>Ket.</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($data as $item)
                                                        <tr>
                                                            <td class="text-bold-500">{{ $item->id }}</td>
                                                            <td class="text-bold-500">{{ $item->tanggal }}</td>
                                                            <td class="text-bold-500">{{ $item->pelanggan->nama }}</td>
                                                            <td class="text-bold-500">{{ $item->pelanggan->alamat }}</td>
                                                            <td class="text-bold-500">{{ $item->shipping_date }}</td>
                                                            <td class="text-bold-500">{{ $item->shipping_status }}</td>
                                                            <td class="text-bold-500">{{ $item->total_pembelian }}</td>
                                                            <td class="text-bold-500">{{ $item->keterangan }}</td>
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
    </section>
@endsection
