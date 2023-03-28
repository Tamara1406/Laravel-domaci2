<?php

namespace App\Http\Controllers;

use App\Models\TipAranzmana;
use Illuminate\Http\Request;

class TipAranzmanaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tip = TipAranzmana::all();
        return $tip;
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
     * @param  \App\Models\TipAranzmana  $tipAranzmana
     * @return \Illuminate\Http\Response
     */
    public function show($tipAranzmana_id)
    {
        $tip = TipAranzmana::find($tipAranzmana_id);
        if(is_null($tip)){
            return response()->json('Data not found', 404);
        }
        return response()->json($tip);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipAranzmana  $tipAranzmana
     * @return \Illuminate\Http\Response
     */
    public function edit(TipAranzmana $tipAranzmana)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipAranzmana  $tipAranzmana
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipAranzmana $tipAranzmana)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipAranzmana  $tipAranzmana
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipAranzmana $tipAranzmana)
    {
        //
    }
}
