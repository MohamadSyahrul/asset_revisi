<?php

namespace App\Http\Controllers;

use App\Aset;
use App\Lokasi;
use App\FotoAset;
use App\Kategori;
use Illuminate\Http\Request;

class TrackingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.tracking.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tracking(Request $request)
    {
        if($request){
            $data = Aset::where('kode_asset', 'like', '%'. $request->cari.'%')->get();
        }else{
            $data = Aset::all();
        }
        $lokasi = Lokasi::all();
        $data_kategori = Kategori::all();

        $qrCode = generateQrKode($data[0]->kode_asset, $data[0]->nama_asset);
        $foto = FotoAset::where('kode_asset', $data[0]->kode_asset)->get();
        return view('pages.tracking.hasil', [
            'data' => $data,
            'lokasi' =>$lokasi,
            'data_kategori'=>$data_kategori,
            'qrCode' => $qrCode,
            'foto'=>$foto
        ]);
    }
}
