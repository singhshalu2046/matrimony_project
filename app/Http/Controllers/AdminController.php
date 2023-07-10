<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

use Illuminate\Contracts\Encryption\DecryptException;
use Facade\Ignition\Exceptions\ViewException;
use Session;
use App\Models\admin_tbl;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Validator;

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
			$validator = Validator::make(
				$req->all(),
				[
					'user_name' => 'required|exists:admin_tbl,user_name',
					'password' => 'required',
				],
			);
			if ($validator->fails()) {
				return redirect()->back()->withErrors($validator->errors());
			}
		   
			$auth = Auth::guard('admin')->attempt(['user_name' => $req->user_name, 'password' => $req->password]);
			if ($auth) {
				$req->session()->flash('success', 'You\'ve Successfully Login');
				return redirect('/admin/dashboard');
			} else {
				$req->session()->flash('error','Wrong password entered');
				return redirect()->back()->withInput();
			}
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
		$data = Admin::find($id);
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

		$admin_tbl = Admin::find($req->id);
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

		$admin_tbl = Admin::find($req->id);
		$admin_tbl->password = Hash::make($req->new_password);
		$admin_tbl->save();
		$req->session()->flash('success', 'Update successfully');
		return redirect('admin/changepassword/' . $req->id);
	}

	// Logout
	function Logout()
	{
		Session::flush();
        Auth::logout();
		return redirect('admin/login');
	}
	

}
