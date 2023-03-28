<?php

namespace App\Http\Controllers;

use App\Models\Aranzman;
use Illuminate\Http\Request;
use App\Http\Resources\AranzmanResource;


class AranzmanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ar = Aranzman::all();
        return $ar;
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
     * @param  \App\Models\Aranzman  $aranzman
     * @return \Illuminate\Http\Response
     */


    public function show(Aranzman $aranzman)
    {
        return new AranzmanResource($aranzman);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aranzman  $aranzman
     * @return \Illuminate\Http\Response
     */
    public function edit(Aranzman $aranzman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aranzman  $aranzman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aranzman $aranzman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aranzman  $aranzman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aranzman $aranzman)
    {
        //
    }
}
