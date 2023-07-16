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
use App\Models\Country;
use App\Models\State;
use App\Models\District;
use App\Models\Religion;
use App\Models\SubCast;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function Home( )
    {
        $religions = Religion::all(); 
        return view('frontend.index',compact('religions'));
    }
    public function UserLoginPage()
    {
        if(!empty(Auth()->User())){
            return redirect(url('/dashboard'));
        }else
        return view('frontend.login');
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
        return view('frontend.dashboard');
    }

    public function UserProfile(User $user)
    {
        $page_title ="Profile ";
        $religion = Religion::where('name', Auth::user()->religion)->first();
        // $casts = Cast::where('religion_id',$religion->id)->get();
        $casts = Cast::all();

        $langauges = Language::all();
        return view('frontend.editprofile', compact('user','casts','langauges','page_title'));
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
        // $education = Education::all();
        return view('frontend.education', compact('education','page_title'));
    }


    public function UserEducationSave(Request $request)
    {
        $request->merge(['user_id'=>auth()->user()->id]);
        $checkEducation = Education::where('user_id',auth()->user()->id)->count();
// dd($request->all());
        if($checkEducation){
            $data = Education::where('user_id',auth()->user()->id)->update($request->except(['_token']));
        }else{
            $data = Education::create($request->except(['_token']));
        }

        return redirect(url('/education-occupation'));

    }

    
    public function contactInfo(){
        $page_title ="Contact Info ";
        $countries=Country::select('id','name')->get();
        $states=State::select('id','name')->get();
        $districts=District::select('id','name')->get();

        return view('frontend.contactinfo', compact('page_title','countries','states','districts'));
    }


    public function saveContactInfo(Request $request){
        // dd($request->all());
        $brand = User::where('id',auth()->user()->id)->update($request->except(['_token','email']));
        // $countries=Country::select('id','name')->get();
        return redirect(url('/contact-info'));

        // return view('frontend.contactinfo', compact('page_title','countries'));
    }
    public function enhancedProfile(){
        $page_title ="Enhanced Profile ";
        $countries=Country::select('id','name')->get();
        $states=State::select('id','name')->get();
        $districts=District::select('id','name')->get();

        return view('frontend.enhancedProfile', compact('page_title','countries','states','districts'));
    }


    public function getStateDistrict(Request $request){
        $state_html='<option selected disabled value="">--Select--</option>';
        $district_html='<option selected disabled value="">--Select--</option>';

        if($request->country_id &&  !$request->state_id){

            $states=State::select('id','name')->where(['country_id'=>$request->country_id])->get();
            foreach($states as $state){
               $state_html.='<option value="'.$state->name ;
               $state_html .= '"  data-id=';
               $state_html .= $state->id;
               $state_html.=auth()->user()->state == $state->name ? 'selected ' :" ";
               $state_html.= '>';
               $state_html.= $state->name .'</option>';
            }
            $arr['state']=$state_html;
            // return response()->json(['state'=>$state_html]);
        }elseif($request->country_id && $request->state_id){

            $states=State::select('id','name')->where(['country_id'=>$request->country_id])->get();
            foreach($states as $state){
                $state_html.='<option value="'.$state->name ;
                $state_html .= '"  data-id=';
                $state_html .= $state->id;
                $state_html.=$request->state_id == $state->id ? ' selected ' :" ";
                $state_html.= '>';
                $state_html.= $state->name .'</option>';
             }
             $arr['state']=$state_html;
 

            $districts=District::select('id','name')->where(['country_id'=>$request->country_id,'state_id'=>$request->state_id])->get();
            foreach($districts as $district){
               $district_html.='<option value="'.$district->name ;
               $district_html .= '"  data-id=';
               $district_html .= $district->id;
               $district_html.=auth()->user()->district == $district->name ? 'selected ' :" ";
               $district_html.= '>';
               $district_html.= $district->name .'</option>';
            }
            // return response()->json(['state'=>$state_html]);
            $arr['district']=$district_html;

        }

        return response()->json($arr);

        // dd($request->all());

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
