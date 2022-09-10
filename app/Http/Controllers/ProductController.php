<?php

namespace App\Http\Controllers;

use App\Models\desc;
use App\Models\pages;
use App\Models\userp;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    
    public function category(Category $category)
    {
        // dd($category->product);
        // dd($category->product);
        if(Session::has('lang')){

            app()->setLocale(Session::get('lang'));
            return view('Products',[

           

                'product' => $category,
                'data' => pages::all()
            ]);
        }

        return view('Products',[

           

            'product' => $category,
            'data' => pages::all()
        ]);

    }

    public function show(Product $id){

        if(Session::has('lang')){

            app()->setLocale(Session::get('lang'));
            return view('Product.show',
            [
    
                'product' => $id,
                'data' => pages::all()
    
            ]
        
        );
        }

        return view('Product.show',
        [

            'product' => $id,
            'data' => pages::all()

        ]
    
    );
    }

    public function add(){

        $validate = request()->validate([

            'product' => 'required'
        ]);
        $user = userp::where(['user_id' => auth()->id(), 'product_id' => $validate['product']])->get();
        if(count($user) !== 0){
            
            
            return back()->with('error','Sorry, the item is already in your cart!');;
        }
        userp::create([

            'product_id' => $validate['product'],
            'user_id' => auth()->id()

        ]);

        return redirect('/home');
    }

}
