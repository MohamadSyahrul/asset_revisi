<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Kategori extends Model
{
    protected $primaryKey = "id";
    protected $fillable = [
        'kode_kategori', 'nama_kategori',
    ];

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])
        ->translatedFormat('l, d F Y');
    }
    public function aset()
    {
        return $this->hasOne( Aset::class, 'kategori', 'id' );
    }
}
