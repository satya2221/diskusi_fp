<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  \App\ModelPoin;

class PoinController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }
    public function add($id_tanya, $id_user)
    {
        $cek = ModelPoin::where('user_id', $id_user )->first();
        if ($cek) {
            return redirect('/');
        }
        else{
            $tambah = new ModelPoin;
            $tambah->user_id = $id_user;
            $tambah->id_jawaban = $id_tanya;
            $tambah->poin = 1;
            $tambah->save();
            return redirect('/');
        }
        
    }
    public function subtract($id_tanya, $id_user)
    {
        $tambah = new ModelPoin;
        $tambah->user_id = $id_user;
        $tambah->id_jawaban = $id_tanya;
        $tambah->poin = -1;
        $tambah->save();
        //dd($pertanyaan);
        
        return redirect('/');
    }
}
