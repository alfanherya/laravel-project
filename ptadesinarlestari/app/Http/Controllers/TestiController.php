<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Testimoni;
use Ramsey\Uuid\Rfc4122\UuidV4;

class TestiController extends Controller
{
    //
    function index()
    {
        $testimoni= Http::get("http://localhost:4000/testimoni/findall");
        // ->json()['data'];

        return view('dashboard', 
        ['testimoni' => $testimoni['data']]);
    }

    function saveTesti(){
        $create = Http::post("http://localhost:4000/testimoni/create", [
            'nama' => request('nama'),
            'testimoni' => request('testimoni'),
            'gambar' => request('gambar')
        ]);
    }

    function addTesti(Request $req){
        $testimoni = new Testimoni;
        $testimoni->id = UuidV4::uuid4();
        $testimoni->editor = $req->editor;
        $testimoni->isi_testimoni = $req->isi_testimoni;
        $testimoni->createdAt = $timestamp = date('Y-m-d H:i:s');
        $testimoni->updatedAt = $timestamp = date('Y-m-d H:i:s');
        $testimoni->save();
        return redirect('home');

    }
}
