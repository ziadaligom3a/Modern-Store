<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Admin\AdminPages;
use App\Http\Controllers\Controller;
use App\Models\pages;

class AddPageController extends Controller
{
    public function index()
    {

        return view('Admin.Dashboard.AddPage', [

            'pages' => AdminPages::all(),
           
        ]);
    }

    public function add()
    {


        dd(request());

    }
    
}
