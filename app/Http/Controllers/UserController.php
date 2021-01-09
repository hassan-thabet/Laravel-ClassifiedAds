<?php

namespace App\Http\Controllers;
use App\Product;
use App\User;
use App\Http\Resources\UserApiResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;


class UserController extends Controller
{
    public function index(){
        $users = User::with(['products'])->paginate(25);
         return view('admin.users.users')->with(['users' => $users]);
    }


    public function create(){
        return view('admin.users.create');
    }

    public function store(Request $request){

        try {

            DB::beginTransaction();

            $filePath = "";
            if ($request->has('image')) {
                $image = $request->image;
                $image->store('user_photos');
                $filePath = $image->hashName();
              
            }

            // بدء العمليات علي قاعده البيانات
            User::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'password' => Hash::make($request->password),
                'api_token' => bin2hex(openssl_random_pseudo_bytes(30)),
                'photo_url' => $filePath,

            ]);
            DB::commit();
            // انهاء العمليات علي قاعده البيانات
            toastr()->success('Data Has been saved Successfuly' , 'Successfuly');
            return redirect()->route('admin.users');

        }catch (\Exception $exception){
            //  commit & beginTransaction الغاء كل العمليات علي قاعده البيانات بين ال 
            DB::rollback(); 
            // toastr()->error('An error has occurred', 'ERROR');
            // return redirect()->route('admin.users');
            return $exception;
        }

    }



    public function destroy($id)
    {
        $this_user = User::find($id); 
        if (! $id){
            toastr()->error('An error has occurred When whe searching about this user', 'ERROR');
            return redirect()->route('admin.users');
        }

        $this_user->delete();
        toastr()->success('This User deleted successfully!' , 'SUCCESS');
        return redirect()->route('admin.users');
    }



    public function updateIndex()
    {
        return view('admin.components.updates');
    }
}
