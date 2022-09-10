<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\userp;
use Illuminate\Http\Client\ResponseSequence;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpKernel\Event\ResponseEvent;

class DeleteProductController extends Controller
{
    public function delete(){

    try{

        $validate = request()->validate([

            'id' => ['required','numeric',Rule::exists('userps','product_id')]

        ]);

        $product = userp::where('product_id','LIKE',$validate['id'])->get();
        $product[0]->delete();
        return response()->json(['The Product has successuflly deleted.'],200,[]);
    }catch(\Exception $e){

        return response()->json([$e->getMessage()]);
    }

    }
}
