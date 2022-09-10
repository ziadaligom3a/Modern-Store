<?php

namespace App\Http\Controllers\Admin;

use App\Models\pages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DeletePageController extends Controller
{
    public function delete(){


       try{

        $id = pages::find(request('id'));
        $id->delete();
        return back();

       }catch(\Exception $e){

        return back()->with('error',$e->getMessage());
       }


    }
}
