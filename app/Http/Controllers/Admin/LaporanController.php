<?php

namespace App\Http\Controllers\Admin;

use App\Aset;
use App\Lokasi;
use App\Kategori;
use App\Satuankerja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class LaporanController extends Controller
{
    public function data_aset(){
        
      
        $data = Aset::all();
        $lokasi = Lokasi::all();
        $data_kategori = Kategori::all();
        
        return view('pages.laporan.data-aset',[
            'data' => $data,
            'lokasi' =>$lokasi,
            'data_kategori'=>$data_kategori
        ]);
    }
    
}
