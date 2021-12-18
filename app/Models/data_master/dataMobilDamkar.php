<?php

namespace App\Models\data_master;

use Illuminate\Database\Eloquent\Model;

class dataMobilDamkar extends Model
{
    protected $table = "data_damkar";
    protected $fillable = [
        'markas_id', 'flat_nomor', 'wilayah', 'status', 'foto'
    ];
}