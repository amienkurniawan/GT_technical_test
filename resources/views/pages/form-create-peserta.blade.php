@extends('layouts.app')


@section('content')
<!-- End Navbar -->

<div class="row">
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-capitalize font-weight-bold">Today's Money</p>
              <h5 class="font-weight-bolder mb-0">
                $53,000
                <span class="text-success text-sm font-weight-bolder">+55%</span>
              </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
              <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-capitalize font-weight-bold">Today's Users</p>
              <h5 class="font-weight-bolder mb-0">
                2,300
                <span class="text-success text-sm font-weight-bolder">+3%</span>
              </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
              <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-capitalize font-weight-bold">New Clients</p>
              <h5 class="font-weight-bolder mb-0">
                +3,462
                <span class="text-danger text-sm font-weight-bolder">-2%</span>
              </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
              <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-capitalize font-weight-bold">Sales</p>
              <h5 class="font-weight-bolder mb-0">
                $103,430
                <span class="text-success text-sm font-weight-bolder">+5%</span>
              </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
              <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row my-4">
  <div class="col-lg-11 col-md-11 mb-md-0 mb-4">
    <div class="card">
      <div class="card-header pb-0">
        <div class="row">
          <div class="col-lg-6 col-7">
            <h6>Buat Data Peserta</h6>
          </div>
          <div class="col-lg-6 col-5 my-auto text-end">
          </div>
        </div>
      </div>
      <div class="card-body pb-2">
        @if ($edit =='true')
        <form role="form" method="POST" action="{{route('peserta.update',['pesertum'=>$data->id])}}"
          enctype="multipart/form-data">
          @method('PUT')
          @else
          <form role="form" method="POST" action="{{route('peserta.store')}}" enctype="multipart/form-data">

            @endif

            @csrf
            <div class="row">
              <div class="col-lg-3 col-md-4 col-sm-6">
                <label>Nama</label>
                <div class="mb-3">
                  <input type="text" name="nama" value="{{ old('nama',isset($data->nama) ? $data->nama :'') }}"
                    class="form-control @error('nama') is-invalid @enderror" placeholder="Nama" aria-label="Nama"
                    aria-describedby="nama-addon">

                  @error('nama')
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

              <div class="col-lg-3 col-md-4 col-sm-6">
                <label>Photo</label>
                <div class="mb-3">
                  <input type="file" name="photo" class="form-control @error('email') is-invalid @enderror"
                    placeholder="photo" aria-label="Photo" aria-describedby="photo-addon">

                  @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror

                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-3 col-md-5 col-sm-6">
                <label>Nilai X</label>
                <div class="mb-3">
                  <input type="text" name="nilai_x"
                    value="{{ old('nilai_x',isset($data->nilai->nilai_x) ? $data->nilai->nilai_x:'') }}"
                    class="form-control @error('nilai_x') is-invalid @enderror" placeholder="Nilai X" aria-label="x"
                    aria-describedby="x-addon">

                  @error('nilai_x')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror

                </div>
              </div>
              <div class="col-lg-3 col-md-5 col-sm-6">
                <label>Nilai Y</label>
                <div class="mb-3">
                  <input type="text" name="nilai_y"
                    value="{{ old('nilai_y',isset($data->nilai->nilai_y)?$data->nilai->nilai_y:'') }}"
                    class="form-control @error('nilai_y') is-invalid @enderror" placeholder="Nilai Y" aria-label="y"
                    aria-describedby="y-addon">

                  @error('nilai_y')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror


                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-3 col-md-5 col-sm-6">
                <label>Nilai Z</label>
                <div class="mb-3">
                  <input type="text" name="nilai_z"
                    value="{{ old('nilai_z',isset($data->nilai->nilai_z)?$data->nilai->nilai_z:'') }}"
                    class="form-control  @error('nilai_z') is-invalid @enderror" placeholder="Nilai Z" aria-label="z"
                    aria-describedby="z-addon">

                  @error('nilai_z')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror


                </div>
              </div>
              <div class="col-lg-3 col-md-5 col-sm-6">
                <label>Nilai W</label>
                <div class="mb-3">
                  <input type="text" name="nilai_w"
                    value="{{ old('nilai_w',isset($data->nilai->nilai_w)?$data->nilai->nilai_w:'') }}"
                    class="form-control  @error('nilai_w') is-invalid @enderror" placeholder="Nilai W" aria-label="w"
                    aria-describedby="w-addon">

                  @error('nilai_w')
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
                  @if ($edit =='true')
                  <button type="submit" class="btn btn-sm bg-gradient-info w-100 mt-4 mb-0">Ubah</button>
                  @else
                  <button type="submit" class="btn btn-sm bg-gradient-info w-100 mt-4 mb-0">Simpan</button>
                  @endif
                </div>
                <div class="col-lg-3 col-md-5 col-sm-6">
                  <a href="{{route('laporan.index')}}" class="btn btn-sm bg-gradient-danger w-100 mt-4 mb-0">Batal</a>
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