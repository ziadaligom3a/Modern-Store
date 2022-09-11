<?php

namespace App\Http\Controllers;

use App\Models\pages;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;

class Search extends Controller
{
    public function index()
    {
        if(Session::has('lang')){

            app()->setLocale(Session::get('lang'));

        }
        
        return view('Search',[

            'categories' => Category::all()
        ]);
    }



    
    public function search()
    {
        $validate = request()->validate([

            'keyword' => 'required',
            'category' => 'required'
        ]);

        if($validate['category'] == 0){
            
            // dd($validate['keyword']);
            $query = Product::select('*')->where('name','LIKE','%' . $validate['keyword'] . '%')->get
            ();
            // dd($query != 0);
            if(count($query) !== 0){
                if(Session::has('lang')){

                    app()->setLocale(Session::get('lang'));
                    return view('Products',[

                        'product' => $query,
                        'data' => pages::all()
                    ]);
                }

            return view('Products',[

                'product' => $query,
                'data' => pages::all()
            ]);
        }else{


            return back()->with('Products','No Products Found!');
        }
            
        }else{

            $query = Product::select('*')->where('name','LIKE','%' . $validate['keyword'] . '%')->where('category_id','LIKE',$validate['category'])->get
            ();
            if(count($query) !== 0){
                if(Session::has('lang')){

                    app()->setLocale(Session::get('lang'));
                    return view('Products',[
    
                        'product' => $query,
                        'data' => pages::all()
                    ]);
                }
                return view('Products',[
    
                    'product' => $query,
                    'data' => pages::all()
                ]);
            }else{
    
    
                return back()->with('Products','No Products Found!');
            }
        }
    }
}
