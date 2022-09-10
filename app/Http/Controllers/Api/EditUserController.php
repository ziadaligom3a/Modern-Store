<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\ImageApiController;
use Illuminate\Support\Facades\Hash;

class EditUserController extends Controller
{
    public function edit(){
    
    try{

        if(auth()->check()){
            $user = auth()->user();
            $validate = request()->validate([

                'name' => 'required',
                'email' => 'required',
                'password' => 'nullable',
                'new' => 'nullable',
                'img' => 'nullable'
    
            ]);
    
            

            if(isset($validate['img'])){
    
    
                /* IMAGE */
              
                $base = $validate['img'];
                $image = ImageApiController::api($base);
                $validate['img'] = $image->image->url;
                $user = $user->update([
                  
                    'name' => $validate['name'],
                    'email' => $validate['email'],
                    'img' => $validate['img']
                    // 'password' => $validate['password'] 
                  
                ]);
                
    
                return response()->json([

                    'User' => auth()->user()
                ],200,[]);
    
    
                /* IMAGE */
    
            }elseif(isset($validate['password']) && isset($validate['new'])){
                
                if(Hash::check($validate['password'],auth()->user()->password)){
                $user->update([
                    'name' => $validate['name'],
                    'email' => $validate['email'],
                    'password' => bcrypt($validate['new'])
                ]);

                return response()->json([

                    'User' => $user
                ],200,[]); 

            }else{

                return response()->json(['Error Check your data']);
            }
    
                return back();
            }elseif(@$validate['img'] !== null && $validate['password'] !== null && $validate['new'] !== null){
    
                if(Hash::check($validate['password'],auth()->user()->password)){
                $user->update([
                    'name' => $validate['name'],
                    'email' => $validate['email'],
                    'password' => bcrypt($validate['new']),
                    'img' => $validate['img'],
                ]);
    
                return response()->json([

                    'User' => $user
                ],200,[]);     
                
            }else{

                return response()->json(['Error Check your data']);
            }
            }else{
    
                $user->update([

                    'name' => $validate['name'],
                    'email' => $validate['email']
                ]);
    
                return response()->json([

                    'User' => $user
                ],200,[]); 
    
    
            }

        }else{

            return response()->json(['You have to login first.'],401,[]);
        }
    }catch(\Exception $e){

        return response()->json([$e->getMessage()]);
    }

}
}
