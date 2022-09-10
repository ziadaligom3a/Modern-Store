<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use \App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminAccountController extends Controller
{
    public function index(){

        return view('Dashboard.account',
    [

        'user' => auth()->user()
    ]
    );
    }

    public function delete()
    {
        $user = user::find(auth()->id());
        $user->delete();
        return redirect('/');
    }
}
