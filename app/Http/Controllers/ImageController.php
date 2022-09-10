<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Admin\ImageApiController;

class ImageController extends Controller
{
    public function index(){

try{

    $validate = request()->validate([

            'img' => 'required|image'

        ]);
        $base = base64_encode($validate['img'] = request()->file('img')->get());
        $image = ImageApiController::api($base);
        // dd($image);
        $validate['img'] = $image->image->url;
        $user = User::where('id','LIKE',auth()->id())->update([

            'img' => $validate['img']
        ]);
        if(auth()->user()->hasRole('Admin')){
        return redirect('/admin/home');
    }else{

        return redirect('/home');
    }

    }
    
    catch(\Exception $e){

        return back();
    }

}



}
