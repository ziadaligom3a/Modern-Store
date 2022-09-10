<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use \App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Mail;

class AdminContactController extends Controller
{
    public function index(){

    // try{
    
        $GLOBALS['validate'] = request()->validate([


            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'

        ]);

       $mail = Mail::send('mail.index',['validate' => $GLOBALS['validate']],function($message){

        $message->to('ajzead660@gmail.com','New Mail')->subject('New Mail');
        $message->from($GLOBALS['validate']['email'],$GLOBALS['validate']['name']);

       });
       
    //    dd($mail);

        return redirect('/#contact')->with('Success','Ihre E-Mail wurde erfolgreich gesendet');

    // }catch(\Exception $e){

        // return back()->with('Error',$e->getMessage());
    }
    }
// }
