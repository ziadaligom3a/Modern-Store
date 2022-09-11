<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class LoginUserController extends Controller
{

    
    public function login(){
    
 
    try{


        $validate = request()->validate([

            'email' => ['required','email',Rule::exists('users','email')],
            'password' => 'required'
        ]);

        // $validate['password'] = bcrypt($validate['password'])
        $auth = auth()->attempt($validate);
        // dd($auth);
        if($auth){

            return response()->json([

                'Access Token' => $auth,
                'Token_Type' => 'Bearer',
                'Expires_in' => auth()->factory()->getTTL() * 60, 
                'User' => auth()->user(),
                'Role' => auth()->user()->roles


            ],200,[]);
        }else{

            return response()->json(['Error' => 'Incorrect Email or Password'],401,[]);
        }
       

    }catch(\Exception $e){

        return response()->json([$e->getMessage()],401,[]);
    }


    }
}
