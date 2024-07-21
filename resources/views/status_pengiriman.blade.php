@extends ('layout.app')

@section('title', 'Status Pengiriman')
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
                            <select class="form-select" aria-label="Default select example" name="nofaktur" id="nofaktur">
                                <option selected>Open this select menu</option>
                                @foreach ($data as $item)
                                    <option value="{{ $item->id }}">{{ $item->id }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-3">
                            <label for="nofaktur" class="col-form-label">Pelanggan</label>
                        </div>
                        <div class="col-9">
                            <select class="form-select" aria-label="Default select example" name="pelanggan_id"
                                id="pelanggan_id">
                                <option selected>Open this select menu</option>
                                @foreach ($data as $pelanggan)
                                    <option value="{{ $pelanggan->pelanggan->id }}">{{ $pelanggan->pelanggan->nama }}
                                    </option>
                                @endforeach
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
                                            <table class="table table-lg" id="mytables">
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
                                                <tbody id="shipment-table-body">
                                                    @foreach ($faktur as $item)
                                                        <tr>
                                                            <td class="text-bold-500">{{ $item->id }}</td>
                                                            <td class="text-bold-500">{{ $item->tanggal }}</td>
                                                            <td class="text-bold-500">{{ $item->pelanggan->nama }}</td>
                                                            <td class="text-bold-500">{{ $item->pelanggan->alamat }}</td>
                                                            <td class="text-bold-500">{{ $item->user->nama }}</td>
                                                            <td class="text-bold-500">{{ $item->shipping_status }}</td>
                                                            <td>
                                                                <button class="btn btn-primary edit-btn"
                                                                    data-bs-target="#editdata" data-bs-toggle="modal"
                                                                    data-id="{{ $item->id }}">Edit</button>
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
        <!-- modal edit data -->
        <div class="modal fade" id="editdata" aria-hidden="true" aria-labelledby="editdata" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Edit Status Pengiriman</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="POST" id="editForm">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">


                            <div class="mb-3">
                                <label for="edt_nofaktur" class="form-label">No Faktur</label>
                                <input type="text" class="form-control" id="edt_nofaktur"
                                    placeholder="Masukkan Nama Pelanggan" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="edt_tanggal" class="form-label">Tanggal</label>
                                <input type="date" class="form-control" id="edt_tanggal"
                                    placeholder="Masukkan No Telpon Pelanggan" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="edt_alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="edt_alamat" placeholder="Masukkan Alamat"
                                    disabled>
                            </div>
                            <div class="mb-3">
                                <label for="edt_driver" class="form-label">Driver</label>
                                <input type="text" class="form-control" id="edt_driver" placeholder="Masukkan Alamat"
                                    disabled>
                            </div>
                            <div class="mb-3">
                                <label for="edt_status-kirim" class="form-label">Status Pengiriman</label>
                                <select name="shipping_status" class="form-select" id="edt_status-kirim">
                                    <option value="Pending">Pending</option>
                                    <option value="Dikirim">Dikirim</option>
                                    <option value="Diterima">Diterima</option>
                                </select>
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
    <script src="assets/js/status-pengiriman.js"></script>
@endsection
