<?php

namespace App\Models\data_master;

use Illuminate\Database\Eloquent\Model;

class dataRumahSakit extends Model
{
    protected $table = "data_rumahsakit";
    protected $fillable = [
        'nama', 'wilayah', 'jumlah_kamar', 'jumlah_ambulan', 'kamar_kosong', 'lat', 'long', 'foto'
    ];
}