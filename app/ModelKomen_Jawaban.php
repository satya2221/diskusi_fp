<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelKomen_Jawaban extends Model
{
    protected $table = 'komen_jawaban';
    public function author(){
        return $this->belongsTo('App\User','user_id');
    }
}
