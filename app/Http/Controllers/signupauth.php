<?php

namespace App\Http\Controllers;

use App\Models\myUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class signupauth extends Controller
{
    public function signup(Request $request){
        $data_arr=[
            'email'=>$request->post('email'),
            'password'=> Hash::make($request->post('password')),
        ];
        
        $validateData = $request->validate([
            'email' => ['required','email','unique:myUsers,email'],
            'password' => ['required', 'min:8', 'confirmed', Password::min(8)
                                                        ->mixedCase()
                                                        ->letters()
                                                        ->numbers()
                                                        ->symbols()
                                                        ->uncompromised(),],
            'password_confirmation' => ['required'],
        ]);
        $data= myUsers::create($data_arr);
        
        session([
            'email' => $request->post('email'),
            'class' => "Token"   
        ]);
        
        session()->regenerate();
        session()->put('status', ' Session saved');

        $authData = "";
        return view ('/',compact('authData'));
    }
}
