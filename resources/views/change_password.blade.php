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
              <form action="{{ route('changepassword') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card">
                  <div class="card-body">
                        @if ($errors->has('old_password'))
                          <div class="alert alert-danger">
                            {{ $errors->first('old_password') }}
                          </div>
                        @endif
                        <label for="pass_lama" class="form-label">Password Lama</label>
                        <input type="password" name="old_password" class="form-control" aria-describedby="passwordHelpBlock">
                    </div>
                    <div class="card-body">
                        <label for="pass_baru" class="form-label">Password Baru</label>
                        <input type="password_verify" name="password" class="form-control" aria-describedby="passwordHelpBlock">
                    </div>
                    <div class="card-body">
                        @if ($errors->has('password'))
                          <div class="alert alert-danger">
                            {{ $errors->first('password') }}
                          </div>
                        @endif
                        <label for="confirm_pass" class="form-label">Konfirmasi Password</label>
                        <input type="password_verify" name="confirm_pass" class="form-control" aria-describedby="passwordHelpBlock">
                    </div>
                    <div class="row justify-content-end me-3 mb-5">

                        <div class="d-grid gap-2 col-lg-6">
                            <button class="btn btn-warning" type="submit"><b>Changed</b></button>
                        </div>
                    </div>
                  </div>
              </form>
            </section>
          </div>
        </section>
      </div>
    </section>

@endsection