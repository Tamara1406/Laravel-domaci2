<?php

namespace App\Http\Controllers;

use App\Models\Mesto;
use Illuminate\Http\Request;
use App\Http\Resources\MestoCollection;


class MestoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mesto = Mesto::all();
        return new MestoCOllection($mesto);
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
     * @param  \App\Models\Mesto  $mesto
     * @return \Illuminate\Http\Response
     */
    public function show($mesto_id)
    {
        $m = Mesto::find($mesto_id);
        if(is_null($m)){
            return response()->json('Data not found', 404);
        }
        return response()->json($m);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mesto  $mesto
     * @return \Illuminate\Http\Response
     */
    public function edit(Mesto $mesto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mesto  $mesto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mesto $mesto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mesto  $mesto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mesto $mesto)
    {
        //
    }
}
