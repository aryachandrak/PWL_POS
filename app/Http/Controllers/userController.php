<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userModel;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    public function index(){
        $user = userModel::firstOrNew(
            [
            'username' => 'manager33',
            'nama' => 'Manager Tiga Tiga',
            'password' => Hash::make('12345'),
            'level_id' => 2
            ],
        );
        $user->save();

        return view('user', ['data'=>$user]);
    }
}
