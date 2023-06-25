<?php

namespace App\Http\Controllers;

use App\Models\Cast;
use App\Models\Religion;
use Illuminate\Http\Request;

class CastController extends Controller
{
    public function index(Request $request)
    {
        $religions = Religion::pluck('id');
        // $states = Cast::with(['getCountry'=>function($query){
        //    $query->select('id','name','deleted_at')->whereNull('deleted_at')->where(['status'=>'1']);
        // }])->get();
        // dd($states);
        $casts = Cast::with(['getReligion'])->whereIn('religion_id', $religions)->get();

        $page_title = "Cast List";
        return view('admin.cast.index', compact('casts', 'page_title'));
    }

    public function create()
    {

        $page_title = "Cast Add";
        $religions = Religion::pluck('name', 'id');
        return view('admin.cast.create', compact('religions', 'page_title'));
    }

    public function store(Request $request)
    {

        $state = Cast::create($request->all());

        return redirect()->route('admin.cast.index');
    }

    public function edit(Cast $cast)
    {
        $religions = Religion::pluck('name', 'id');

        $page_title = "Cast Edit";
        return view('admin.cast.edit', compact('religions', 'cast', 'page_title'));
    }

    public function update(Request $request, Cast $cast)
    {

        $cast->update($request->all());

        return redirect()->route('admin.cast.index');
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
