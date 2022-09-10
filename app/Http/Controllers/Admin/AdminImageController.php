<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Support\Str;
use \App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class AdminImageController extends Controller
{
    public function index(){

try{

    $validate = request()->validate([

            'img' => 'required|image'

        ]);
        // dd();
        $delete = Storage::delete(auth()->user()->img);
        // dd($delete);
        $random = Str::random(40);
        $image = Image::make(request()->file('img'))->save(public_path('users')  . '/' . $random . '.jpg');
        
        $validate['img'] = '/users/' . $image->basename;
        $user = User::where('id','LIKE',auth()->id())->update([

            'img' => $validate['img']
        ]);
        return redirect('/home');


    }
    
    catch(\Exception $e){

        return back();
    }

}



}
