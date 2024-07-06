@extends ('layout.app')

@section('title', 'Data Order')
@section('content')
    <section class="section">
        <div class="page-content">
            <section class="row">
        </div>
        </div>
        <section class="section">
            <div class="row ">
                <div class="d-flex justify-content-between align-items-center mt-4">
                    <h3 class="mb-0">Data Orderan</h3>
                    <div class="d-flex">
                        <form action="/order" method="GET">
                            <div class="me-2">
                                <input class="form-control" name="search" type="text" placeholder="Search...">
                            </div>
                        </form>
                        <div>
                            <a href="/addorders" class="btn btn-primary w-100 text-bold-800">Tambah Data</a>
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
                                                <th>Faktur</th>
                                                <th>Kode Brg</th>
                                                <th>Nama</th>
                                                <th>Quantity</th>
                                                <th>Harga</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $item)
                                                <tr>
                                                    <td class="text-bold-500">{{ $item->faktur_id }}</td>
                                                    <td class="text-bold-500">{{ $item->kodeBrg }}</td>
                                                    <td class="text-bold-500">{{ $item->barang->nama }}</td>
                                                    <td class="text-bold-500">{{ $item->quantity }}</td>
                                                    <td class="text-bold-500">{{ $item->barang->harga }}</td>
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
