@extends('layouts.app')


@section('content')
<!-- End Navbar -->
<div class="row my-4">
  <div class="col-lg-11 col-md-11 mb-md-0 mb-4">
    <div class="card">
      <div class="card-header pb-0">
        <div class="row">
          <div class="col-lg-6 col-7">
            <h6>Data Laporan Nilai</h6>
          </div>
          <div class="col-lg-6 col-5 my-auto text-end">
            <a href="{{route('peserta.create')}}" class="btn btn-outline-primary btn-sm mb-0 ">Tambah</a>
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
              @foreach ($data as $item)
              <tr>
                <td class="align-middle">
                  <div class="d-flex px-2 py-1">
                    <div>
                      <img src="{{$item->peserta->photo_url}}" class="avatar avatar-sm me-3" alt="user2">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-sm">{{$item->peserta->nama}}</h6>
                    </div>
                  </div>
                </td>
                <td class="align-middle">
                  {{$item->peserta->email}}
                </td>
                <td class="align-middle text-center">
                  {{$item->nilai_x}}
                </td>
                <td class="align-middle text-center">
                  {{$item->nilai_y}}
                </td>
                <td class="align-middle text-center">
                  {{$item->nilai_z}}
                </td>
                <td class="align-middle text-center">
                  {{$item->nilai_w}}
                </td>
                <td class="align-middle">
                  <div class="row ">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                      <a href="{{route('laporan.show',['laporan'=>$item->id])}}"
                        class="btn btn-outline-info btn-sm mb-0 me-3">Lihat Laporan</i></a>
                    </div>

                    <div class="col-lg-3 col-md-12 col-sm-12">
                      <a href="{{route('peserta.edit',['pesertum'=>$item->id_peserta])}}"
                        class="btn btn-outline-info btn-sm mb-0 me-3">Edit</a>
                    </div>

                    <div class="col-lg-3 col-md-12 col-sm-12">
                      <form action="{{ route('laporan.destroy',['laporan'=>$item->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Are you sure you want to delete this user?')"
                          class="btn btn-outline-danger btn-sm mb-0 me-3">Hapus</button>
                      </form>
                    </div>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="px-3 py-3">
          {{ $data->links('pagination::bootstrap-5') }}
        </div>

      </div>
    </div>
  </div>
</div>

@endsection


@section('content-script')

@endsection