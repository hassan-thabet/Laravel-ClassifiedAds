<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Image;



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
        $categories = Category::all();
        return view('admin.products.post-new-ad' , compact('categories'));
    }

    public function Store(Request $request)
    {
        try {

            $formInput=$request->all();
            $images=array();   
            
           
                $product = new Product();
                $product -> title = $request->title;
                $product -> description = $request->description;
                $product -> price = $request->price;
                $product -> status = $request->status;
                $product -> sponsored =  $request->sponsored;
                $product -> category_id =  $request->category_id;
                $product -> user_id = $request->user_id;
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
            toastr()->success('Data Has been saved Successfuly' , 'Successfuly');
            return redirect()->back();

        } catch (\Exception $th) {
            return $th ; 
        }

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
