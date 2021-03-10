<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataPribadi;

class DataPribadiController extends Controller
{
    public function get_all_user(){
        return response()->json(DataPribadi::all(), 200);
    }

    //menambahkan Data user ke dalam Database
    public function insert_new_user(Request $request){
        $insert_user = new DataPribadi;
        $insert_user->nama_lengkap= $request->namaLengkap;
        $insert_user->no_ktp = $request->noKtp;
        $insert_user->no_NPWP = $request->noNPWP;
        $insert_user->no_telp = $request->noTelp;
        $insert_user->alamat = $request->alamat;
        $insert_user->save();
        return response([
            'status' => 'OK',
            'message' => 'Berhasil menambahkan user baru',
            'data' => $insert_user
        ], 200);
    }

    //update data user yang sudah di masukkan
    public function update_data_user(Request $request, $id){
        $check_data = DataPribadi::firstWhere('kode_user', $id);
        if ($check_data) {
            $data_user = DataPribadi::find($id);
            $data_user->nama_lengkap = $request->namaLengkap;
            $data_user->no_ktp = $request->noKtp;
            $data_user->no_NPWP = $request->noNPWP;
            $data_user->no_telp = $request->noTelp;
            $data_user->alamat = $request->alamat;
            $data_user->save();
            return response([
                'status' => 'OK',
                'message' => 'Data User berhasil diubah',
                'update-data' => $data_user
            ], 200);
        } else {
            return response([
                'status' => 'Not Found',
                'message' => 'Kode User tidak ditemukan'
            ],404);
        }
    }

    public function delete_user($id){
        $check_eligible_user = DataPribadi::firstWhere('kode_user', $id);
        if ($check_eligible_user) {
            DataPribadi::destroy($id);
            return response([
                'status' => 'OK',
                'message' => 'Data User dihapus',
            ], 200);
        } else {
            return response([
                'status' => 'Not Found',
                'message' => 'Kode user tidak ditemukan'
            ],404);
        }
    }

}
