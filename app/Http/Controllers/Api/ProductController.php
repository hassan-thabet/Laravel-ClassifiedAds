<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        return ProductResource::collection(Product::where('status' , 'active')->paginate());
    }
    public function show($id){
        return new ProductResource(Product::find($id) );
    }
}
