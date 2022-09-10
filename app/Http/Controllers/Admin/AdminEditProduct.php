<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Admin\AdminPages;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\ImageController;

class AdminEditProduct extends Controller
{
    public function index($id){


        return view('Admin.Dashboard.EditProduct',[
            
            'pages' => AdminPages::all(),
            'product' => Product::find($id),
            'categories' => Category::all()
        ]);

    }


    public function edit(){


       
            $validate = request()->validate([

                'id' => 'required',
                'name' => 'required',
                'category_id' => 'required',
                'price' => 'required',
                'img' => 'image'

            ]);
            $product = Product::find($validate['id']);

        if(isset($validate['img'])){
            $all = [
                'en' => $validate['name'],
                'ar' => request('name_arabic')
            ];

            // dd($all);
            $replace = $product->replaceTranslations('name',$all)->save();
            $base = base64_encode($validate['img'] = request()->file('img')->get());
            $image = ImageApiController::api($base);
            $validate['img'] = $image->image->url;
            $product->update($validate);
            return back();
            

        }else{
            $all = [
                'en' => $validate['name'],
                'ar' => request('name_arabic')
            ];

            // dd($all);
            $replace = $product->replaceTranslations('name',$all)->save();
            // dd($replace);
            $pro = $product->update($validate);
            // dd($validate);  
            // dd($ar_name);
            // dd($validate);
            // dd($pro);
            return back();
        }


    }
}
