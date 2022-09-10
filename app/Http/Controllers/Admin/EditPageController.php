<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\AdminPages;
use App\Models\pages;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class EditPageController extends Controller
{
    public function index(pages $id){


        return view('Admin.Dashboard.EditPage',[
            'pages' => AdminPages::all(),
            'page' => $id
        ]);
    }

    public function edit(){

    try{
        $validate = request()->validate([

            
            'name' => ['required',Rule::unique('pages','name')->ignore(request('id'),'id')],
            'path' => ['required',Rule::unique('pages','path')->ignore(request('id'),'id')],

        ]);

        $find = pages::find(request('id'));
        $all = ['en' => $validate['name'],'ar' => request('name_arabic')];
        $find->setTranslations('name',$all);
        $page = $find->update($validate);
        return redirect($find->path);

    }catch(\Exception $e){


        return back()->with('error',$e->getMessage());
    }

    }
}

