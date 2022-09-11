<?php

namespace Illuminate\Foundation\Auth;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use App\Http\Controllers\Admin\ImageApiController;

trait RegistersUsers
{
    use RedirectsUsers;

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        try{
            $validate = request()->validate([
                'name' => 'required',
                'email' => ['required','email',Rule::unique('users','email')],
                'password' => 'required',
                'img' => 'required'
            ]);
            
            // dd($validate);
            $img = ImageApiController::api(base64_encode($validate['img']));
            // dd($img);
            $validate['password'] = bcrypt($validate['password']);
            $image = ImageApiController::api($validate['img']);
            $validate['img'] = $image->image->url;
            $user = User::create($validate);
            $user->assignRole('User');
            $attempt = auth()->login($user);
            return redirect('/home');
    
        }catch(\Exception $e){
    
            return response()->json([[$e->getMessage()]],401,[]);
        }
    
    }
}
