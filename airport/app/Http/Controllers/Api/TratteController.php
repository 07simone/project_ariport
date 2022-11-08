<?php

namespace App\Http\Controllers\Api;

use App\Tratte;
use App\Aereoporto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TratteController extends Controller
{
    public function search($voloAndata, $voloRitorno){
        $aereoporto1 = Aereoporto::where('Nome_aereoporto', $voloAndata)->first();
        $aereoporto2 = Aereoporto::where('Nome_aereoporto', $voloRitorno)->first();

        /* print($aereoporto1); */
        $tratte = Tratte::where('aereoporto_partenza', $aereoporto1->id )->where('aereoporto_arrivo', $aereoporto2->id )->get();

        return response()->json($tratte);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tratte = Tratte::all();
        return response()->json($tratte);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
