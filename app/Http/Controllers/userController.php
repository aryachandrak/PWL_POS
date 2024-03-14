<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userModel;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    public function index(){
        $user = userModel::where('username', 'manager9')->firstOrFail();
        return view('user', ['data'=>$user]);
    }
}
