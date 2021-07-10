<?php

namespace App\Imports;

use App\Aset;
use Maatwebsite\Excel\Concerns\ToModel;

class AsetImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // dd($row);
        return new Aset([
        'kode_asset' => $row[0],
        'nama_asset' => $row[1],
        'kode_satuan' => $row[2],
        'jenis_asset' => $row[3],
        'kategori' => $row[4],
        'keadaan_awal' => $row[5],
        // 'tanggal_terima' => $row[6],
        'tanggal_terima' => dateFormat($row[6]),
        'batas_pemakaian' => $row[7],
        // 'penyusutan_asset' => $row[8],
        'lokasi_asset' => $row[8],
        'nilai_asset' => $row[9],
        'merk_aset' => $row[10],
        'koordinat_asset' => $row[11],
        'keterangan'=> $row[12],
        'quantity' => $row[13],
        'total' => $row[14],
        ]);
    }
}
