<?php

namespace App\Http\Controllers\Admin;

use App\Aset;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PenyusutanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Aset::all();

        // dd($data);
        // Penyusutan
        $penyusutan = penyusutanAset($data[0]->tanggal_terima);

        $penyebut = 100 / $data[0]->batas_pemakaian;

        $persentase = $data[0]->keterangan - ($penyusutan*$penyebut);
        return view('pages.data-asset.penyusutan.penyusutan-aset',[
            'aset' => $data,
            'penyusutan' => $penyusutan,
            'persentase' => $persentase,
        ]);
    }
}
