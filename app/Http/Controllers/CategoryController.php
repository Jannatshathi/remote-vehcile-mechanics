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
        return view('admin.pages.category-create');
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
        return view('admin.pages.service.category');
    }
    public function store(Request $request){


        $request->validate([
            'name'=>'required',
            //  | min:11|max:11
            'details'=>'required'
        ]);

        Category::create([
            'name'=>$request->name,
            'details'=>$request->details
        ]);
        return redirect()->back()->with('success','category created successfully.');

    

    }

}
