<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelPertanyaan extends Model
{
    protected $table = 'pertanyaan';

    public function author(){
        return $this->belongsTo('App\User','user_id');
    }
}
