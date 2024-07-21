@extends ('layout.app')

@section('title', 'Tambah Order')
@section('content')
    {{-- @dd($data[0]->nama) --}}
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
                                    <button type="button" class="btn btn-primary w-100 text-bold-800" id="addOrder"
                                        data-bs-target="#tambahorderan" data-bs-toggle="modal">Tambah Data</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-12 mt-4">
                        <div class="card">
                            <div class="card-content">
                                <form id="dataForm" method="POST" action="{{ route('order.store') }}">
                                    @csrf
                                    <input type="hidden" name="tableData" id="tableData">
                                    <div class="card-body">
                                        <!-- Table with outer spacing -->
                                        <div class="table-responsive">
                                            <table class="table table-lg" id="myTable">
                                                <thead>
                                                    <tr>
                                                        <th>Kode Barang</th>
                                                        <th>Nama</th>
                                                        <th>Quantity</th>
                                                        <th>Harga</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    {{-- <tr>
                                                        <td class="text-bold-500">01</td>
                                                        <td class="text-bold-500">Kulkas 18 Pintu</td>
                                                        <td class="text-bold-500">12</td>
                                                        <td class="text-bold-500">Rp. 2.000.000</td>
                                                        <td class="text-bold-500">Good Quality</td>
                                                    </tr> --}}
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="d-flex">
                                            <div class="me-2">

                                                <select class="form-select" name="pelanggan_id" id="pelanggan_id">
                                                    <option value="">Pilih Pelanggan</option>
                                                    @foreach ($pelanggan as $item)
                                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="me-2">

                                                <select class="form-select" name="user_id" id="user_id">
                                                    <option value="">Pilih Driver</option>
                                                    @foreach ($driver as $item)
                                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div>
                                                <input class="form-control" id="keterangan" name="keterangan"
                                                    placeholder="Keterangan">
                                            </div>

                                            <div class="ms-auto">
                                                <button class="btn btn-primary" id="order"
                                                    type="submit"><b>Order</b></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
                            <label for="add_barang" class="form-label">Nama Barang</label>
                            <select name="kodeBrg" id="add_barang" class="form-control">
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="add_harga" class="form-label">Harga</label>
                            <input type="text" class="form-control" id="add_harga" placeholder="Harga Barang" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="add_quantity" class="form-label">Quantity</label>
                            <input type="text" class="form-control" id="add_quantity" name="quantity"
                                placeholder="Quantity">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" id="simpanOrder">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="assets/js/order.js"></script>
@endsection
