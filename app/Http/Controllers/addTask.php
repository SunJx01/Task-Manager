<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class addTask extends Controller
{
    public function newTask(Request $request){
        $title = $request->title;
        $description = $request->description;
        $category = $request->category;
        $timestamp = date('Y-m-d h:i:s');
        $user_id = session('name');
        $category_id = Category::where('category', $category)->first('id');
        dd($category_id);
        


        $array = [
            'title'=> $title,
            'description'=> $description,
            'status'=> 'pending',
            'user_id'=> $user_id,
            'category_id'=> $category_id,
            'created_at'=> $timestamp,
            'updated_at'=> $timestamp,
        ];
        dd($array);
    }
}
