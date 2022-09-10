<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\userp;
use Illuminate\Http\Request;

class AddProductController extends Controller
{
    
   

    public function add(){

    try{
        $validate = request()->validate([

            'id' => 'required'

        ]);

        $product = userp::create([

            'product_id' => $validate['id'],
            'user_id' => auth()->id()
        ]);

        return response()->json(['Your Product has been added successfully'],200,[]);
    }catch(\Exception $e){

        return response()->json([$e->getMessage()]);
    }
    }

}
