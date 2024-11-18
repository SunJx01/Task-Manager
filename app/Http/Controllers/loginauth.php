<?php

namespace App\Http\Controllers;

use App\Models\myUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class loginauth extends Controller
{
    public function login(Request $request){
        
        $validateData = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);
        $data_arr = [
            'email'=>$request->post('username'),
            'password'=>Hash::make($request->post('password'))
        ];
 
 
       
        $check_arr = myUsers::where('email', $request->post('email'))->first();
        if ($check_arr && Hash::check($request->post('password'), $check_arr->password)) {
            session([
                'email' => $request->post('email'),
                'class' => "Token"   
            ]);
            
            session()->regenerate();
            session()->put('status', ' Session saved');
            return redirect('/');
                            
        }else {
            $authData = "auth!";
            $data = "Invalid Credentials!";
            return view('dashboard', compact('authData', 'data'));
        }
    }
}

