<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class JawabanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jawaban = \App\ModelJawaban::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function jawab($id)
    {
        $jawaban = \App\ModelJawaban::all();
        $pertanyaan = \App\ModelPertanyaan::find($id);
        //dd($pertanyaan);
        return view ('jawaban.buatjwb', compact('pertanyaan'));
    }

    public function jawabtop($id)
    {
        $jawaban = \App\ModelJawaban::where('id', $id)->first();
        $pertanyaan = \App\ModelPertanyaan::find($id);
        //dd($jawaban);
        return view ('jawaban.jawabyop', compact('jawaban','pertanyaan'));
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
            'isi' => 'required',
        ]);

        $jawaban = new \App\ModelJawaban;
        $jawaban->isi = $request->isi;
        $jawaban->id_pertanyaan = $request->id_pertanyaan;
        $jawaban->user_id = $request->user_id;
        $jawaban->save();

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
        $jawaban = \App\ModelJawaban::where('id_pertanyaan', $id)->get();
        $pertanyaan = \App\ModelPertanyaan::find($id);
        //dd($jawaban);
        return view ('jawaban.tampildatajwb', compact('jawaban','pertanyaan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jawaban = \App\ModelJawaban::find($id);
        $pertanyaan = \App\ModelPertanyaan::find($id);
        //dd($pertanyaan);
        return view ('jawaban.editjwb', compact('jawaban','pertanyaan'));
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
            'isi' => 'required',
        ]);

        $jawaban = \App\ModelJawaban::find($id);
        $jawaban->isi = $request->isi;
        $jawaban->id_pertanyaan = $request->id_pertanyaan;
        $jawaban->user_id = $request->user_id;
        $jawaban->save();

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
        $jawaban = \App\ModelJawaban::find($id);
        $jawaban->delete();

        return redirect ('/pertanyaan');
    }
}
