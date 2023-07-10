<?php

namespace App\Http\Controllers;

use App\Models\Cast;
use App\Models\Education;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Contracts\Encryption\DecryptException;
use Facade\Ignition\Exceptions\ViewException;
use Session;
use Crypt;
use Hash;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Models\User;
use App\Models\Religion;
use App\Models\SubCast;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function Home( )
    {
        $religions = Religion::all(); 
        return view('forntend.index',compact('religions'));
    }
    public function UserLoginPage()
    {
        if(!empty(Auth()->User())){
            return redirect(url('/dashboard'));
        }else
        return view('forntend.login');
    }

    public function SignUP(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'user_name' => 'required',
            'profile_creator' => 'required',
            'password' => 'required',
            'c_password' => 'required|same:password',
            'email' => 'required|email|unique:users',
            'contact_number' => 'required',
            'religion_id' => 'required',
        ]);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator->errors());
        }
        $input = $req->all();
        $input['password'] = Hash::make($input['password']);
        $user = User::create($input);

        if ($user) {
            $req->session()->flash('success', 'Register successfully');
            return redirect('/');
        } else {
            $req->session()->flash('error', 'failed');
            return redirect('/');
        }
    }
    function UserLogin(Request $req)
    {
        $validator = Validator::make(
            $req->all(),
            [

                'email' => 'required|email|exists:users,email',
                'password' => 'required',

            ],
            [
                'email.exists' => 'Your email not register with us please register', // custom message
            ]
        );
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator->errors());
        }
        if (Auth::attempt(['email' => $req->email, 'password' => $req->password])) {

            return redirect(url('/dashboard'));
        } else {
            $validator->getMessageBag()->add('password', 'Password is incorrect.');
            return redirect()->back()->withErrors($validator);
        }
    }

    public function UserDashboard()
    {
        return view('forntend.dashboard');
    }

    public function UserProfile(User $user)
    {
        $page_title ="Profile ";
        $religion = Religion::where('name', Auth::user()->religion)->first();
        $casts = Cast::where('religion_id',$religion->id)->get();
        $langauges = Language::all();
        return view('forntend.editprofile', compact('user','casts','langauges','page_title'));
    }
    public function UpdateProfile(Request $request, User $user)
    {
        $user = User::find(Auth::user()->id);
        $user->update($request->all());

        return redirect(url('/profile'));
    }
    public function UserEducation()
    {
        $page_title ="Education ";
        $education = Education::where('user_id', Auth::user()->id)->first();
        return view('forntend.education', compact('education','page_title'));
    }
   public function EducationSave(Request $request, Education $education)
    {
        $education = Education::find(Auth::user()->id);
        $education->update($request->all());

        return redirect(url('/profile'));
    }
    

    public function Logout()
    {
        Session::flush();
        Auth::logout();
        return redirect(url('/'));
    }
}
