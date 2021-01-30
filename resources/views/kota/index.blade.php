@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header"><center><b>{{ __('Data Kota') }}</b></center></div>

                <div class="card-body">
                <a href="{{route('kota.create')}}"class="btn btn-primary float-right"><b>Tambah Data+</b></a>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                  @endif
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr class="bg-info">
                        <th scope="col">No</th>
                        <th scope="col"><center>Provinsi</center></th>
                        <th scope="col"><center>Kode Kota</center></th>
                        <th scope="col"><center>Nama Kota</center></th>
                        <th scope="col"><center>Action</center></th>
                      </tr>
                    </thead>
                    <tbody>
                    @php $no = 1; @endphp
                    @foreach($kota as $data)
                      <tr>
                        <th scope="row">{{$no++}}</th>
                        <td><center>{{$data->provinsi->nama_provinsi}}</center></td>
                        <td><center>{{$data->kode_kota}}</center></td>
                        <td><center>{{$data->nama_kota}}</center></td>
                      <form action="{{route('kota.destroy', $data->id)}}" method="post">
                       @csrf
                        @method('DELETE')
                      <td>
                        <center>
                          <a href="{{route('kota.show', $data->id)}}" class="btn btn-success">Show</a>
                          <a href="{{route('kota.edit', $data->id)}}" class="btn btn-warning">Edit</a>
                          <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ?')">Hapus</button>
                        </center>
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
