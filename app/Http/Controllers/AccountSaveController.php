<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class AccountSaveController extends Controller
{
    public function index(){
        // ,Rule::unique('users','email')->ignore(auth()->id(),'id')
        // dd(request()->all());
        $validate = request()->validate([


            'name' => 'required',
            'email' => 'required|email',
            'password' => 'nullable',
            'new' => 'nullable'

        ]);
        // dd($validate);
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

            'name' => $validate['name'],
            'email' => $validate['email'],
        ]);
        // dd($user);
        if(auth()->user()->hasRole('Admin')){

            return redirect('/admin/home/Account');

        }else{

            return redirect('/home/Account');
        }
    }
}
