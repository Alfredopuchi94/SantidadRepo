<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Afirmador extends Model
{
    protected $table = "afirmadors";

  protected $fillable = ['nombreAfirmador', 'id_enlace'];

  public function enlace(){
    return $this->belongsTo('App\Enlace','id_enlace');
  }

  public function nuevos_creyentes(){
    return $this->hasMany('App\Nuevo_creyente');
  }

  public function scopeSearch($query, $nombreAfirmador)
  {
  	return $query->where('nombreAfirmador', 'LIKE', "%$nombreAfirmador%");
  }
}
