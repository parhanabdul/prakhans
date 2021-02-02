<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\provinsi;

class ProvinsiController extends Controller
{
    public function index()
    {
        $provinsi = Provinsi::latest()->get();
      $res = [
          'success' => true,
          'data' => $provinsi,
          'message' => 'Data Provinsi Di Tampilkan'
      ];

      return response()->json($res,200);


    }
     
    // public function index()
    // {
    //     //
    // }

    
    // public function create()
    // {
    //     //
    // }

    
    public function store(Request $request)
    {
        $provinsi = new provinsi();
        $provinsi->kode_provinsi = $request->kode_provinsi;
        $provinsi->nama_provinsi = $request->nama_provinsi;
        $provinsi->save();

        $res = [
            'success'=> true,
            'data' => $provinsi,
            'message' => 'data berhasil di simpan'
        ];

        return response()->json($res,200);
    }

    
    public function show($id)
    {
        $provinsi = provinsi::whereId($id)->first();
      $res = [
          'success' => true,
          'data' => $provinsi,
          'message' => 'Berhasil'
      ];

      return response()->json($res,200);
    }

    
    public function edit($id)
    {
        //
    }

    
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    
    public function destroy($id)
    {
        $provinsi = provinsi::findOrFail($id);
        $provinsi->delete();
    if($provinsi){
        return response()->json([ 
            'success' => true,
            'message' => 'data berhasil dihapus',
        ],500);
    } else {
        return response()->json([
            'success' => false,
            'message' => 'data gagal dihapus',

        ],500);
    }
        
    }
}