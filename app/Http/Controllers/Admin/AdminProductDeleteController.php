<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\userp;
use \App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminProductDeleteController extends Controller
{
    public function delete(){


        $validate = request()->validate([


            'id' => 'required|numeric'

        ]);
        // dd(userp::all());
        $product = Product::find($validate['id']);
        // dd($product);
        $product->delete();

        return redirect('/admin/home');

    }
}
