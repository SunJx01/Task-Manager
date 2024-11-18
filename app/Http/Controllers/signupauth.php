<?php

namespace App\Http\Controllers;

use App\Models\myUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class signupauth extends Controller
{
    public function signup(Request $request){
        $data_arr=[
            'email'=>$request->post('email'),
            'password'=> Hash::make($request->post('password')),
            'created_at'=>date('Y-m-d h:i:s'),
            'updated_at'=>date('Y-m-d h:i:s')
        ];
        
        $validateData = $request->validate([
            'email' => ['required','email','unique:my_users,email'],
            'password' => ['required', 'min:8', Password::min(8)
                                                        ->mixedCase()
                                                        ->letters()
                                                        ->numbers()
                                                        ->symbols()
                                                        ->uncompromised(),],

        ]);
        $data= myUsers::create($data_arr);
        
        session([
            'email' => $request->post('email'),
            'class' => "Token"   
        ]);
        
        session()->regenerate();
        session()->put('status', ' Session saved');
        return redirect('/');
    }
}
