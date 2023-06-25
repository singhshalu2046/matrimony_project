<?php

namespace App\Http\Controllers;

use App\Models\Cast;
use App\Models\Religion;
use App\Models\SubCast;
use Illuminate\Http\Request;

class SubCastController extends Controller
{
    public function index(Request $request)
    {
        $religions = Religion::pluck('id');
        $casts = Cast::pluck('id');
        // $states = Cast::with(['getCountry'=>function($query){
        //    $query->select('id','name','deleted_at')->whereNull('deleted_at')->where(['status'=>'1']);
        // }])->get();
        // dd($states);
        $subcasts = SubCast::with(['getReligion','getCast'])->whereIn('religion_id', $religions)->whereIn('cast_id', $casts)->get();

        $page_title = "Cast List";
        return view('admin.subcast.index', compact('subcasts', 'page_title'));
    }

    public function create()
    {

        $page_title = "Cast Add";
        $religions = Religion::pluck('name', 'id');
        $casts = Cast::pluck('name', 'id');
        return view('admin.subcast.create', compact('religions', 'casts','page_title'));
    }

    public function store(Request $request)
    {

        $state = SubCast::create($request->all());

        return redirect()->route('admin.subcast.index');
    }

    public function edit(Cast $cast)
    {
        $religions = Religion::pluck('name', 'id');
        $casts = Cast::pluck('name', 'id');
        $page_title = "Cast Edit";
        return view('admin.subcast.edit', compact('religions', 'cast', 'page_title'));
    }

    public function update(Request $request, SubCast $subCast)
    {

        $subCast->update($request->all());

        return redirect()->route('admin.subcast.index');
    }


    public function show(Cast $religions)
    {

        echo "show";
    }


    public function destroy(Cast $brand)
    {

        dd("hy");
        abort_if(Gate::denies('brand_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $brand->delete();

        return back();
    }
}
