<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Lokasi extends Model
{
    protected $primaryKey = "id";
    protected $fillable = [
        'nama_lokasi', 'penanggung_jawab'
    ];

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])
        ->translatedFormat('l, d F Y');
    }
    public function jenis_aset()
    {
        return $this->hasOne( Aset::class, 'lokasi_asset', 'id' );
    }
    
}
