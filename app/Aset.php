<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Aset extends Model
{
    protected $table = "asets";
    protected $fillable =[
        'kode_asset',
        'nama_asset',
        'kode_satuan',
        'jenis_asset',
        'kategori',
        'keadaan_awal',
        'tanggal_terima',
        'batas_pemakaian',
        'penyusutan_asset',
        'lokasi_asset',
        'nilai_asset',
        'merk_aset',
        'koordinat_asset',
        'keterangan',
        'quantity',
        'total',
        'deleted_at',
    ];

    public function foto()
    {
    	return $this->hasOne('App\FotoAset');
    }
    
    public function kategori()
    {
        return $this->belongsTo( Kategori::class, 'kategori', 'id' );
    }

    public function lokasi()
    {
        return $this->belongsTo( lokasi::class, 'lokasi_asset', 'id' );
    }
    public function satker()
    {
        return $this->belongsTo( Satuankerja::class, 'kode_satuan', 'id' );
    }

    // public function getTanggalTerimaAttribute()
    // {
    //     return Carbon::parse($this->attributes['tanggal_terima'])
    //     ->translatedFormat('l, d F Y');
    // }
}
