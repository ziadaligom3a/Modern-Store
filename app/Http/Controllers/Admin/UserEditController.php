<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Admin\AdminPages;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\RateLimiter\RequestRateLimiterInterface;

class UserEditController extends Controller
{
    public function index(User $id){
        return view('Admin.Dashboard.EditUser',[

            'pages' => AdminPages::all(),
            'user' => $id
        ]);
    }

    public function edit(){

        
        try{        
            $validate = request()->validate([
                
                'name' => 'required',
                'email' => 'required',
                'password' => 'nullable',
                'img' => 'nullable',
                
            ]);
            
        $user = User::find(request('id'));
        if(isset($validate['img'])){


            /* IMAGE */
            // dd(request('role'));
            $base = base64_encode($validate['img'] = request()->file('img')->get());
            $image = ImageApiController::api($base);
            $validate['img'] = $image->image->url;
            $user = $user->update([
              
                'name' => $validate['name'],
                'email' => $validate['email'],
                'img' => $validate['img'],
                // 'password' => $validate['password'] 
              
            ]);
            $user = User::find(request('id'));
            DB::table('model_has_roles')->where('model_id',$user->id)->delete();
            $user->assignRole(request('role'));
            

            return back();


            /* IMAGE */

        }elseif(isset($validate['password'])){

            $user->update([
                'name' => $validate['name'],
                'email' => $validate['email'],
                'password' => bcrypt($validate['password']),
            ]);
            DB::table('model_has_roles')->where('model_id',$user->id)->delete();
            $user->assignRole(request('role'));
            return back();
        }elseif(@$validate['img'] !== null && $validate['password'] !== null){

            $user->update([
                'name' => $validate['name'],
                'email' => $validate['email'],
                'password' => bcrypt($validate['password']),
                'img' => $validate['img'],
            ]);
            DB::table('model_has_roles')->where('model_id',$user->id)->delete();
            $user->assignRole(request('role'));

            return back();            
        }else{

            $user->update([
                'name' => $validate['name'],
                'email' => $validate['email'],
            ]);
            DB::table('model_has_roles')->where('model_id',$user->id)->delete();
            $user->assignRole(request('role'));
            return back();            

        }

    }catch(\Exception $e){


        return back()->with('error',$e->getMessage());
}

}

}
