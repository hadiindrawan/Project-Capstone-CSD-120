<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\data_master\dataMarkasDamkar;

class data_markasDamkar extends Controller
{
    public function index()
    {
        $posts = dataMarkasDamkar::all();
        return view('data-master.markasDamkar', [
            'dataMarkasDamkar' => $posts
        ]);
    }

    public function getData()
    {
        $posts = dataMarkasDamkar::all();
        return response(
            [
                'success' => true,
                'message' => 'List Semua Rumah Sakit',
                'data' => $posts
            ],
            200
        );
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
                'jumlah_armada'     => 'required',
                'jumlah_personil'     => 'required',
                'lat'     => 'required',
                'long'     => 'required',
                'foto'     => 'required',
            ],
            [
                'nama.required' => 'Masukkan Nama Markas  !',
                'wilayah.required' => 'Masukkan Wilayah !',
                'alamat.required' => 'Masukkan Alamat !',
                'jumlah_armada.required' => 'Masukkan Jumlah Armada!',
                'jumlah_personil.required' => 'Masukkan Jumlah Personil!',
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

            $post = dataMarkasDamkar::create([
                'nama'     => $request->input('nama'),
                'wilayah'   => $request->input('wilayah'),
                'alamat'   => $request->input('alamat'),
                'jumlah_armada'   => $request->input('jumlah_armada'),
                'jumlah_personil'   => $request->input('jumlah_personil'),
                'lat'   => $request->input('lat'),
                'long'   => $request->input('long'),
                'foto'   => $nama_gambar,
            ]);

            if ($post) {
                return response()->json([
                    'success' => true,
                    'message' => 'dataMarkasDamkar Berhasil Disimpan!',
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'dataMarkasDamkar Gagal Disimpan!',
                ], 400);
            }
        }
    }


    public function show($id)
    {
        $post = dataMarkasDamkar::whereId($id)->first();

        if ($post) {
            return response()->json([
                'success' => true,
                'message' => 'Detail dataMarkasDamkar!',
                'data'    => $post
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'dataMarkasDamkar Tidak Ditemukan!',
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

            $post = dataMarkasDamkar::whereId($request->input('id'))->update([
                'nama'     => $request->input('nama'),
                'kategori'   => $request->input('kategori'),
                'instansi'   => $request->input('instansi'),
            ]);


            if ($post) {
                return response()->json([
                    'success' => true,
                    'message' => 'dataMarkasDamkar Berhasil Diupdate!',
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'dataMarkasDamkar Gagal Diupdate!',
                ], 500);
            }
        }
    }

    public function destroy($id)
    {
        $post = dataMarkasDamkar::findOrFail($id);
        $post->delete();

        if ($post) {
            return response()->json([
                'success' => true,
                'message' => 'dataMarkasDamkar Berhasil Dihapus!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'dataMarkasDamkar Gagal Dihapus!',
            ], 500);
        }
    }
}
