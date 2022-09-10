<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\userp;
use \App\Http\Controllers\Controller;
use App\Models\Admin\AdminPages;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
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
    public function Adminindex()
    {

        return view('Admin.Dashboard.index',
    [

        'user' => User::find(auth()->id()),
        'product' => Product::all(),
        'pages' => AdminPages::all()
      
    ]);
    }
}
