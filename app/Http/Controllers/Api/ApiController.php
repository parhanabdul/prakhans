<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Provinsi;
use  Illuminate\support\facades\DB;

class ApiController extends Controller
{
    
    public function index()
    {
        $positif = DB::table('rws')
                    ->select('kasus2.jumlah_reaktif','kasus2.jumlah_positif','kasus2.jumlah_sembuh','kasus2.jumlah_meninggal')
                    ->join('kasus2','rws.id','=','kasus2.id_rw')
                    ->sum('kasus2.jumlah_positif');

        $sembuh = DB::table('rws')
                    ->select('kasus2.jumlah_reaktif','kasus2.jumlah_positif','kasus2.jumlah_sembuh',
                            'kasus2.jumlah_meninggal')
                    ->join('kasus2','rws.id','=','kasus2.id_rw')
                    ->sum('kasus2.jumlah_sembuh');

        $meninggal = DB::table('rws')
                    ->select('kasus2.jumlah_reaktif','kasus2.jumlah_positif','kasus2.jumlah_sembuh',
                            'kasus2.jumlah_meninggal')
                    ->join('kasus2','rws.id','=','kasus2.id_rw')
                    ->sum('kasus2.jumlah_sembuh');


                    

    }

  
    public function create()
    {
        //
    }

 
    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
