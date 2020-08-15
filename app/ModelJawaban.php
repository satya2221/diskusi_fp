<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelJawaban extends Model
{
    protected $table = 'jawaban';

    public function jawab(){
        return $this->belongsTo('App\ModelPertanyaan','id_pertanyaan');
    }

    public function author(){
        return $this->belongsTo('App\User','user_id');
    }
}
