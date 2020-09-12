<?php

namespace App\Http\Controllers;

use App\Product;



class ProductController extends Controller
{
    public function index(){
        $products = Product::with(['category' , 'user' , 'images'])->paginate(30);
        //return $products;
        return view('admin.products.products')->with([
            'products' => $products ,
        ]);
    }

    public function pendingIndex(){
        $pendingProducts = Product::where('status' , 'pending')
            ->with(['category' , 'user' , 'images'])
            ->paginate(30);

        return view('admin.products.pending-products')->with([
            'pendingProducts' => $pendingProducts,
        ]);
    }

    public function sponsoredIndex()
    {
        $sponsoredProducts = Product::where('status' , 'active')
        ->with(['category' , 'user' , 'images'])
        ->paginate(30);

    return view('admin.products.sponsored-products')->with([
        'sponsoredProducts' => $sponsoredProducts,
    ]);
    }



    public function create(){
        return view('admin.products.post-new-ad');
    }

    public function destroy($id){
        $anyProduct = Product::find($id);
        if (! $anyProduct){
            toastr()->error('This product does not exist', 'ERROR');
            return redirect()->route('admin.products');
        }
        $anyProduct->delete();
        toastr()->success('Data has been saved successfully!' , 'SUCCESS');
        return redirect()->route('admin.products');

    }
    public function changeStatus($id){
        try {
            $anyProduct = Product::find($id);
            if (! $anyProduct){
                toastr()->error('An error has occurred When whe searching about this product', 'ERROR');
                return redirect()->route('admin.products');
            }

            $status = $anyProduct -> status == 'pending' ? 'active': 'pending';
            $anyProduct -> update(['status' => $status]);


            toastr()->success('Data has been saved successfully!' , 'SUCCESS');
            return redirect()->route('admin.pending-products');
        }
        catch (\Exception $exception){
            toastr()->error('An error has occurred please try again later', 'ERROR');
            return redirect()->route('admin.products');
        }



    }
}
