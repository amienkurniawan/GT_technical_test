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
        <form role="form">

          <div class="row">
            <div class="col-lg-3 col-md-5 col-sm-6">
              <label>Nama</label>
              <div class="mb-3">
                <input type="text" class="form-control" placeholder="Nama" aria-label="Nama"
                  aria-describedby="nama-addon">
              </div>
            </div>
            <div class="col-lg-3 col-md-5 col-sm-6">
              <label>Email</label>
              <div class="mb-3">
                <input type="email" class="form-control" placeholder="Email" aria-label="Email"
                  aria-describedby="email-addon">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-3 col-md-5 col-sm-6">
              <label>Nilai X</label>
              <div class="mb-3">
                <input type="text" class="form-control" placeholder="Nilai X" aria-label="x" aria-describedby="x-addon">
              </div>
            </div>
            <div class="col-lg-3 col-md-5 col-sm-6">
              <label>Nilai Y</label>
              <div class="mb-3">
                <input type="text" class="form-control" placeholder="Nilai Y" aria-label="y" aria-describedby="y-addon">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-3 col-md-5 col-sm-6">
              <label>Nilai Z</label>
              <div class="mb-3">
                <input type="text" class="form-control" placeholder="Nilai Z" aria-label="z" aria-describedby="z-addon">
              </div>
            </div>
            <div class="col-lg-3 col-md-5 col-sm-6">
              <label>Nilai W</label>
              <div class="mb-3">
                <input type="text" class="form-control" placeholder="Nilai W" aria-label="w" aria-describedby="w-addon">
              </div>
            </div>
          </div>

          <div class="text-center">
            <div class="row">
              <div class="col-lg-3 col-md-5 col-sm-6">
                <button type="button" type="submit" class="btn btn-sm bg-gradient-info w-100 mt-4 mb-0">Simpan</button>
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