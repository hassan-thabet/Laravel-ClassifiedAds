<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::with(['category' , 'user' , 'images'])->paginate(30);
        //return $products;
        return view('admin.products.products')->with([
            'products' => $products ,
        ]);
    }
}
