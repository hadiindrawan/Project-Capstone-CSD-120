<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;

class mobilPKSeed extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\data_master\dataMobilDamkar::truncate();

        \App\Models\data_master\dataMobilDamkar::create([
            'markas_id' => '1',
            'flat_nomor'     => 'D 120 A',
            'wilayah'   => 'Bandung',
            'status'   => 'Tidak beroperasi',
            'lat'   => '-6.93892',
            'lng'   => '107.67657',
            'foto'   => 'pkd120a.jpg',
        ]);
        \App\Models\data_master\dataMobilDamkar::create([
            'markas_id' => '2',
            'flat_nomor'     => 'Z 558 A',
            'wilayah'   => 'Garut',
            'status'   => 'Tidak beroperasi',
            'lat'   => '-7.201319',
            'lng'   => '107.903238',
            'foto'   => 'pkz558a.jpg',
        ]);
    }
}
