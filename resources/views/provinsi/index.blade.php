@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header"><center><b>{{ __('Data Provinsi') }}</b></center></div>

                <div class="card-body">
                <a href="{{route('provinsi.create')}}"class="btn btn-primary float-right "><b>Tambah Data+</b></a>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                 
                  <table id="id=example1" class="table table-bordered table-striped">
                    <thead>
                      <tr class="bg-info">
                        <th scope="col">No</th>
                        <th scope="col"><center>Kode Provinsi</center></th>
                        <th scope="col"><center>Nama Provinsi</center></th>
                        <th scope="col"><center>Action</center></th>
                      </tr>
                    </thead>
                    <tbody>
                    @php $no = 1; @endphp
                    @foreach($provinsi as $data)
                      <tr>
                        <th scope="row">{{$no++}}</th>
                        <td><center>{{$data->kode_provinsi}}</center></td>
                        <td><center>{{$data->nama_provinsi}}</center></td>
                        <form action="{{route('provinsi.destroy', $data->id)}}" method="post">
                              @csrf
                              @method('DELETE')
                        <td>
                          <center>
                            <a href="{{route('provinsi.show', $data->id)}}" class="btn btn-success">Show</a>
                            <a href="{{route('provinsi.edit', $data->id)}}" class="btn btn-warning">Edit</a>
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Dihapus ?')">Hapus</button>
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
