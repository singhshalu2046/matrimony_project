<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Qualification;

class qualificationController extends Controller
{
    public function index(Request $request)
    {

        $qualifications= Qualification::all();
        $page_title = "qualification List";
        return view('admin.qualification.index',compact('qualifications','page_title'));
    }

    public function create()
    {

        $page_title ="qualification Edit";

        return view('admin.qualification.create',compact('page_title'));
    }

    public function store(Request $request)
    {
    
        $qualification = qualification::create($request->all());

        return redirect()->route('admin.qualification.index');
    }

    public function edit(Qualification $qualification)
    {

        $page_title ="qualification Edit";
        return view('admin.qualification.edit', compact('qualification','page_title'));
    }

    public function update(Request $request, Qualification $qualification)
    {
        $qualification->update($request->all());

        return redirect()->route('admin.qualification.index');
    }


    public function show(Qualification $qualification)
    {

        echo "show";
    }

    
    public function destroy(Qualification $brand)
    {

        dd("hy");
        abort_if(Gate::denies('brand_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $brand->delete();

        return back();
    }

}
