<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Contracts\Encryption\DecryptException;
use Facade\Ignition\Exceptions\ViewException;
use Session;
use Crypt;
// use Hash;
use App\Models\admin_tbl;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

	public function Login()
	{
		$page_title = 'Login';
		return view('admin.login', ['page_title' => $page_title]);
	}

	// Admin Login
	function AdminLogin(Request $req)
	{
		$matchThese = ['user_name' => $req->input('username'), 'type' => $req->input('type')];
		$user = admin_tbl::where($matchThese)->get();
		$user_count = admin_tbl::where($matchThese)->count();

		// try {
		// 	// $decrypted = Crypt::decrypt($encryptedValue);
		// 	Crypt::decrypt($user[0]->password)==$req->input('password');
		// 	$req->session()->put('id',$user[0]->id);
		// 	$req->session()->put('name',$user[0]->name);
		// 	$req->session()->put('photo',$user[0]->img);
		// 	return redirect(url('/admin/dashboard'));

		// } catch (DecryptException $e) {
		// 	echo $e->getMessage();
		// }
		// dd($user);

		// if (Hash::check('plain-text-password', $hashedPassword)) {
		// 	// The passwords match...
		// }
		if ($user_count == '1' && Hash::check($req->input('password'), $user[0]->password))
		// Crypt::decrypt($user[0]->password)==$req->input('password'))
		{
			$req->session()->put('id', $user[0]->id);
			$req->session()->put('name', $user[0]->name);
			$req->session()->put('photo', $user[0]->img);
			return redirect(url('/admin/dashboard'));
		} else {
			// echo "NA";exit;
			return redirect()->back()->withInput();
		}

		$req->session()->flash('error', 'Invalid password!');
		return redirect()
			->back()
			->withInput();
	}

	// Add Dashboard
	function Dashboard()
	{
		$page_title = 'Dashboard';
		$startdate = date('Y-m-1');
		$enddate = date('Y-m-31');
		$user = User::count();

		return view('admin.dashboard', ['page_title' => $page_title, 'user' => $user]);
	}

	// Update Profile
	function Profile($id)
	{
		$page_title = 'Profile';
		$data = admin_tbl::find($id);
		return view('admin.profile', ['data' => $data, 'page_title' => $page_title]);
	}

	function Save(Request $req)
	{
		if (!empty(request()->photo)) {
			request()->validate([
				'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
			]);

			$imageName = time() . '.' . request()->photo->getClientOriginalExtension();
			request()->photo->move(public_path('images'), $imageName);
			unlink(public_path('images/' . session()->get('photo')));
			$req->session()->put('photo', $imageName);
		}

		$admin_tbl = admin_tbl::find($req->id);
		$admin_tbl->name = $req->name;
		$admin_tbl->mobile = $req->mobile;
		$admin_tbl->email = $req->email;
		$admin_tbl->address = $req->address;
		if (!empty($imageName)) {
			$admin_tbl->img = $imageName;
		}
		$admin_tbl->save();
		$req->session()->put('name', $req->name);
		$req->session()->flash('success', 'Update successfully');
		return redirect('admin/profile/' . $req->id);
	}

	// Change Password
	function ChangePassword($id)
	{
		$page_title = 'Change Password';
		return view('admin.changepassword', ['adminid' => $id, 'page_title' => $page_title]);
	}

	function ChangePasswordSave(Request $req)
	{

		if ($req->new_password != $req->confirm_password) {
			$req->session()->flash('error', 'New and confirm password not match');
			return redirect()->back()->withInput();
		}

		$admin_tbl = admin_tbl::find($req->id);
		$admin_tbl->password = Crypt::encrypt($req->new_password);
		$admin_tbl->save();
		$req->session()->flash('success', 'Update successfully');
		return redirect('admin/changepassword/' . $req->id);
	}

	// Logout
	function Logout()
	{
		session()->forget('id');
		session()->forget('name');
		session()->forget('error');
		return redirect('admin/login');
	}
	function getpass($user)
	{
		return crypt::encrypt('test');
		
	}

}
