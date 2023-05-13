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
            <h6>Data Laporan Nilai</h6>
          </div>
          <div class="col-lg-6 col-5 my-auto text-end">
            <a class="btn btn-outline-primary btn-sm mb-0 ">Tambah</a>
          </div>
        </div>
      </div>
      <div class="card-body px-0 pb-2">
        <div class="table-responsive">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th rowspan="2" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">
                  Nama</th>
                <th rowspan="2" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                  Email</th>
                <th colspan="4" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                  Nilai
                </th>
                <th rowspan="2" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                  Action</th>
              </tr>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                  X</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                  Y</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                  Z</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                  W</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="align-middle">
                  <div class="d-flex px-2 py-1">
                    <div>
                      <img src="{{asset('/assets/img/team-3.jpg')}}" class="avatar avatar-sm me-3" alt="user2">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-sm">Alexa Liras</h6>
                    </div>
                  </div>
                </td>
                <td class="align-middle">
                  amienkurniawan@gmail.com
                </td>
                <td class="align-middle text-center">
                  14
                </td>
                <td class="align-middle text-center">
                  25
                </td>
                <td class="align-middle text-center">
                  20
                </td>
                <td class="align-middle text-center">
                  22
                </td>
                <td class="align-middle text-end">
                  <a class="btn btn-outline-info btn-sm mb-0 me-3">Lihat Laporan</i></a>
                  <a class="btn btn-outline-info btn-sm mb-0 me-3">Edit</a>
                  <a class="btn btn-outline-danger btn-sm mb-0 me-3">Hapus</a>
                </td>
              </tr>
              <tr>
                <td class="align-middle">
                  <div class="d-flex px-2 py-1">
                    <div>
                      <img src="{{asset('/assets/img/team-3.jpg')}}" class="avatar avatar-sm me-3" alt="user2">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-sm">Alexa Liras</h6>
                    </div>
                  </div>
                </td>
                <td class="align-middle">
                  amienkurniawan@gmail.com
                </td>
                <td class="align-middle text-center">
                  14
                </td>
                <td class="align-middle text-center">
                  25
                </td>
                <td class="align-middle text-center">
                  20
                </td>
                <td class="align-middle text-center">
                  22
                </td>
                <td class="align-middle text-end">
                  <a class="btn btn-outline-info btn-sm mb-0 me-3">Lihat Laporan</i></a>
                  <a class="btn btn-outline-info btn-sm mb-0 me-3">Edit</a>
                  <a class="btn btn-outline-danger btn-sm mb-0 me-3">Hapus</a>
                </td>
              </tr>
              <tr>
                <td class="align-middle">
                  <div class="d-flex px-2 py-1">
                    <div>
                      <img src="{{asset('/assets/img/team-3.jpg')}}" class="avatar avatar-sm me-3" alt="user2">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-sm">Alexa Liras</h6>
                    </div>
                  </div>
                </td>
                <td class="align-middle">
                  amienkurniawan@gmail.com
                </td>
                <td class="align-middle text-center">
                  14
                </td>
                <td class="align-middle text-center">
                  25
                </td>
                <td class="align-middle text-center">
                  20
                </td>
                <td class="align-middle text-center">
                  22
                </td>
                <td class="align-middle text-end">
                  <a class="btn btn-outline-info btn-sm mb-0 me-3">Lihat Laporan</i></a>
                  <a class="btn btn-outline-info btn-sm mb-0 me-3">Edit</a>
                  <a class="btn btn-outline-danger btn-sm mb-0 me-3">Hapus</a>
                </td>
              </tr>
              <tr>
                <td class="align-middle">
                  <div class="d-flex px-2 py-1">
                    <div>
                      <img src="{{asset('/assets/img/team-3.jpg')}}" class="avatar avatar-sm me-3" alt="user2">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-sm">Alexa Liras</h6>
                    </div>
                  </div>
                </td>
                <td class="align-middle">
                  amienkurniawan@gmail.com
                </td>
                <td class="align-middle text-center">
                  14
                </td>
                <td class="align-middle text-center">
                  25
                </td>
                <td class="align-middle text-center">
                  20
                </td>
                <td class="align-middle text-center">
                  22
                </td>
                <td class="align-middle text-end">
                  <a class="btn btn-outline-info btn-sm mb-0 me-3">Lihat Laporan</i></a>
                  <a class="btn btn-outline-info btn-sm mb-0 me-3">Edit</a>
                  <a class="btn btn-outline-danger btn-sm mb-0 me-3">Hapus</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>
    </div>
  </div>
</div>

@endsection


@section('content-script')

@endsection