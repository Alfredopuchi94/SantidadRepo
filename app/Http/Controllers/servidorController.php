<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enlace;
use App\Afirmador;
use Laracasts\Flash\Flash;
use App\Http\Requests\EnlaceRequest;

class servidorController extends Controller
{
    public function index()
    {
        $enlaces = Enlace::all();
        $afirmadores = Afirmador::orderBy('id', 'ASC')->paginate(6);
        $afirmadores->each(function($afirmadores){
            $afirmadores->enlace;
        });

        return view('admin.servidores.index')->with('enlaces',$enlaces)->with('afirmadores',$afirmadores);
    }
}
