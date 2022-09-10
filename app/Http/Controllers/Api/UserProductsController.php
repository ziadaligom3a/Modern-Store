<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\userp;
use Illuminate\Http\Request;

class UserProductsController extends Controller
{
    public function product(){

        if(auth()->check()){
            $user = userp::where('user_id','LIKE',auth()->id())->get();
            if(count($user) == 0){

                return response()->json(['Sorry there are no Products here.']);
            }

            return response()->json([

                'Products' => [auth()->user()->product]
                
            ],200,[]);
        }
    }
}
