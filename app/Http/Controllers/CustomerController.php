<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Admin\UpdateUserRequest;

use Illuminate\Contracts\Encryption\DecryptException;
use Facade\Ignition\Exceptions\ViewException;
use Session;
use Crypt;
use App\Models\User;
use Symfony\Component\HttpFoundation\Response;


class CustomerController extends Controller
{
        
    /** List customers **/
    public function index()
    {
        $page_title = 'Customer';
        $customer = User::all();
        return view('admin.customer',['data'=>$customer,'page_title'=>$page_title]);
    }

    /** Get the Edit Form **/
    public function edit($id){

        $user = User::findOrFail($id);
        $page_title = 'Customer Edit';
        // dd($user);

        return view('admin.customerEdit',compact('user','page_title'));
    }

    
    public function update(Request $request){
        
        // dd($request->all());
        $userUpdate =  User::where('id', $request->id)->update($request->except('_method', '_token', 'id'));
        // $a=$user->update($request->all())->$request->except('_method', '_token');

        if($userUpdate){
            $message = "Successfully User Detail Updated.";
        }else{
            $message = "Something went worng...";
        }

        return redirect()->route('admin.customer.index');
    }
    public function deletecustomer(Request $request)
    {

        dd($request->all());
            $devicePool->delete();

            return back();
    }



}
