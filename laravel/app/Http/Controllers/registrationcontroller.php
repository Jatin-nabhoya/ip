<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registrationcontroller extends Controller
{
    public function index(){
        return view('register-d');
    }
    
    public function register_d(request $request){
        
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|confirmed',
                'password_confirmation' => 'required',
            ]
        
        );
        
        echo "<pre>";
        $data = $request->all();
        print_r($data);
        echo "</pre>";
    }
        
}

