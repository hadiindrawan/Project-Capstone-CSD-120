<?php

namespace App\Models\data_master;

use Illuminate\Database\Eloquent\Model;

class dataMarkasDamkar extends Model
{
    protected $table = "data_markasdamkar";
    protected $fillable = [
        'nama', 'wilayah', 'alamat', 'jumlah_armada', 'jumlah_personil', 'lat', 'long', 'foto'
    ];
}