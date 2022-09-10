<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\AdminPages;
use App\Models\Category;
use App\Models\pages;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminPageEditController extends Controller
{
    public function index($id){


        return view('Admin.Dashboard.EditPage',[
            
            'pages' => AdminPages::all(),
            'product' => Product::find($id),
            'categories' => Category::all()
        ]);

    }
}
