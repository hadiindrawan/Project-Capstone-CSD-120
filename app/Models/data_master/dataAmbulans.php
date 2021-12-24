<?php

namespace App\Models\data_master;

use Illuminate\Database\Eloquent\Model;

class dataAmbulans extends Model
{
    protected $table = "data_ambulans";
    protected $fillable = [
        'rumahsakit_id', 'flat_nomor', 'wilayah', 'status',
        'lat', 'long', 'foto'
    ];
}
