<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Satuankerja extends Model
{
    protected $table = "satuan_kerja";
    // protected $primaryKey = "id";
    protected $fillable = [
        'kode_satuan', 'nama_satuan', 'slug'
    ];

    public function user(){
        return $this->hasMany(User::class, 'satuan_kerja_id', 'id');
    }

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])
        ->translatedFormat('l, d F Y');
    }

    public function satuan_aset(){
        return $this->hasOne(Aset::class, 'kode_satuan', 'id');
    }
    
}
