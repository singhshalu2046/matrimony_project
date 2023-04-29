<?php

namespace App\Http\Controllers;
use App\Models\Country;
use Illuminate\Http\Request;
use DB;

class CommonController extends Controller
{
    //
    public function delete(Request $request){
        // DB::table($request->table)->where(['id'=>$request->id])->delete();
    //    dd($request->model);
        $modelName = '\\App\\Models\\'.$request->model;
        $this->model = new $modelName;
        $deleteStaus = $modelName =$this->model::where(['id'=>$request->id])->update(['deleted_at'=>now()]);
        if($deleteStaus){
            $status = 1;
        }else{
            $status = 0;
        }
        return response()->json(['status'=>$status]);


    }
}
