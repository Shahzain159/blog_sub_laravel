<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class authController extends Controller
{
    //

    public function login(){
        return view('admin.login');
    }
    public function login2(Request $r){
        // return view('admin.login');

        if(Auth::attempt(['email'=>$r->email,'password'=>$r->password])){
            return redirect('/home');
        }
        else{
            return back()->with('error','Email or Password is Wrong');
        }
    }
    // public function reg(){
    //     User::create([
    //         'name'=>'admin',
    //         'email'=>'admin@gmail.com',
    //         'password'=>Hash::make('admin123')
    //     ]);
    // }
}
