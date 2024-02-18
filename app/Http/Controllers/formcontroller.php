<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formcontroller extends Controller
{
    public function index(){
        return view ('/form/form');
    }
    public function register(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'email'=>'required|email',
            'password'=>'required|min:8',
            'confirm_password'=>'required|same:password'
        ]);
        echo"<pre>";
        print_r($request->all());
    }
}
