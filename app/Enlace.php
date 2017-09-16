<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enlace extends Model
{
    protected $table = "enlaces";

    protected $fillable = ['nombreEnlace'];

    public function afirmadores(){
      return $this->hasMany('App\Afirmador');
    }
}
