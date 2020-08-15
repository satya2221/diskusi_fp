<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelPoin extends Model
{
    protected $table = 'vote_pertanyaan';

    // public function pertanyaan(){
    //     return $this->belongsTo('App\ModelPertanyaan','id_jawaban');
    // }

    // public function pembuat(){
    //     return $this->belongsTo('App\User','user_id');
    // }
}