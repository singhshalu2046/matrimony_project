<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Country;
use App\Models\Language;

class LanguageController extends Controller
{
    public function index(Request $request)
    {

        $languages = Language::all();
        $page_title = "language List";
        return view('admin.language.index',compact('languages','page_title'));
    }

    public function create()
    {

        $page_title ="Language Edit";

        return view('admin.language.create',compact('page_title'));
    }

    public function store(Request $request)
    {
    
        $language = Language::create($request->all());

        return redirect()->route('admin.language.index');
    }

    public function edit(Language $language)
    {

        $page_title ="language Edit";
        return view('admin.language.edit', compact('language','page_title'));
    }

    public function update(Request $request, language $language)
    {
        $language->update($request->all());

        return redirect()->route('admin.language.index');
    }


    public function show(Language $language)
    {

        echo "show";
    }

    
    public function destroy(Language $brand)
    {

        dd("hy");
        abort_if(Gate::denies('brand_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $brand->delete();

        return back();
    }

}
