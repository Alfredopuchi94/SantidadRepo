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
        $afirmadores = Afirmador::search($request->nombreAfirmador)->orderBy('id', 'ASC')->paginate(5);
        $afirmadores->each(function($afirmadores){
            $afirmadores->enlace;
        });

        return view('admin.servidores.index')->with('enlaces',$enlaces)->with('afirmadores',$afirmadores);
    }
}
