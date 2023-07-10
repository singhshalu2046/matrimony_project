<?php

namespace App\Http\Controllers;

use App\Models\Cast;
use App\Models\Religion;
use App\Models\SubCast;
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

    function GetSubCategory(Request $req)
	{

		$sub_category = SubCast::where('cast_id','=',$req->subcast)->get();
		$data ='<option value="">Select</option>';
		foreach($sub_category as $item){
			if($item->id == Session::get('subcast')){
				$data .='<option value="'.$item->id.'" selected>'.$item->sub_category_name.'</option>';}
			else{
				$data .='<option value="'.$item->id.'">'.$item->sub_category_name.'</option>';
			}
		}
		return $data;
	}

    function GetCast(Request $req)
	{
      
		$sub_sub_category = Cast::where('relgion_id','=',$req->cast)->get();
		$data ='<option value="">Select</option>';
		foreach($sub_sub_category as $item){
			if($item->id == Session::get('sub_sub_category_id')){
				$data .='<option value="'.$item->id.'" selected>'.$item->sub_sub_category_name.'</option>';}
			else{
				$data .='<option value="'.$item->id.'">'.$item->sub_sub_category_name.'</option>';
			}
		}
		return $data;
	}
}
