<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Admin\AdminPages;
use App\Http\Controllers\Controller;
use App\Models\pages;

class AddPageController extends Controller
{
    public function index()
    {

        return view('Admin.Dashboard.AddPage', [

            'pages' => AdminPages::all(),
           
        ]);
    }

    public function add()
    {


        try {

            $validate = request()->validate([

                'name' => 'required',
                'path' => 'required'

            ]);
          
            $page = pages::create($validate);
            $all = ['en' => $validate['name'],'ar'=>request('name_arabic')];
            $page->setTranslations('name',$all)->save();
            return redirect($page->path);
        } catch (\Exception $e) {

            return back()->with('error', $e->getMessage());
        }
    }
    
}
