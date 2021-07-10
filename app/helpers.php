<?php

use Carbon\Carbon as Carbon;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;


function active_class($path, $active = 'active') {
  return call_user_func_array('Request::is', (array)$path) ? $active : '';
}

function is_active_route($path) {
  return call_user_func_array('Request::is', (array)$path) ? 'true' : 'false';
}

function show_class($path) {
  return call_user_func_array('Request::is', (array)$path) ? 'show' : '';
}

function generateKodePustaka($kode_bawaan){

    return $kode = strtoupper(preg_replace("/[^bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ]/", "", $kode_bawaan));

}

/** Function generate kode Aset */
function generateKode($tanggal,$kode_satuan,$nama){

    $date = strtotime($tanggal);
    $date_format = date('Y-m-d',$date);
    $tanggal = substr($date_format,8,2);
    $bulan = substr($date_format,5,2);
    $bulan_romawi = getRomawi($bulan);
    $tahun = substr($date_format,2,2);

    $nama_asset = generateKodePustaka($nama);

    return $kode = $nama_asset . '/' . $kode_satuan . '/' . $tanggal . '/' . $bulan_romawi . '/' . $tahun;
}

/**Function mendapatkan bilangan romawi untuk generate */
function getRomawi($bln){
    switch ($bln){
        case 1:
            return "I";
            break;
        case 2:
            return "II";
            break;
        case 3:
            return "III";
            break;
        case 4:
            return "IV";
            break;
        case 5:
            return "V";
            break;
        case 6:
            return "VI";
            break;
        case 7:
            return "VII";
            break;
        case 8:
            return "VIII";
            break;
        case 9:
            return "IX";
            break;
        case 10:
            return "X";
            break;
        case 11:
            return "XI";
            break;
        case 12:
            return "XII";
            break;
        }
    }

/** Function Ubah format waktu */
function dateFormat($tanggal){
    $date = strtotime($tanggal);
    $date_format = date('Y-m-d',$date);

    return $date_format;
}

/** Function Generate QrCode */
function generateQrKode($kode_asset,$nama_asset){
    

    $qrCode = QrCode::size(100)->generate('Kode Aset : '.$kode_asset.'  '.'Nama Aset : '.$nama_asset);

    return $qrCode;
}

/** Function Penyusutan Aset */
function penyusutanAset($tanggal){
    $tanggal_terima = Carbon::parse($tanggal);
    $sekarang = Carbon::now();

    return $diff = $tanggal_terima->diffInYears($sekarang);

}

/** Function Masa Pakai Aset */
function masaPakaiAset($masa_pakai){

    return $penyebut = 100 / $masa_pakai;

}

function storeGambar($gambar){
    
        $nm = $gambar;
        $namaFile = time() . rand(100, 999) . "." .$nm->getClientOriginalExtension();
        $nm->move(public_path() . '/img', $namaFile);
    
    return $namaFile;

}

