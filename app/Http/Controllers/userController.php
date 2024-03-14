<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userModel;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    public function index(){
        $user = userModel::findOr(20, ['username', 'nama'], function(){
            abort(404);
        });

        return view('user', ['data'=>$user]);
    }
}
