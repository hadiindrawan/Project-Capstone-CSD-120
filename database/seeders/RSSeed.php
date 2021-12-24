<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;

class RSSeed extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\data_master\dataRumahSakit::truncate();

        \App\Models\data_master\dataRumahSakit::create([
            'nama' => 'RSUP Hasan Sadikin',
            'wilayah' => 'Bandung',
            'alamat' => 'Jl. Pasteur No.38 Bandung',
            'jumlah_kamar'     => '200',
            'jumlah_ambulan'     => '20',
            'kamar_kosong'     => '100',
            'lat'     => '-6.898468',
            'long'     => '107.598259',
            'foto'     => 'RSHS.jpg',
        ]);
        \App\Models\data_master\dataRumahSakit::create([
            'nama' => 'RSUD Ujung Berung Kota Bandung',
            'wilayah' => 'Bandung',
            'alamat' => 'Jl. Rumah Sakit No.22 Bandung',
            'jumlah_kamar'     => '150',
            'jumlah_ambulan'     => '10',
            'kamar_kosong'     => '100',
            'lat'     => '-6.915595',
            'long'     => '107.698836',
            'foto'     => 'RSUber.jpg',
        ]);
        \App\Models\data_master\dataRumahSakit::create([
            'nama' => 'RSKIA Kota Bandung',
            'wilayah' => 'Bandung',
            'alamat' => 'Jl. Rumah Sakit No.22 Bandung',
            'jumlah_kamar'     => '150',
            'jumlah_ambulan'     => '10',
            'kamar_kosong'     => '100',
            'lat'     => '-6.929340',
            'long'     => '107.600439',
            'foto'     => 'RSKia.jpg',
        ]);
        \App\Models\data_master\dataRumahSakit::create([
            'nama' => 'RS Mata Cicendo',
            'wilayah' => 'Bandung',
            'alamat' => 'Jl. Cicendo No.4 Bandung',
            'jumlah_kamar'     => '80',
            'jumlah_ambulan'     => '5',
            'kamar_kosong'     => '50',
            'lat'     => '-6.910057',
            'long'     => '107.604575',
            'foto'     => 'RSMata.jpg',
        ]);
        \App\Models\data_master\dataRumahSakit::create([
            'nama' => 'RSP Dr.H.A. Rotinsulu',
            'wilayah' => 'Bandung',
            'alamat' => 'Jl. Bukit Jarian No.40 Bandung',
            'jumlah_kamar'     => '50',
            'jumlah_ambulan'     => '2',
            'kamar_kosong'     => '40',
            'lat'     => '-6.877709',
            'long'     => '107.606511',
            'foto'     => 'RSBukit.jpg',
        ]);
    }
}
