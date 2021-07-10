<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FotoAset extends Model
{
    protected $fillable =[
        'kode_asset',
        'foto_utama',
        'foto_1',
        'foto_2',
        'deleted_at',
    ];

    public function aset()
    {
    	return $this->belongsTo('App\Aset');
    }
}
