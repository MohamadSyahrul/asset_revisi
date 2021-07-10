<?php

namespace App\Http\Controllers;

use App\Aset;
use App\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatistikController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        
        $total_aset = Aset::count();
        
        // $aset  = Aset::select('nama_asset as nama','kategori as id_kategori')->get();
        // $kategori = Kategori::select('id as id','nama_kategori as kategori')->get();
        
        $kategoris = Kategori::select(DB::raw('id, nama_kategori'))
                    ->groupby('id')
                    ->get();
        
        $asets      = Aset::select(DB::raw('kategori, count(id) as total'))
                    ->groupby('kategori')
                    ->get();
        
        $baik = Aset::where('keadaan_awal', '2')->count();
        $rusak_ringan = Aset::where('keadaan_awal', '1')->count();
        $rusak_berat = Aset::where('keadaan_awal', '0')->count();
        
        $tetap = Aset::where('jenis_asset', '1')->count();
        $bergerak = Aset::where('jenis_asset', '0')->count();
        
        $persentase_baik = ($baik / $total_aset) * 100 / 100;
        $persentase_rusak = ($rusak_ringan / $total_aset) * 100 / 100;
        $persentase_rusak_berat = ($rusak_berat / $total_aset) * 100 / 100;
        
        $persentase_tetap = ($tetap / $total_aset) * 100 / 100;
        $persentase_bergerak = ($bergerak / $total_aset) * 100 / 100;
        
        return view('statistik',[
            'total_aset'            => $total_aset,
            // 'aset'                  => $aset,
            // 'kategori'              => $kategori,
            'asets'                 => $asets,
            'kategoris'             => $kategoris,
            'persentase_baik'       => $persentase_baik,
            'persentase_rusak'      => $persentase_rusak,
            'persentase_tetap'      => $persentase_tetap,
            'persentase_bergerak'   => $persentase_bergerak,
            'persentase_rusak_berat'=> $persentase_rusak_berat,
            ]);
    }
}
