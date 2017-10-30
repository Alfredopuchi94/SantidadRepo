<?php

namespace App\Http\Controllers;

use App\DiscipuladoN;
use App\NuevoCreyente;
use App\Afirmador;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;

class DiscipuladoNController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($cedula)
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($cedula)
    {
        $creyente = NuevoCreyente::find($cedula);
        return view('admin.creyentes.discipuladoN.create')->with('creyente',$creyente);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $creyente = new NuevoCreyente($requet->all());
        $creyente->save();

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DiscipuladoN  $discipuladoN
     * @return \Illuminate\Http\Response
     */
    public function show(DiscipuladoN $discipuladoN)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DiscipuladoN  $discipuladoN
     * @return \Illuminate\Http\Response
     */
    public function edit(DiscipuladoN $discipuladoN)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DiscipuladoN  $discipuladoN
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DiscipuladoN $discipuladoN)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DiscipuladoN  $discipuladoN
     * @return \Illuminate\Http\Response
     */
    public function destroy(DiscipuladoN $discipuladoN)
    {
        //
    }
}
