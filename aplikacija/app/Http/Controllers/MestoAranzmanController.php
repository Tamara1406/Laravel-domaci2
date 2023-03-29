<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aranzman;

class MestoAranzmanController extends Controller
{
    public function index($mesto_id)
    {
        $ar = Aranzman::get()->where('mesto_id', $mesto_id);
        if(is_null($ar)){
            return response()->json('Data not found', 404);
        }
        return response()->json($ar);
    }
}
