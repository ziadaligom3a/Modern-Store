<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InfoUserController extends Controller
{
    public function info(){

        if(auth()->check()){

            return response()->json([auth()->user()]);
            
        }else{

            return response()->json(['Please Login first']);
        }
    }
}
