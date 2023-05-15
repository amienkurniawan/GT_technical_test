@extends('layouts.app')


@section('content')
<!-- End Navbar -->
<div class="row mt-4">
  <div class="col-lg-7 mb-lg-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-lg-6">
            <div class="d-flex flex-column h-100">
              <div class="row">
                <div class="col-lg-3">
                  <h5 class="font-weight-bolder">Nama</h5>
                </div>
                <div class="col-lg-9">
                  <h5 class="font-weight-bolder">: {{$data['nama']}}</h5>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-3">
                  <h5 class="font-weight-bolder">Email</h5>
                </div>
                <div class="col-lg-9">
                  <h5 class="font-weight-bolder">: {{$data['email']}}</h5>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 ms-auto text-center mt-5 mt-lg-0">
            <div class="bg-gradient-primary border-radius-lg h-100">
              <div class="position-relative d-flex align-items-center justify-content-center h-100">
                <img class="w-100 position-relative z-index-2 pt-4" src="{{$data['photo_url']}}" alt="rocket">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row mt-4">
  <div class="col-lg-12 col-md-11 mb-md-0 mb-4">
    <div class="card">
      <div class="card-header pb-0">
        <div class="row">
          <div class="col-lg-6 col-7">
            <h6>Data Laporan Nilai {{$data['nama']}}</h6>
          </div>
        </div>
      </div>
      <div class="card-body px-0 pb-2">
        <div class="table-responsive">
          <table class="table align-items-center mb-2 px-3">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary font-weight-bolder">
                  Aspek</th>
                <th class="text-uppercase text-secondary font-weight-bolder ps-2">
                  1</th>
                <th class="text-uppercase text-secondary font-weight-bolder ps-2">
                  2
                </th>
                <th class="text-uppercase text-secondary font-weight-bolder ps-2">
                  3</th>
                <th class="text-uppercase text-secondary font-weight-bolder ps-2">
                  4</th>
                <th class="text-uppercase text-secondary font-weight-bolder ps-2">
                  5</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data['penilaian'] as $item)
              <tr>
                <td class="align-middle ">
                  <div class="d-flex flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">{{$item['aspek']}}</h6>
                  </div>
                </td>
                <td class="align-middle ">
                  {{$item['nilai'] == '1' ?'V':'-'}}
                </td>
                <td class="align-middle ">
                  {{$item['nilai'] == '2' ?'V':'-'}}
                </td>
                <td class="align-middle ">
                  {{$item['nilai'] == '3' ?'V':'-'}}
                </td>
                <td class="align-middle ">
                  {{$item['nilai'] == '4' ?'V':'-'}}
                </td>
                <td class="align-middle ">
                  {{$item['nilai'] == '5' ?'V':'-'}}
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

@endsection


@section('content-script')

@endsection