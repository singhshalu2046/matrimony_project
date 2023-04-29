<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Encryption\DecryptException;
use Facade\Ignition\Exceptions\ViewException;
use Session;
use Crypt;
use Hash;
use App\Models\User;

class UserController extends Controller
{
    public function SignUP(Request $req)
    {
        if($req->password == $req->c_password){
        $data = new User;
        $data->user_name = $req->user_name;
        $data->profile_creator = $req->profile_creator;
        $data->religion_id = $req->religion_id;
        $data->email = $req->email;
        $data->contact_number = $req->mobile;
        $data->password = Hash::make($req->password);
        $data->save();
        $req->session()->flash('success', 'Register successfully');
        return redirect('/');
        }else{

            $req->session()->flash('error', 'Your password Not Match');
            return redirect('/');
        }

    }
    function UserLogin(Request $req)
	{
		$matchThese = ['email' => $req->input('email')];
    	$user = User::where($matchThese)->get();
        $user_count = User::where($matchThese)->count();

		// try {
	
    	if($user_count == '1' && Hash::check($req->input('password'), $user[0]->password) )
		
    	{
			$req->session()->put('user_id',$user[0]->id);
			$req->session()->put('user_name',$user[0]->user_name);
			
			return redirect(url('/dashboard'));
    	}else{
            $req->session()->flash('error', 'Your password Not Match');
			return redirect()->back()->withInput();

		}

    	$req->session()->flash('error', 'Invalid password!');
    	return redirect()
    			->back()
    			->withInput();
	}

  public function UserDashboard()
  {
    return view('forntend.dashboard');
  }





}
