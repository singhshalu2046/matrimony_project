<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Country;
use App\Models\State;


class StateController extends Controller
{
    public function index(Request $request)
    {
        $countries = Country::pluck('id');
        // $states = State::with(['getCountry'=>function($query){
        //    $query->select('id','name','deleted_at')->whereNull('deleted_at')->where(['status'=>'1']);
        // }])->get();
        // dd($states);
        $states = State::with(['getCountry'])->whereIn('country_id',$countries)->get();
 
        $page_title = "State List";
        return view('admin.state.index',compact('states','page_title'));
    }

    public function create()
    {

        $page_title ="State Add";
        $countries = Country::pluck('name','id');
        return view('admin.state.create',compact('countries','page_title'));
    }

    public function store(Request $request)
    {
    
        $state = State::create($request->all());

        return redirect()->route('admin.state.index');
    }

    public function edit(State $state)
    {
        $countries = Country::pluck('name','id');

        $page_title ="Country Edit";
        return view('admin.state.edit', compact('countries','state','page_title'));
    }

    public function update(Request $request, State $state)
    {

        $state->update($request->all());

        return redirect()->route('admin.state.index');
    }


    public function show(Country $country)
    {

        echo "show";
    }

    
    public function destroy(Country $brand)
    {

        dd("hy");
        abort_if(Gate::denies('brand_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $brand->delete();

        return back();
    }

}
