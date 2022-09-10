<?php

namespace App\Http\Controllers\Admin;

use App\Models\About;
use App\Models\desc;
use \App\Http\Controllers\Controller;
use App\Models\Admin\AdminPages;
use App\Models\boxes;
use App\Models\pages;
use App\Models\Category;
use App\Models\Customers;
use Illuminate\Http\Request;

class AdminPagesController extends Controller
{
    public function index(){

      
        return view('Admin.Dashboard.Pages',[

            'user' => auth()->user(),
            'pages' => AdminPages::all(),
            'pagesE' => pages::all()
        ]);
    
    }

}
