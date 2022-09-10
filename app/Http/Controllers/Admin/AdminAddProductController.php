<?php

namespace App\Http\Controllers\Admin;

use Stringable;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Admin\AdminPages;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class AdminAddProductController extends Controller
{
    public function index()
    {

        return view('Admin.Dashboard.AddProduct', [

            'pages' => AdminPages::all(),
            'categories' => Category::all()
        ]);
    }

    public function add()
    {


        try {

            $validate = request()->validate([

                'name' => 'required',
                'category_id' => 'required',
                'price' => 'required',
                'img' => 'required|image'

            ]);
            $all = [

                'en' => $validate['name'],
                'ar' => request('name_arabic')
            ];
            $base = base64_encode($validate['img'] = request()->file('img')->get());
            $image = ImageApiController::api($base);
            $validate['img'] = $image->image->url;
            $product = Product::create($validate);
            $set = $product->setTranslations('name',$all);
            return redirect("/Product/{$product->id}");
        } catch (\Exception $e) {

            return back()->with('error', $e->getMessage());
        }
    }
}
