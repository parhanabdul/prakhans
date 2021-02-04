@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-20">
            <div class="card">
                <div class="card-header"><center><b>{{ __('Data Kasus Local') }}</b></center></div>

                <div class="card-body">
                <a href="{{route('kasus2.create')}}"class="btn btn-primary float-right"><b>Tambah Data+</b></a>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                  <table id="example1" class="table table-bordered table-striped">
                  <thead>
                      <tr class="bg-info">
                        <th scope="col">No</th>
                          <th scope="col"><center>Lokasi</center></th>
                          <th scope="col"><center>Nama Rw</center></th>
                          <th scope="col"><center>Jumlah Positif</center></th>
                          <th scope="col"><center>Jumlah Meninggal</center></th>
                          <th scope="col"><center>Jumlah Sembuh</center></th>
                          <th scope="col"><center>Tanggal</center></th>
                          <th scope="col"><center>Action</center></th>
                      </tr>
                    </thead>
                    <tbody>
                    @php $no = 1; @endphp
                    @foreach($kasus2 as $data)
                      <tr>
                        <th scope="row">{{$no++}}</th>
                        <td>
                    <center>
                      Provinsi : {{$data->rw->kelurahan->kecamatan->kota->provinsi->nama_provinsi}}<br>
                      Kota : {{$data->rw->kelurahan->kecamatan->kota->nama_kota}}<br>
                      Kecamatan : {{$data->rw->kelurahan->kecamatan->nama_kecamatan}}<br>
                      Kelurahan : {{$data->rw->kelurahan->nama_kelurahan}}<br>
                    </center>
                      </td>
                          <td>{{$data->rw->nama}}</td>
                          <td>{{$data->jumlah_positif}}</td>
                          <td>{{$data->jumlah_meninggal}}</td>
                          <td>{{$data->jumlah_sembuh}}</td>
                          <td>{{$data->tanggal}}</td>
                        <form action="{{route('kasus2.destroy', $data->id)}}" method="post">
                              @csrf
                              @method('DELETE')
                              <td>
                               <a class="btn btn-success btn-sm" href="{{route('kasus2.show', $data->id)}}">Show</a>
                               <a class="btn btn-warning btn-sm" href="{{route('kasus2.edit', $data->id)}}"> Edit</a>
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
