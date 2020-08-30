<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::with('products')->get();
        return view('admin.categories.categories')->with([
            'categories' => $categories ,
        ]);
    }

    public function create(){
        return view('admin.categories.add-new');
    }

    public function store(Request $request){

        try {
            Category::create([
                'category_name' => $request->category_name,
                'icon_url' => $request->icon_url,
            ]);

            return redirect()->route('admin.categories');
            //return $request;
        }catch (\Exception $exception){
            return $exception;
        }

    }

}
