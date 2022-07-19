<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiSekolahController extends Controller
{
    public function index()
    {
        return view('api-sekolah');
    }

    public function post(Request $request)
    {
        $response = Http::withOptions([
            'verify' => false,
        ])->get('https://datasekolahapi.herokuapp.com/api/data/sd/jakarta/' . $request->kabupaten);
        $data = $response->json();
        return view('api-sekolah', [
            'sekolah' => $data,
        ]);
    }
}
