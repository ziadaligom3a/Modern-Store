<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Http;

class ForgetUserController extends Controller
{
    use SendsPasswordResetEmails;
    public function forget(){

    try{

        $validate = request()->validate([

            'email' => ['required','email',Rule::exists('users','email')]
        ]);

        // $r = new SendsPasswordResetEmails;
        $http = Http::post('127.0.0.1:8000/password/email');
        dd($http);
    
    }catch(\Exception $e){

        return response()->json([$e->getMessage()]);
    }

    }
}
