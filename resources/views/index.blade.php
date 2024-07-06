@extends ('layout.app')

@section('content')
    <section class="section">
        <div class="page-heading">
            <h3>Dashboard</h3>
        </div>
        <div class="page-content">
            <section class="row">
                <div class="col-12 col-lg-12">
                    <div class="row">
                        <div class="col-12 col-lg-4 col-md-7">
                            <div class="card">
                                <div class="card-body px-4 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                            <div class="stats-icon purple mb-2">
                                                <i class="fa-solid fa-truck-fast"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                            <h6 class="text-muted font-semibold">Dalam Pengiriman</h6>
                                            <div id="dikirim" class="visually-hidden" role="status">
                                                <h3>10</h3>
                                            </div>
                                            <div class="spinner-border" id="load_dikirim" role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 col-md-7">
                            <div class="card">
                                <div class="card-body px-4 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                            <div class="stats-icon blue mb-2">
                                                <i class="fa-solid fa-circle-check"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                            <h6 class="text-muted font-semibold">Pengiriman Selesai</h6>
                                            <div id="selesai" class="visually-hidden" role="status">
                                                <h3>10</h3>
                                            </div>
                                            <div class="spinner-border" id="load_selesai" role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 col-md-7">
                            <div class="card">
                                <div class="card-body px-4 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                            <div class="stats-icon green mb-2">
                                                <i class="fa-solid fa-clock"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                            <h6 class="text-muted font-semibold">Pengiriman Pending</h6>
                                            <div id="pending" class="visually-hidden" role="status">
                                                <h3>10</h3>
                                            </div>
                                            <div class="spinner-border" id="load_pending" role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title text-center">
                                Selamat Datang di Dashboard Lestari Mandiri
                            </h4>
                        </div>
                        <div class="card-body text-center">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. A, harum
                                minus. Dicta.
                            </p>
                        </div>
                    </div>
                </section>
            </section>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="assets/js/index.js"></script>
@endsection
