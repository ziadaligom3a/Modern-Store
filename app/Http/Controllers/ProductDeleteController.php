<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\userp;
use Illuminate\Http\Request;

class ProductDeleteController extends Controller
{
    public function delete(){


        $validate = request()->validate([


            'id' => 'required|numeric'

        ]);
        // dd(userp::all());
        $product = userp::where('product_id',$validate['id'])->get();
        // dd($product);
        $product->each->delete();

        return redirect('/home');

    }
}
