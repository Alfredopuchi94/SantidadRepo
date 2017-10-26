<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NuevoCreyente extends Model
{
    protected $table = 'nuevo_creyentes';
    protected $primaryKey = 'cedula';
    public $incrementing = false;

    protected $fillable = [
    	
			'cedula',
			'nombrePersona',
			'ano',
			'fechaServicio',
			'descripcion',
			'edad',
			'dire',
			'telf',
			'email',
			'invitacion',
			'oracion',
			'lider',
			'id_afirmador'];
}
