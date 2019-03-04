<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pariwisata;
class wisataController extends Controller
{
    public function index()
    {
        $data = Pariwisata::all();
        return response()->json($data);
    }

    public function store(Request $request)
    {
        
        $data = new Pariwisata;
        $data->nama_pariwisata = $request->nama_pariwisata;
        $data->alamat_pariwisata = $request->alamat_pariwisata; 
        $data->detail_pariwisata = $request->detail_pariwisata;
        $data->gambar_pariwisata = $request->gambar_pariwisata;
        $data->maps = $request->maps;
        $data->save();

        return response()->json($data);
    }

    public function update(Request $request , $id)
    {
        $data = Pariwisata::find($id);
        $data->nama_pariwisata = $request->nama_pariwisata;
        $data->alamat_pariwisata = $request->alamat_pariwisata; 
        $data->detail_pariwisata = $request->detail_pariwisata;
        $data->gambar_pariwisata = $request->gambar_pariwisata;
        $data->maps = $request->maps;
        $data->save();

        return response()->json($data);
    }

    public function delete($id)
    {
        $data = Pariwisata::find($id);
        $data->save();

        return response()->json($data);
    }
}
