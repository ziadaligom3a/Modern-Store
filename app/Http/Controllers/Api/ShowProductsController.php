<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowProductsController extends Controller
{
    public function index(){
        
        if(auth()->check()){
        return response()->json([

            'Products' => \App\Models\Product::all()
        ],200,[]);
    }else{

        return response()->json(['You have to log in First.'],200,[]);
    }
    }
}
