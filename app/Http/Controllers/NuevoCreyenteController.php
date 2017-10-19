<?php

namespace App\Http\Controllers;

use App\NuevoCreyente;
use Illuminate\Http\Request;

class NuevoCreyenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.creyentes.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.creyentes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit(NuevoCreyente $nuevoCreyente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NuevoCreyente  $nuevoCreyente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NuevoCreyente $nuevoCreyente)
    {
        //
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
