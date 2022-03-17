<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorehiloRequest;
use App\Http\Requests\UpdatehiloRequest;
use App\Models\hilo;

class HiloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function inicio()
    {
        // return "funcion inicio de hilos";

        $hilos = hilo::all();
        // $segundoHilo = hilo::find(2);
        // $arraySegundoHilo=[
        //     "id" =>2,
        //     "titulo" => "el titulo del segundo hilo",
        //     "contenido" => "el contenido del segundo hilo",
        // ];

        // return $segundoHilo;
        return view('welcome', ["hilos" => $hilos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorehiloRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorehiloRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\hilo  $hilo
     * @return \Illuminate\Http\Response
     */
    public function show(hilo $hilo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\hilo  $hilo
     * @return \Illuminate\Http\Response
     */
    public function edit(hilo $hilo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatehiloRequest  $request
     * @param  \App\Models\hilo  $hilo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatehiloRequest $request, hilo $hilo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\hilo  $hilo
     * @return \Illuminate\Http\Response
     */
    public function destroy(hilo $hilo)
    {
        //
    }
}
