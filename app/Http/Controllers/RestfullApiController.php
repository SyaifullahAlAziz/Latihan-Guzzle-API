<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RestfullApiController extends Controller
{

    public function index()
    {
        $mhs = DB::table('api_mahasiswa')->get();

        $res = [
            'status' => 'sukses',
            'mhs' => $mhs,
        ];

        return response()->json($res);
    }

    public function post(Request $request)
    {
        $data = [
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_telepon' => $request->no_telepon,
            'jurusan' => $request->jurusan,
        ];

        $add = DB::table('api_mahasiswa')
            ->insert($data);

        $res = [
            'status' => 'sukses',
            'data' => $data,
        ];

        return response()->json($res);
    }

    public function edit($id)
    {
        $mhs = DB::table('api_mahasiswa')
            ->where('id_mahasiswa', $id)
            ->first();

        $res = [
            'status' => 'sukses',
            'data' => $mhs,
        ];

        return response()->json($res);
    }

    public function update(Request $request)
    {
        $id_mahasiswa = $request->id_mahasiswa;
        $data = [
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_telepon' => $request->no_telepon,
            'jurusan' => $request->jurusan,
        ];

        $edit = DB::table('api_mahasiswa')
            ->where('id_mahasiswa', $id_mahasiswa)
            ->update($data);

        $res = [
            'status' => 'sukses',
            'data' => $data,
        ];

        return response()->json($res);
    }

    public function delete($id)
    {
        $del = DB::table('api_mahasiswa')
            ->where('id_mahasiswa', $id)
            ->delete();

        $res = [
            'status' => 'sukses',
        ];

        return response()->json($res);
    }

    public function diskon(Request $request)
    {
        $diskon = $request->nominal * 0.25;
        $total_bayar = $request->nominal - $diskon;

        $res = [
            'status' => 'sukses',
            'diskon' => $diskon,
            'total_bayar' => $total_bayar,
        ];

        return response()->json($res);
    }
}
