<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\data_master\dataAmbulans;

class data_Ambulans extends Controller
{
    public function index()
    {
        $posts = dataAmbulans::all();
        return view('data-master.ambulance', [
            'dataAmbulan' => $posts
        ]);
    }

    public function store(Request $request)
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
            $post = dataAmbulans::create([
                'id' => random_int(1, 1000),
                'nama'     => $request->input('nama'),
                'kategori'   => $request->input('kategori'),
                'instansi'   => $request->input('instansi'),
            ]);


            if ($post) {
                return response()->json([
                    'success' => true,
                    'message' => 'dataAmbulans Berhasil Disimpan!',
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'dataAmbulans Gagal Disimpan!',
                ], 400);
            }
        }
    }


    public function show($id)
    {
        $post = dataAmbulans::whereId($id)->first();

        if ($post) {
            return response()->json([
                'success' => true,
                'message' => 'Detail dataAmbulans!',
                'data'    => $post
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'dataAmbulans Tidak Ditemukan!',
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

            $post = dataAmbulans::whereId($request->input('id'))->update([
                'nama'     => $request->input('nama'),
                'kategori'   => $request->input('kategori'),
                'instansi'   => $request->input('instansi'),
            ]);


            if ($post) {
                return response()->json([
                    'success' => true,
                    'message' => 'dataAmbulans Berhasil Diupdate!',
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'dataAmbulans Gagal Diupdate!',
                ], 500);
            }
        }
    }

    public function destroy($id)
    {
        $post = dataAmbulans::findOrFail($id);
        $post->delete();

        if ($post) {
            return response()->json([
                'success' => true,
                'message' => 'dataAmbulans Berhasil Dihapus!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'dataAmbulans Gagal Dihapus!',
            ], 500);
        }
    }
}