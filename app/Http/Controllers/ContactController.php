<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){

     try{

        $GLOBALS['validate'] = request()->validate([


            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'

        ]);

       $mail = Mail::send('mail.index',['validate' => $GLOBALS['validate']],function($message){
        $message->to('your email','New Mail')->subject('New Mail');
        $message->from($GLOBALS['validate']['email'],$GLOBALS['validate']['name']);

       });

    //   dd($mail);

        return redirect('/#contact')->with('Success','Ihre E-Mail wurde erfolgreich gesendet');

    }catch(\Exception $e){

         return back()->with('Error',$e->getMessage());
    }
    }
}
