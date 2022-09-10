<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\userp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Session::has('lang')){

            app()->setLocale(Session::get('lang'));
            $user = User::find(auth()->id());
            $userp = $user->product;
            return view('Dashboard.index',
        [
    
            'user' => $user,
            'product' => $userp
          
        ]);
        }

        $user = User::find(auth()->id());
        $userp = $user->product;
        return view('Dashboard.index',
    [

        'user' => $user,
        'product' => $userp
      
    ]);
    }
}
