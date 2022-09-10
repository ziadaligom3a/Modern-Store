<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ImageApiController extends Controller
{
    
    public static function api($file){

        $new = new Client();
        $res = $new->request('POST','https://freeimage.host/api/1/upload',[

            'form_params' => [

                'key' =>  config('services.IMG.key'),
                'action' => 'upload',
                'source' => $file,
                'format' => 'json'
            ]

        ]);

        $json = json_decode($res->getBody()->getContents());
        return $json;
    }
}
