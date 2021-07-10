<?php

namespace App\Http\Controllers;

use App\Aset;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
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
        $total_jenis = DB::table('asets')
                    ->select(
                        DB::raw('YEAR(tanggal_terima) as year'),
                        DB::raw('SUM(nilai_asset) as sum'),
                        DB::raw('SUM(jenis_asset) as jenis'),
                    )
                    ->groupBy(DB::raw("Year(tanggal_terima),(jenis_asset)"))
                    ->get();

        $nilai_total = DB::table('asets')
                    ->select(
                        DB::raw('YEAR(tanggal_terima) as year'),
                        DB::raw('SUM(nilai_asset) as sum'),
                    )
                    ->groupBy(DB::raw("Year(tanggal_terima)"))
                    ->get();
        $aset = Aset::count();
        $aset_tetap = Aset::where('jenis_asset', '1')->count();
        $aset_bergerak = Aset::where('jenis_asset', '0')->count();

        return view('dashboard',[
            'aset' => $aset,
            'aset_tetap' => $aset_tetap,
            'aset_bergerak' => $aset_bergerak,
            'nilaiTotal'=>$nilai_total,
            'totalJenis'=>$total_jenis,
            // 'nilaiTetap'=>$nilaiTetap
        ]);
    }
}
