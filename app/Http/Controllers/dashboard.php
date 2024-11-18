<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboard extends Controller
{
    public function dashboard(){
        if(session()->has('email')){
            $authData = "";
            $data ="";
        }else{
            $authData = "auth!";
            $data = "";
        }
        return view('dashboard', compact('authData', 'data'));
    }
}
