<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enlace;
use App\Afirmador;
use Laracasts\Flash\Flash;
use App\Http\Requests\EnlaceRequest;

class EnlaceController extends Controller
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
        return view('admin.servidores.enlaces.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $enlaces = new Enlace($request->all());

        $enlaces->save();

        Flash::success("Se ah registrado correctamente " . $enlaces->nombreEnlace . " de forma exitosa!");
        return redirect()->route('servidores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Enlace  $enlace
     * @return \Illuminate\Http\Response
     */
    public function show(Enlace $enlace)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Enlace  $enlace
     * @return \Illuminate\Http\Response
     */
    public function edit(Enlace $enlace)
    {
        $enlace = Enlace::find($id);
        return view('')->with('enlace', $enlace);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Enlace  $enlace
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enlace $enlace)
    {
        $enlace = Enlace::find($id);
        $enlace->fill($request->all());
        $enlace->save();
        flash('El Enlace "'. $enlace->nombreEnlace.'" Se ah editado con exito', 'warning');
        return redirect()->route('servidores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Enlace  $enlace
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enlace $enlace)
    {
        $enlace = Enlace::find($id);
        $enlace->delete(); 
        Flash::error("El enlace " . $enlace->nombreEnlace . "a sido borrado de forma exitosa");
        return redirect()->route('servidores.index');
    }
}
