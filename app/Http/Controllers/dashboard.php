<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboard extends Controller
{
    public function dashboard(){
        if(session()->has('email')){
            $authData = "";
        }else{
            $authData = "auth!";
        }
        return view('/', compact('authData'));
    }
}
