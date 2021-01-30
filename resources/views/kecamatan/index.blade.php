@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header"><center><b>{{ __('Data Kecamatan') }}</b></center></div>

                <div class="card-body">
                <a href="{{route('kecamatan.create')}}"class="btn btn-primary float-right"><b>Tambah Data+</b></a>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  <table id=""class="table table-bordered table-striped">
                    <thead>
                      <tr class="bg-info">
                        <th scope="col">No</th>
                        <th scope="col"><center>Kota</center></th>
                        <th scope="col"><center>Kode Kecamatan</center></th>
                        <th scope="col"><center>Kecamatan</center></th>
                        <th scope="col"><center>Action</center></th>
                      </tr>
                    </thead>
                    <tbody>
                    @php $no = 1; @endphp
                    @foreach($kecamatan as $data)
                      <tr>
                        <th scope="row">{{$no++}}</th>
                        <td><center>{{$data->kota->nama_kota}}<center></td>
                        <td><center>{{$data->kode_kecamatan}}</center></td>
                        <td><center>{{$data->nama_kecamatan}}</center></td>
                        <form action="{{route('kecamatan.destroy', $data->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <td>
                              <a href="{{route('kecamatan.show', $data->id)}}" class="btn btn-success">Show</a>
                                <a href="{{route('kecamatan.edit', $data->id)}}" class="btn btn-warning">Edit </a>
                                  <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ?')">Hapus</button>
                        </td>
                      </tr>
                          </form>
                      @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
