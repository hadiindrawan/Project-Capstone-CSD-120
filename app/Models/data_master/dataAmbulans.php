<?php

namespace App\Models\data_master;

use Illuminate\Database\Eloquent\Model;

class dataAmbulans extends Model
{
    protected $table = "data_ambulans";
    protected $fillable = [
        'flat_nomor', 'wilayah', 'status'
    ];
}