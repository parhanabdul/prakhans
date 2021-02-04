<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Kelurahan;
use App\Models\Rw;
use App\Models\provinsi;
use App\Models\Kasus2;
use App\Htpp\Controllers\Api\ProvinsiController;
use App\Http\Controllers\Api\ApiController;


class ApiController extends Controller
{
    
    public function sprovinsi()
    {
        $tampil = DB::table('provinsis')
        ->join('kotas','kotas.id_provinsi','=','provinsis.id')
        ->join('kecamatans','kecamatans.id_kota','=','kotas.id')
        ->join('kelurahans','kelurahans.id_kecamatan','=','kecamatans.id')
        ->join('rws','rws.id_kelurahan','=','kelurahans.id')
        ->join('kasus2s','kasus2s.id_rw','=','rws.id')
        ->select('nama_provinsi',
        DB::raw('sum(kasus2s.jumlah_positif) as jumlah_positif'),
        DB::raw('sum(kasus2s.jumlah_sembuh) as jumlah_sembuh'),
        DB::raw('sum(kasus2s.jumlah_meninggal) as jumlah_meninggal'))
        ->groupBy('nama_provinsi')
        ->get();

        $data = [
            'success' => true,
            'Data Provinsi' => $tampil,
            'message' => 'Data Kasus Di tampilkan'
        ];
return response()->json($data,200);

    }

    public function skota()
    {
        $tampil = DB::table('kotas')
        ->join('kecamatans','kecamatans.id_kota','=','kotas.id')
        ->join('kelurahans','kelurahans.id_kecamatan','=','kecamatans.id')
        ->join('rws','rws.id_kelurahan','=','kelurahans.id')
        ->join('kasus2s','kasus2s.id_rw','=','rws.id')
        ->select('nama_kota','kode_kota',
        DB::raw('sum(kasus2s.jumlah_positif) as jumlah_positif'),
        DB::raw('sum(kasus2s.jumlah_sembuh) as jumlah_sembuh'),
        DB::raw('sum(kasus2s.jumlah_meninggal) as jumlah_meninggal'))
        ->groupBy('nama_kota','kode_kota')
        ->get();

        $data = [
            'success' => true,
            'Data Provinsi' => $tampil,
            'message' => 'Data Kasus Di tampilkan'
        ];
return response()->json($data,200);

    }


    public function skecamatan()
    {
        $tampil = DB::table('kecamatans')
        ->join('kelurahans','kelurahans.id_kecamatan','=','kecamatans.id')
        ->join('rws','rws.id_kelurahan','=','kelurahans.id')
        ->join('kasus2s','kasus2s.id_rw','=','rws.id')
        ->select('nama_kecamatan','kode_kecamatan',
        DB::raw('sum(kasus2s.jumlah_positif) as jumlah_positif'),
        DB::raw('sum(kasus2s.jumlah_sembuh) as jumlah_sembuh'),
        DB::raw('sum(kasus2s.jumlah_meninggal) as jumlah_meninggal'))
        ->groupBy('nama_kecamatan','kode_kecamatan')
        ->get();

        $data = [
            'success' => true,
            'Data Provinsi' => $tampil,
            'message' => 'Data Kasus Di tampilkan'
        ];
return response()->json($data,200);

    }

    public function skelurahan()
    {
        $tampil = DB::table('kelurahans')
        ->join('rws','rws.id_kelurahan','=','kelurahans.id')
        ->join('kasus2s','kasus2s.id_rw','=','rws.id')
        ->select('nama_kelurahan','kode_kelurahan',
        DB::raw('sum(kasus2s.jumlah_positif) as jumlah_positif'),
        DB::raw('sum(kasus2s.jumlah_sembuh) as jumlah_sembuh'),
        DB::raw('sum(kasus2s.jumlah_meninggal) as jumlah_meninggal'))
        ->groupBy('nama_kelurahan','kode_kelurahan')
        ->get();

        $data = [
            'success' => true,
            'Data Provinsi' => $tampil,
            'message' => 'Data Kasus Di tampilkan'
        ];
return response()->json($data,200);

    }
    
    public function hari(){
   $kasus2 = kasus2::get('created_at')->last();
         $jumlah_positif = kasus2::where('tanggal', date('Y-m-d'))->sum('jumlah_positif');
         $jumlah_sembuh = kasus2::where('tanggal', date('Y-m-d'))->sum('jumlah_sembuh');
         $jumlah_meninggal = kasus2::where('tanggal', date('Y-m-d'))->sum('jumlah_meninggal');

         $join = DB::table('kasus2s')
                     ->select('jumlah_positif', 'jumlah_sembuh', 'jumlah_meninggal')
                     ->join('rws' ,'kasus2s.id_rw', '=', 'rws.id')
                     ->get();
         $arr1 = [
             'jumlah_positif' =>$join->sum('jumlah_positif'),
             'jumlah_sembuh' =>$join->sum('jumlah_sembuh'),
             'jumlah_meninggal' =>$join->sum('jumlah_meninggal'),
         ];
         $arr2 = [
             'jumlah_positif' =>$jumlah_positif,
             'jumlah_sembuh' =>$jumlah_sembuh,
             'jumlah_meninggal' =>$jumlah_meninggal,
         ];
         $arr = [
             'status' => 200,
             'data' => [
                 'Hari Ini' => $arr2,
                 'total' => $arr1
             ],
             'message' => 'Berhasil'
         ];
        
         return response()->json($arr, 200);
    }


  
    public function create()
    {
        
    }

 
    public function store(Request $request)
    {
      
    
    }


    public function show($id)
    {
        
    }


    public function edit($id)
    {
        
    }


    public function update(Request $request, $id)
    {
        
    }


    public function destroy($id)
    {
        
    }
}
