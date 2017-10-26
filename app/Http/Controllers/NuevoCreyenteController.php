<?php

namespace App\Http\Controllers;

use App\NuevoCreyente;
use App\Afirmador;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;

class NuevoCreyenteController extends Controller
{
    public function index()
    {   $afirmadores = Afirmador::all();
        $creyentes = NuevoCreyente::orderBy('created_at', 'DES')->paginate(25);
        $creyentes->each(function($creyentes){
            $creyentes->afirmador;
        });
        return view('admin.creyentes.index')->with('creyentes',$creyentes)->with('afirmadores',$afirmadores);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $afirmadores = Afirmador::all();
        return view('admin.creyentes.create')->with('afirmadores',$afirmadores);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $creyente =new NuevoCreyente($request->all());
        $creyente->save();

        // Flash::success("Se ah registrado correctamente " . $creyente->nombrePersona . " de forma exitosa!");
        return redirect()->route('creyentes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NuevoCreyente  $nuevoCreyente
     * @return \Illuminate\Http\Response
     */
    public function show(NuevoCreyente $nuevoCreyente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NuevoCreyente  $nuevoCreyente
     * @return \Illuminate\Http\Response
     */
    public function edit(NuevoCreyente $cedula)
    {
        $creyente = NuevoCreyente::find($cedula);
        $afirmadores = Afirmador::all();
        return view('admin.creyentes.edit')->with('creyente', $creyente)->with('afirmadores', $afirmadores);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NuevoCreyente  $nuevoCreyente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NuevoCreyente $cedula)
    {
        $creyente = NuevoCreyente::find($id);
        $creyente->fill($request->all());
        $creyente->save();
        // flash('El Nuevo Creyente "'. $creyente->nombrePersona.'" Se ah editado con exito', 'warning');
        return redirect()->route('admin.creyentes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NuevoCreyente  $nuevoCreyente
     * @return \Illuminate\Http\Response
     */
    public function destroy(NuevoCreyente $nuevoCreyente)
    {
        //
    }
}
