<?php

namespace App\Http\Controllers\Admin;

use App\Models\desc;
use App\Models\pages;
use App\Models\userp;
use \App\Http\Controllers\Controller;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminProductController extends Controller
{
    
    public function category(Category $category)
    {
        // dd($category->product);
        return view('Products',[

            'product' => $category->product,
            'data' => pages::all()
        ]);

    }

    public function show(Product $id){

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
