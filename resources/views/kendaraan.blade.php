@extends ('layout.app')

@section('title', 'Kendaraan')
@section('content')
    <section class="section">
        <div class="page-content">
            <section class="row">
                <section class="section">
                    <div class="row justify-content-end mt-4">
                        <div class="col-12 col-lg-12">
                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <h3 class="mb-0">Data Kendaraan</h3>
                                <div class="d-flex">
                                    <form action="/kendaraan" method="GET">
                                        <div class="me-2">
                                            <input class="form-control" name="search" type="text"
                                                placeholder="Search...">
                                        </div>
                                    </form>
                                    <div>
                                        <button type="button" class="btn btn-primary w-100 text-bold-800"
                                            data-bs-target="#tambahdata" data-bs-toggle="modal" id="addKendaraan">Tambah
                                            Data</button>
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
                                                        <th>Nopol</th>
                                                        <th>Jenis Kendaraan</th>
                                                        <th>BBM</th>
                                                        <th>Driver</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($data as $item)
                                                        <tr>
                                                            <td class="text-bold-500">{{ $item->noPol }}</td>
                                                            <td class="text-bold-500">{{ $item->jenis_kendaraan }}</td>
                                                            <td class="text-bold-500">{{ $item->BBM }}</td>
                                                            <td class="text-bold-500">{{ $item->driver->nama }}</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <button class="btn btn-primary dropdown-toggle"
                                                                        type="button" data-bs-toggle="dropdown"
                                                                        aria-expanded="false">
                                                                        Opsi
                                                                    </button>
                                                                    <ul class="dropdown-menu    ">
                                                                        <li><button class="dropdown-item edit-btn"
                                                                                data-id="{{ $item->noPol }}">Edit</button>
                                                                        </li>
                                                                        <li>
                                                                            <form
                                                                                action="{{ route('kendaraan.destroy', $item->noPol) }}"
                                                                                method="POST">
                                                                                @csrf
                                                                                @method('DELETE')
                                                                                <button type="submit"
                                                                                    class="dropdown-item">Hapus</button>
                                                                            </form>
                                                                        </li>
                                                                    </ul>
                                                                </div>
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
    </section>
    <!-- modal add data -->
    <div class="modal fade" id="tambahdata" aria-hidden="true" aria-labelledby="tambahdata" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Tambah Data Kendaraan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('kendaraan.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="add_nopol" class="form-label">Nopol</label>
                            <input type="text" class="form-control" id="add_nopol" name="noPol"
                                placeholder="Masukkan Nomor Polisi Kendaraan">
                        </div>
                        <div class="mb-3">
                            <label for="add_jeniskendaraan" class="form-label">Jenis Kendaraan</label>
                            <select name="jenis_kendaraan" id="add_jeniskendaraan" class="form-control">
                                <option value="Colt Diesel Double (CDD)">Colt Diesel Double (CDD)
                                </option>
                                <option value="Colt Diesel Engkel (CDE)">Colt Diesel Engkel (CDE)
                                </option>
                                <option value="Carry/PickUp">Carry/PickUp</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="add_bbm" class="form-label">BBM</label>
                            <select name="BBM" id="add_bbm" class="form-control">
                                <option value="Pertalite">Pertalite</option>
                                <option value="Pertamax">Pertamax</option>
                                <option value="Solar">Solar</option>
                                <option value="Pertamax DEX">Pertamax DEX</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="add_driver" class="form-label">Driver</label>
                            <select name="user_id" id="add_driver" class="form-control"></select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- modal edit data -->
    <div class="modal fade" id="editdata" aria-hidden="true" aria-labelledby="editdata" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Edit Data Kendaraan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="editForm" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="edt_nopol" class="form-label">Nopol</label>
                            <input type="text" class="form-control" id="edt_nopol"
                                placeholder="Masukkan Nama Pelanggan" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="edt_jeniskendaraan" class="form-label">Jenis Kendaraan</label>
                            <select name="jenis_kendaraan" id="edt_jeniskendaraan" class="form-control">
                                <option value="Colt Diesel Double (CDD)">Colt Diesel Double (CDD)
                                </option>
                                <option value="Colt Diesel Engkel (CDE)">Colt Diesel Engkel (CDE)
                                </option>
                                <option value="Carry/PickUp">Carry/PickUp</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="edt_bbm" class="form-label">BBM</label>
                            <select name="BBM" id="edt_bbm" class="form-control">
                                <option value="Pertalite">Pertalite</option>
                                <option value="Pertamax">Pertamax</option>
                                <option value="Solar">Solar</option>
                                <option value="Pertamax DEX">Pertamax DEX</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="edt_driver" class="form-label">Driver</label>
                            <select name="user_id" id="edt_driver" class="form-control"></select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" id="simpan-edit" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </section>
@endsection

@section('scripts')
    <script src="assets/js/kendaraan.js"></script>
@endsection
