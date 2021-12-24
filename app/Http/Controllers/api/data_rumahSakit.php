<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\data_master\dataRumahSakit;

class data_rumahSakit extends Controller
{
    public function index()
    {
        $posts = dataRumahSakit::all();
        return view('data-master.rumahSakit', [
            'dataRumahSakit' => $posts
        ]);
    }

    public function getData()
    {
        $posts = dataRumahSakit::all();
        return response([
            'success' => true,
            'message' => 'List Semua Rumah Sakit',
            'data' => $posts
        ], 200);
    }

    public function store(Request $request)
    {
        //validate data
        $validator = Validator::make(
            $request->all(),
            [
                'nama' => 'required',
                'wilayah' => 'required',
                'alamat' => 'required',
                'jumlah_kamar'     => 'required',
                'jumlah_ambulan'     => 'required',
                'kamar_kosong'     => 'required',
                'lat'     => 'required',
                'long'     => 'required',
                'foto'     => 'required',
            ],
            [
                'nama.required' => 'Masukkan Nama Markas  !',
                'wilayah.required' => 'Masukkan Wilayah !',
                'alamat.required' => 'Masukkan Alamat !',
                'jumlah_kamar.required' => 'Masukkan Jumlah Kamar!',
                'jumlah_ambulan.required' => 'Masukkan Jumlah Ambulan!',
                'kamar_kosong.required' => 'Masukkan Jumlah Kamar Kosong!',
                'lat.required' => 'Masukkan Lat!',
                'long.required' => 'Masukkan Long!',
                'foto.required' => 'Masukkan Foto Markas!',
            ]
        );

        if ($validator->fails()) {

            return response()->json([
                'success' => false,
                'message' => 'Silahkan Isi Bidang Yang Kosong',
                'data'    => $validator->errors()
            ], 400);
        } else {
            // save gambar
            $gambar = $request->file('foto');
            $nama_gambar = time() . "_" . $gambar->getClientOriginalName();
            $dest = 'img/markas-damkar';
            $gambar->move($dest, $nama_gambar);

            $post = dataRumahSakit::create([
                'nama'     => $request->input('nama'),
                'wilayah'   => $request->input('wilayah'),
                'alamat'   => $request->input('alamat'),
                'jumlah_kamar'   => $request->input('jumlah_kamar'),
                'jumlah_ambulan'   => $request->input('jumlah_ambulan'),
                'kamar_kosong'   => $request->input('kamar_kosong'),
                'lat'   => $request->input('lat'),
                'long'   => $request->input('long'),
                'foto'   => $nama_gambar,
            ]);

            if ($post) {
                return response()->json([
                    'success' => true,
                    'message' => 'dataRumahSakit Berhasil Disimpan!',
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'dataRumahSakit Gagal Disimpan!',
                ], 400);
            }
        }
    }


    public function show($id)
    {
        $post = dataRumahSakit::whereId($id)->first();

        if ($post) {
            return response()->json([
                'success' => true,
                'message' => 'Detail dataRumahSakit!',
                'data'    => $post
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'dataRumahSakit Tidak Ditemukan!',
                'data'    => ''
            ], 404);
        }
    }

    public function update(Request $request)
    {
        //validate data
        $validator = Validator::make(
            $request->all(),
            [
                'nama' => 'required',
                'kategori' => 'required',
                'instansi'     => 'required',
            ],
            [
                'nama.required' => 'Masukkan Nama Petani !',
                'kategori.required' => 'Masukkan Luas Lahan Petani !',
                'instansi.required' => 'Masukkan Tanggal Join Ahli Petani !',
            ]
        );

        if ($validator->fails()) {

            return response()->json([
                'success' => false,
                'message' => 'Silahkan Isi Bidang Yang Kosong',
                'data'    => $validator->errors()
            ], 400);
        } else {

            $post = dataRumahSakit::whereId($request->input('id'))->update([
                'nama'     => $request->input('nama'),
                'kategori'   => $request->input('kategori'),
                'instansi'   => $request->input('instansi'),
            ]);


            if ($post) {
                return response()->json([
                    'success' => true,
                    'message' => 'dataRumahSakit Berhasil Diupdate!',
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'dataRumahSakit Gagal Diupdate!',
                ], 500);
            }
        }
    }

    public function destroy($id)
    {
        $post = dataRumahSakit::findOrFail($id);
        $post->delete();

        if ($post) {
            return response()->json([
                'success' => true,
                'message' => 'dataRumahSakit Berhasil Dihapus!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'dataRumahSakit Gagal Dihapus!',
            ], 500);
        }
    }
}
