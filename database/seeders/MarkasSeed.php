<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;

class MarkasSeed extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\data_master\dataMarkasDamkar::truncate();

        \App\Models\data_master\dataMarkasDamkar::create([
            'nama' => 'DAMKAR Kota Bandung',
            'wilayah' => 'Bandung',
            'alamat' => 'Cipamokolan, Rancasari, Bandung City, West Java 40292',
            'jumlah_armada'     => '100',
            'jumlah_personil'     => '200',
            'lat'     => '-6.938920',
            'long'     => '107.676559',
            'foto'     => 'markasbdg.jpg',
        ]);
        \App\Models\data_master\dataMarkasDamkar::create([
            'nama' => 'Pemadam Kebakaran Kota Garut',
            'wilayah' => 'Garut',
            'alamat' => 'Jl. Merdeka No.100, Haurpanggung, Kec. Tarogong Kidul, Kabupaten Garut, Jawa Barat 44151',
            'jumlah_armada'     => '50',
            'jumlah_personil'     => '100',
            'lat'     => '-7.201311',
            'long'     => '107.903238',
            'foto'     => 'markasgrt.jpg',
        ]);
    }
}
