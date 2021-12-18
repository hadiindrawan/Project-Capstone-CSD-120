<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\data_master\dataMobilDamkar;

class data_mobilDamkar extends Controller
{
    public function index()
    {
        $posts = dataMobilDamkar::all();
        return view('data-master.damkar', [
            'dataDamkar' => $posts
        ]);
    }

    public function store(Request $request)
    {
        //validate data
        $validator = Validator::make(
            $request->all(),
            [
                'flat_nomor' => 'required',
                'wilayah' => 'required',
                'status'     => 'required',
            ],
            [
                'flat_nomor.required' => 'Masukkan Flat Nomor !',
                'wilayah.required' => 'Masukkan Wilayah !',
                'status.required' => 'Masukkan Status Armada!',
            ]
        );

        if ($validator->fails()) {

            return response()->json([
                'success' => false,
                'message' => 'Silahkan Isi Bidang Yang Kosong',
                'data'    => $validator->errors()
            ], 400);
        } else {
            $post = dataMobilDamkar::create([
                'markas_id' => $request->input('markas_id'),
                'flat_nomor'     => $request->input('flat_nomor'),
                'wilayah'   => $request->input('wilayah'),
                'status'   => $request->input('status'),
            ]);

            if ($post) {
                return response()->json([
                    'success' => true,
                    'message' => 'dataMobilDamkar Berhasil Disimpan!',
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'dataMobilDamkar Gagal Disimpan!',
                ], 400);
            }
        }
    }


    public function show($id)
    {
        $post = dataMobilDamkar::whereId($id)->first();

        if ($post) {
            return response()->json([
                'success' => true,
                'message' => 'Detail dataMobilDamkar!',
                'data'    => $post
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'dataMobilDamkar Tidak Ditemukan!',
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

            $post = dataMobilDamkar::whereId($request->input('id'))->update([
                'nama'     => $request->input('nama'),
                'kategori'   => $request->input('kategori'),
                'instansi'   => $request->input('instansi'),
            ]);


            if ($post) {
                return response()->json([
                    'success' => true,
                    'message' => 'dataMobilDamkar Berhasil Diupdate!',
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'dataMobilDamkar Gagal Diupdate!',
                ], 500);
            }
        }
    }

    public function destroy($id)
    {
        $post = dataMobilDamkar::findOrFail($id);
        $post->delete();

        if ($post) {
            return response()->json([
                'success' => true,
                'message' => 'dataMobilDamkar Berhasil Dihapus!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'dataMobilDamkar Gagal Dihapus!',
            ], 500);
        }
    }
}