<?php

namespace App\Http\Controllers;

use App\Models\Aranzman;
use Illuminate\Http\Request;
use App\Http\Resources\AranzmanResource;
use App\Http\Resources\AranzmanCollection;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;



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
        return new AranzmanCollection($ar);
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
        $validator = Validator::make($request->all(),[
            'naziv' => 'required|string|max:255',
            'tip_aranzmana_id' => 'required',
            'mesto_id' => 'required',
        ]);

        if($validator->fails())
            return response()->json($validator->errors());

        $ar = Aranzman::create([
            'naziv' => $request->naziv,
            'tip_aranzmana_id' => $request->tip_aranzmana_id,
            'mesto_id' => $request->mesto_id,
            'user_id' => Auth::user()->id
        ]);

        return response()->json(['Aranzman je kreiran.', new AranzmanResource($ar)]);
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
        $validator = Validator::make($request->all(),[
            'naziv' => 'required|string|max:255',
            'tip_aranzmana_id' => 'required',
            'mesto_id' => 'required',
        ]);

        if($validator->fails())
            return response()->json($validator->errors());

            $aranzman->naziv = $request->naziv;
            $aranzman->tip_aranzmana_id = $request->tip_aranzmana_id;
            $aranzman->mesto_id = $request->mesto_id;
            $aranzman->user_id = Auth::user()->id;
            $aranzman->update();

            return response()->json('Aranzman je azuriran.');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aranzman  $aranzman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aranzman $aranzman)
    {
        $aranzman->delete();

        return response()->json('Aranzman je obrisan.');
    }
}
