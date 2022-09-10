<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AccountController extends Controller
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
