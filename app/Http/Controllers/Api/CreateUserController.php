<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Admin\ImageApiController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class CreateUserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }
    public function create(){
    try{
        $validate = request()->validate([
            'name' => 'required',
            'email' => ['required','email',Rule::unique('users','email')],
            'password' => 'required',
            'img' => 'required'
        ]);
        
        // dd($validate);
        $img = ImageApiController::api($validate['img']);
        // dd($img);
        $validate['role'] = 0;
        $validate['password'] = bcrypt($validate['password']);
        $image = ImageApiController::api($validate['img']);
        $validate['img'] = $image->image->url;
        $user = User::create($validate);
        $attempt = auth()->login($user);
        return response()->json([

            'Access Token' => $attempt,
            'Token_Type' => 'Bearer',
            'Expires_in' => auth()->factory()->getTTL() * 60, 
            'User' => auth()->user()


        ],200,[]);

    }catch(\Exception $e){

        return response()->json([[$e->getMessage()]],401,[]);
    }


    }
}
