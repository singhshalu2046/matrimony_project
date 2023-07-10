<?php

namespace App\Http\Controllers;

use App\Models\Religion;
use Illuminate\Http\Request;

class ReligionController extends Controller
{
    public function index(Request $request)
    {

        $religions = Religion::all();
        $page_title = "Religion List";
        return view('admin.religion.index',compact('religions','page_title'));
    }

    public function create()
    {

        $page_title ="Religion Edit";

        return view('admin.religion.create',compact('page_title'));
    }

    public function store(Request $request)
    {
    
        $country = Religion::create($request->all());

        return redirect()->route('admin.religion.index');
    }

    public function edit(Religion $religion)
    {

        $page_title ="Religion Edit";
        return view('admin.religion.edit', compact('religion','page_title'));
    }

    public function update(Request $request, Religion $religion)
    {
        $religion->update($request->all());

        return redirect()->route('admin.religion.index');
    }


    public function show(Religion $country)
    {
        echo "show";
    }

    
    public function destroy(Religion $brand)
    {
        dd("hy");
        abort_if(Gate::denies('brand_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $brand->delete();

        return back();
    }

    

}
