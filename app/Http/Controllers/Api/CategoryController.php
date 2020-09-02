<?php

namespace App\Http\Controllers\Api;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryProductsResource;
use App\Http\Resources\CategoryResource;


class CategoryController extends Controller
{
    public function index(){
        return CategoryResource::collection(Category::all());
    }

    public function show(Category $category)
    {
        return new CategoryProductsResource($category);
    }


}
