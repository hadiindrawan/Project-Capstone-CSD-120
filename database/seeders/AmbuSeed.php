<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;

class AmbuSeed extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\data_master\dataAmbulans::truncate();

        \App\Models\data_master\dataAmbulans::create([
            'rumahsakit_id' => '1',
            'flat_nomor'     => 'D 12 A',
            'wilayah'   => 'Bandung',
            'status'   => 'Beroperasi',
            'lat'   => '-6.916799',
            'lng'   => '107.628317',
            'foto'   => 'ambud12a.jpg',
        ]);
        \App\Models\data_master\dataAmbulans::create([
            'rumahsakit_id' => '2',
            'flat_nomor'     => 'D 55 A',
            'wilayah'   => 'Bandung',
            'status'   => 'Tidak beroperasi',
            'lat'   => '-6.915547',
            'lng'   => '107.699156',
            'foto'   => 'ambud55a.jpg',
        ]);
        \App\Models\data_master\dataAmbulans::create([
            'rumahsakit_id' => '3',
            'flat_nomor'     => 'D 100 A',
            'wilayah'   => 'Bandung',
            'status'   => 'Beroperasi',
            'lat'   => '-6.837124',
            'lng'   => '107.621132',
            'foto'   => 'ambud100a.jpg',
        ]);
        \App\Models\data_master\dataAmbulans::create([
            'rumahsakit_id' => '3',
            'flat_nomor'     => 'D 80 A',
            'wilayah'   => 'Bandung',
            'status'   => 'Beroperasi',
            'lat'   => '-6.897116',
            'lng'   => '107.584054',
            'foto'   => 'ambud80a.jpg',
        ]);
    }
}
