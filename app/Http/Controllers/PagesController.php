<?php

namespace App\Http\Controllers;

use App\Models\desc;
use App\Models\About;
use App\Models\boxes;
use App\Models\pages;
use App\Models\Category;
use App\Models\Customers;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;
use Spatie\Permission\Models\Permission;

class PagesController extends Controller
{
    public function index(){      
        // Role::create(['name' => 'User']);
        

        if(Session::has('lang')){

            app()->setLocale(Session::get('lang'));
            
        }
        // dd(Category::first()->product());
        
        return view('index',
        [
    
            'desc' => desc::first(),
            'data' => pages::all(),
            'devices' => boxes::all(),
            'categories' => Category::all(),
            'customers' => Customers::all()
        ]
    );


    
    }

    public function about(){
        if(Session::has('lang')){

            app()->setLocale(Session::get('lang'));
            return view('about',[

                'data' => pages::all(),
                'about' => About::all()
            ]);
        }
        return view('about',[

            'data' => pages::all(),
            'about' => About::all()
        ]);
    }





   

    public function contact(){
        if(Session::has('lang')){

            app()->setLocale(Session::get('lang'));
              
            return view('contact',[

                'data' => pages::all()
            ]);
        }

        return view('contact',[

            'data' => pages::all()
        ]);
    }

}
