<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Admin\AdminPages;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class UserAddController extends Controller
{
    public function index()
    {
        return view('Admin.Dashboard.AddUser',[

            'pages' => AdminPages::all()
        ]);
    }

    public function add(){

    try{



       $validate = request()->validate([

        'name' => 'required',
        'email' => ['required',Rule::unique('users','email')],
        'password' => 'required',
        'img' => 'required|image',

       ]);

       $base = base64_encode($validate['img'] = request()->file('img')->get());
       $image = ImageApiController::api($base);
       $validate['img'] = $image->image->url;
       $validate['password'] = bcrypt($validate['password']);
       $user = User::create($validate);
       $user->assignRole(request('role'));
       return redirect('/admin/home/Users');
    }catch(\Exception $e){

        return back()->with('error',$e->getMessage());
    }

}
}
