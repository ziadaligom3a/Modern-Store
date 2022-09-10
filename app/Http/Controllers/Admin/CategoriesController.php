<?php

namespace App\Http\Controllers\Admin;

use App\Models\pages;
use GuzzleHttp\Client;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Admin\AdminPages;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class CategoriesController extends Controller
{



    public function index()
    {


        return view('Admin.Dashboard.Categories', [

            'user' => auth()->user(),
            'pages' => AdminPages::all(),
            'Categories' => Category::all()
        ]);
    }

    public function delete(){

    try{
        $validate = request()->validate([


                'id' => ['required',Rule::exists('categories','id')] 

        ]);

        $category = Category::find($validate['id']);
        $category->delete();
        return back();

    }catch(\Exception $e){

        return back()->with('error',$e->getMessage());
    }


    }

    public function add(){

        return view('Admin.Dashboard.AddCategory',[

            'pages' => AdminPages::all()
        ]);

    }

    public function add_function(){


    try{


        $validate = request()->validate([


            'name' => 'required',
            'slug' => ['required',Rule::unique('categories','slug')],
            'img' => 'required'
        ]);

        $base64 = base64_encode($validate['img'] = request()->file('img')->get());
        $image = ImageApiController::api($base64);
        $validate['img'] = $image->image->url;
        $all = ['en' => $validate['name'],'ar' => request('name_arabic')];
        $category = Category::create($validate);
        $category->setTranslations('name',$all)->save();
        return redirect("/categories/{$category->slug}");
        
   }catch(\Exception $e){

 return back()->with('error',$e->getMessage());
}


}

    public function edit(Category $id){



            return view('Admin.Dashboard.EditCategory',[

                'pages' => AdminPages::all(),
                'category' => $id
            ]);

    }


    public function edit_function(){


          
        $validate = request()->validate([

            'id' => 'required',
            'name' => 'required',
            'slug' => 'required',
            'img' => 'image'

        ]);
        $category = Category::find($validate['id']);

    if(isset($validate['img'])){
        // dd($product->img);
        $all = [

            'en' => $validate['name'],
            'ar' => request('name_arabic')
         ];

        
        $base = base64_encode($validate['img'] = request()->file('img')->get());
            $image = ImageApiController::api($base);
            $validate['img'] = $image->image->url;
            dd($category->setTranslations('name',$all))->save();
        $category->update($validate);
        return back();
        

    }else{
        $all = [

            'en' => $validate['name'],
            'ar' => request('name_arabic')
         ];
        $pro = $category->update($validate);
        $category->setTranslations('name',$all)->save();
        return back();
    }


    }

}