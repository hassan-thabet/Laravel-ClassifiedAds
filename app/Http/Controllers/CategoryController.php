<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use mysql_xdevapi\Exception;

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

        }catch (\Exception $exception){
            return $exception;
        }

    }

    public function edit($id){
        try {
            $categories = Category::find($id);
            if (!$categories){
                toastr()->error('This vendor may not be available', 'ERROR : ');
                return redirect()->route('admin.categories');
            }
            return view('admin.categories.edit' , compact('categories'));
        }catch (\Exception $exception){

            toastr()->error('An error has occurred please try again later', 'ERROR : ');
            return redirect()->route('admin.categories');

        }
    }

    public function update($id , Request $request){
        try {
            $category = Category::find($id);
            if (! $category){
                toastr()->error('Category is not found try with another Category', 'ERROR ');
                return redirect()->route('admin.categories');
            }

            Category::where('id' , $id)
                ->update([
                    'category_name' => $request->category_name,
                    'icon_url' => $request->icon_url,
                ]);

            toastr()->success('Data has been saved successfully!' , 'SUCCESS');
            return redirect()->route('admin.categories');
        }catch (\Exception $exception){
            toastr()->error('An error has occurred please try again later', 'ERROR : ');
            return redirect()->route('admin.categories');
        }
    }
}
