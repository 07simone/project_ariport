<?php

namespace App\Http\Controllers;

use App\Compagnia;
use Illuminate\Http\Request;

class CompagniaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compagnie = Compagnia::all();
        return view('compagnie.index', compact('compagnie'));
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
     * @param  \App\Compagnia  $compagnia
     * @return \Illuminate\Http\Response
     */
    public function show(Compagnia $compagnia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Compagnia  $compagnia
     * @return \Illuminate\Http\Response
     */
    public function edit(Compagnia $compagnia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Compagnia  $compagnia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Compagnia $compagnia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Compagnia  $compagnia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compagnia $compagnia)
    {
        //
    }
}
