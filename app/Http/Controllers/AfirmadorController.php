<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enlace;
use App\Afirmador;
use Laracasts\Flash\Flash;
use App\Http\Requests\AfirmadorRequest;

class AfirmadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $enlaces = Enlace::all();
        return view('admin.servidores.afirmadores.create')->with('enlaces',$enlaces);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $afirmadores = new Afirmador($request->all());
        $afirmadores->save();

        Flash::success("Se ah registrado correctamente " . $afirmadores->nombreAfirmador . " de forma exitosa!");
        return redirect()->route('admin.servidores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Afirmador  $afirmador
     * @return \Illuminate\Http\Response
     */
    public function show(Afirmador $afirmador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Afirmador  $afirmador
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $afirmador = Afirmador::find($id);
        $enlaces = Enlace::all();
        return view('admin.servidores.afirmadores.edit')->with('enlaces',$enlaces)->with('afirmador',$afirmador);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Afirmador  $afirmador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $afirmador = Afirmador::find($id);
        $afirmador->fill($request->all());
        $afirmador->save();
        flash('El Afirmador "'. $afirmador->nombreAfirmador .'" Se ah editado con exito', 'warning');
        return redirect()->route('servidores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Afirmador  $afirmador
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $afirmador = Afirmador::find($id);
        $afirmador->delete();

        Flash::error("El Afirmador " .$afirmador->nombreAfirmador . "a sido borrado de forma exitosa");
        return redirect()->route('servidores.index');
    }
}
