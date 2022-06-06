<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    
    
    public function index()
    {
        if(session('user_type')){
            if(session('user_type') == 'admin') return view('admin.category.add');
            else return redirect()->route('404-page');
        } else{
            return redirect()->route('404-page');
        }
    }


    public function store(Request $request)
    {
        if(isset($request) and !empty($request->all())){
            $cat = new categories();
            $cat->name = $request->input('name');
            $cat->type = $request->input('type');
            $cat->parent = $request->input('parent');
            $cat->save(); 
            return redirect()->route('add-category')->with('success', "Category added successfully!");
        } else{ 
            return redirect()->route('404-page');
        }
    }

    public function show(){
        if(session('user_type')){
            if(session('user_type') == 'admin') return view('admin.category.all');
            else return redirect()->route('404-page');
        } else{
            return redirect()->route('404-page');
        }
    }

}
