<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pariwisata;
class PariwisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // $data['result'] = "true";
        $data = Pariwisata::all();
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Pariwisata;
        $data->nama_pariwisata = $request->nama_pariwisata;
        $data->alamat_pariwisata = $request->alamat_pariwisata; 
        $data->detail_pariwisata = $request->detail_pariwisata;
        $data->gambar_pariwisata = $request->gambar_pariwisata;
        $data->maps = $request->maps;
        $data->save();

        return response()->json($data , 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Pariwisata::find($id);
        $data->nama_pariwisata = $request->nama_pariwisata;
        $data->alamat_pariwisata = $request->alamat_pariwisata; 
        $data->detail_pariwisata = $request->detail_pariwisata;
        $data->gambar_pariwisata = $request->gambar_pariwisata;
        $data->maps = $request->maps;
        $data->save();

        return response()->json($data , 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pariwisata::find($id);
        $data->save();

        return response()->json($data , 201);
    }
}
