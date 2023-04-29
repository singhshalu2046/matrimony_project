<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Country;
class CountryController extends Controller
{
    public function index(Request $request)
    {

        $countries = Country::all();
        $page_title = "Country List";
        return view('admin.country.index',compact('countries','page_title'));
    }

    public function create()
    {

        $page_title ="Country Edit";

        return view('admin.country.create',compact('page_title'));
    }

    public function store(Request $request)
    {
    
        $country = Country::create($request->all());

        return redirect()->route('admin.country.index');
    }

    public function edit(Country $country)
    {

        $page_title ="Country Edit";
        return view('admin.country.edit', compact('country','page_title'));
    }

    public function update(Request $request, country $country)
    {
        $country->update($request->all());

        return redirect()->route('admin.country.index');
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
