<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userModel;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    public function index(){
        $user = userModel::where('level_id', 2)->count();

        return view('user', ['data'=>$user]);
    }
}
