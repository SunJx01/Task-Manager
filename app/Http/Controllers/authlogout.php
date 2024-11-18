<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authlogout extends Controller
{
    public function logout(){
            session()->invalidate();
            return redirect('/');
    }
}
