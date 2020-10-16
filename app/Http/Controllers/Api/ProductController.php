<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index(){

        return ProductResource::collection(Product::where('status' , 'active')->paginate());
    }


    public function show($id){
        return new ProductResource(Product::find($id));
    }

    public function Store(Request $request)
    {
        $formInput=$request->all();
        $images=array();

        
        $request -> validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'price' => ['required' , 'max:255'],
            'category_id' => ['required'],
            'user_id' => ['required'],
        ]);

        $product = new Product();
        $product -> title = $request->input('title');
        $product -> description = $request->input('description');
        $product -> price = $request->input('price');
        $product -> status = ('pending');
        $product -> sponsored = ('false');
        $product -> category_id = $request->input('category_id');
        $product -> user_id = $request->input('user_id');
        
        $product -> save();


        if($files=$request->file('images')){
            foreach($files as $file){
                $name=$file->hashName();
                $file->move('images',$name);
                $images[]=$name;
                Image::create(array_merge($formInput,
                [
                    'product_id' => $product -> id,
                    'url' => ($name),
                    ],
                ));
            }
        }

        return ($product);
            

            // product::create(array_merge($formInput,
            // [
            // 'title' => $request->title,
            // 'description' => $request->description,
            // 'price' => $request->price,
            // 'status' => $request->status,
            // 'sponsored' => $request->sponsored,
            // 'category_id'  => $request->category_id,
            // 'user_id' => $request->user_id,   
            //     ],
            // ));

            // if($files=$request->file('images')){
            //     foreach($files as $file){
            //         $name=$file->hashName();
            //         $file->move('images',$name);
            //         $images[]=$name;
            //         Image::create(array_merge($formInput,
            //         [
            //             'product_id' => 11,
            //             'url' => ($name),
            //             ],
            //         ));
            //     }
            // }
            
            // toastr()->success('Data Has been saved Successfuly' , 'Successfuly');
            // return redirect()->back()->withInput();

    

    }

}
