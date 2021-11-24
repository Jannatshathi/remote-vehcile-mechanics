<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //public function categoryList(){
       // return view('pages.service.category');
    //}

    public function categoryCreate(){
        return view('pages.category-create');
    }

    // public function add(Request $request){
    //     // dd($request->all());
    //     Category::create([
    //         'name'=>$request->name,
    //         'details'=>$request->details
    //     ]);
    //     return redirect()->back();
    // }

    public function category()
    {
        return view('pages.service.category');
    }
    public function store(Request $request){
        Category::create([
            'name'=>$request->name,
            'details'=>$request->details
        ]);
        return redirect()->back();

    

    }

}
