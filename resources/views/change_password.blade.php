@extends ('layout.app')

@section('content')
    <section class="section">
      <div class="page-heading">
        <h3>Change Password</h3>
      </div>
      <div class="page-content">
        <section class="row">
          <div class="col-12 col-lg-6">
            <section class="section">
                <div class="card">
                    <div class="card-body">
                        <label for="pass_lama" class="form-label">Password Lama</label>
                        <input type="password" id="pass_lama" class="form-control" aria-describedby="passwordHelpBlock">
                    </div>
                    <div class="card-body">
                        <label for="pass_baru" class="form-label">Password Baru</label>
                        <input type="password_verify" id="pass_baru" class="form-control" aria-describedby="passwordHelpBlock">
                    </div>
                    <div class="card-body">
                        <label for="confirm_pass" class="form-label">Konfirmasi Password</label>
                        <input type="password_verify" id="confirm_pass" class="form-control" aria-describedby="passwordHelpBlock">
                    </div>
                    <div class="row justify-content-end me-3 mb-5">

                        <div class="d-grid gap-2 col-lg-6">
                            <button class="btn btn-warning" type="button"><b>Changed</b></button>
                        </div>
                    </div>
                </div>
            </section>
          </div>
        </section>
      </div>
    </section>

@endsection