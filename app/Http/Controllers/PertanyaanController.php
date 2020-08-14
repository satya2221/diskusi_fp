<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\ModelPertanyaan;

class PertanyaanController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pertanyaan = ModelPertanyaan::all();
        //dd($pertanyaan);
        
        return view ('templatenya.tampildata', compact('pertanyaan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('templatenya.inputdata');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
        ]);

        $pertanyaan = new ModelPertanyaan;
        $pertanyaan->isi = $request->isi;
        $pertanyaan->judul = $request->judul;
        $pertanyaan->user_id = $request->user_id;
        $pertanyaan->save();

        return redirect ('/pertanyaan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pertanyaan = ModelPertanyaan::find($id);
        //dd($pertanyaan->author);
        return view ('templatenya.tampil', compact('pertanyaan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pertanyaan = ModelPertanyaan::find($id);
        return view ('templatenya.edit', compact('pertanyaan'));
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
        $request->validate([
            'judul' => 'required|max:255',
            'isi' => 'required',
        ]);

        $pertanyaan = ModelPertanyaan::find($id);
        $pertanyaan->judul = $request->judul;
        $pertanyaan->isi = $request->isi;
        $pertanyaan->save();

        return redirect ('/pertanyaan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pertanyaan = ModelPertanyaan::find($id);
        $pertanyaan->delete();

        return redirect ('/pertanyaan');
    }
}
