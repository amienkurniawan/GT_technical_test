@extends('layouts.app')


@section('content')

<div class="row my-4">
  <div class="col-lg-11 col-md-11 mb-md-0 mb-4">
    <div class="card">
      <div class="card-header pb-0">
        <div class="row">
          <div class="col-lg-6 col-7">
            <h6>Data Profile</h6>
          </div>
          <div class="col-lg-6 col-5 my-auto text-end">
          </div>
        </div>
      </div>
      <div class="card-body pb-2">
        <form role="form" method="POST" action="{{route('profile.update',['profile'=>$data->id])}}"
          enctype="multipart/form-data">
          @method('PUT')
          @csrf

          <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
              <label>Nama</label>
              <div class="mb-3">
                <input type="text" name="name" value="{{ old('name',isset($data->name) ? $data->name :'') }}"
                  class="form-control @error('nama') is-invalid @enderror" placeholder="Nama" aria-label="Nama"
                  aria-describedby="nama-addon">

                @error('name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror

              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
              <label>Email</label>
              <div class="mb-3">
                <input type="email" name="email" value="{{ old('email',isset($data->email) ? $data->email:'' ) }}"
                  class="form-control @error('email') is-invalid @enderror" placeholder="Email" aria-label="Email"
                  aria-describedby="email-addon">

                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror

              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
              <label>Password</label>
              <div class="mb-3">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                  placeholder="Password" aria-label="password" aria-describedby="password-addon">

                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror

              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
              <label>Confirm Password</label>
              <div class="mb-3">
                <input type="password" name="password_confirmation"
                  class="form-control @error('password_confirmation') is-invalid @enderror"
                  placeholder="Confirm Password" aria-label="confirm_password"
                  aria-describedby="confirm_password-addon">

                @error('password_confirmation')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror

              </div>
            </div>
          </div>

          <div class="text-center">
            <div class="row">
              <div class="col-lg-3 col-md-5 col-sm-6">
                <button type="submit" class="btn btn-sm bg-gradient-info w-100 mt-4 mb-0">Ubah</button>
              </div>
              <div class="col-lg-3 col-md-5 col-sm-6">
                <a href="{{route('profile')}}" class="btn btn-sm bg-gradient-danger w-100 mt-4 mb-0">Batal</a>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection


@section('content-script')

@endsection