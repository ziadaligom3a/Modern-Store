<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Admin\AdminPages;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class UsersController extends Controller
{
    public function index(){

        return view('Admin.Dashboard.Users',[

            'pages' => AdminPages::all(),
            'users' => User::all()
        ]);
    }

    public function delete(){
        
        $user = User::find(request('id'));
        $user->delete();
        return redirect('/admin/home/Users');
    }
}
