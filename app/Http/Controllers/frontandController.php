<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Models\Kelurahan;
use App\Models\Rw;
use App\Models\provinsi;
use App\Models\Kasus2;


class frontandController extends Controller
{

    public function index()
    {
        $positif = DB::table('rws')
        ->select('kasus2s.jumlah_positif','kasus2s.jumlah_sembuh','kasus2s.jumlah_meninggal')
        ->join ('kasus2s','rws.id','=','kasus2s.id_rw')
        ->sum('kasus2s.jumlah_positif');
       
       
        $sembuh = DB::table('rws')
        ->select('kasus2s.jumlah_positif','kasus2s.jumlah_sembuh','kasus2s.jumlah_meninggal')
        ->join ('kasus2s','rws.id','=','kasus2s.id_rw')
        ->sum('kasus2s.jumlah_sembuh');

        $meninggal = DB::table('rws')->select('kasus2s.jumlah_positif','kasus2s.jumlah_sembuh','kasus2s.jumlah_meninggal')
        ->join ('kasus2s','rws.id','=','kasus2s.id_rw')
        ->sum('kasus2s.jumlah_meninggal');

        return view('frontand.welcome', 
            compact('positif','sembuh','meninggal'));
    }
}