<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DeleteUserController extends Controller
{
    public function delete(){

        $user = User::find(auth()->id());
        $user->delete();
        return response()->json(['Your Account has successfully deleted.'],200,[]);
    }
}
