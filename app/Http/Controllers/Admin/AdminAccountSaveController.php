<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use \App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class AdminAccountSaveController extends Controller
{
    public function index(){
        // ,Rule::unique('users','email')->ignore(auth()->id(),'id')
        // dd(request()->all());
        $validate = request()->validate([


            'name' => 'required',
            'email' => ['required'],
            'password' => 'nullable|required',
            'new' => 'nullable|required'

        ]);

        if($validate['password']){

            if($validate['new']){
                // dd($validate['password']);
                if(Hash::check($validate['password'],auth()->user()->password)){

                        // $user = User::find(auth()->id());
                        $user = User::where('id','LIKE',auth()->id())->update([

                            'password' => bcrypt($validate['new'])
                        ]);
                       
                        return redirect('/home');
                }else{

                    echo "Falsch";
                    return back();
                }
            }else{

                echo "New not found";
                return back();
            }
        }

        $user = User::where('id','LIKE',auth()->id())->update([

            ''
        ]);
    }
}
