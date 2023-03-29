<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aranzman;

class UserAranzmanController extends Controller
{
    
    public function index($user_id)
    {
        $ar = Aranzman::get()->where('user_id', $user_id);
        if(is_null($ar)){
            return response()->json('Data not found', 404);
        }
        return response()->json($ar);
    }

}
