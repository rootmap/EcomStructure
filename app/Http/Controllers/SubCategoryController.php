<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\SubCategory;
use App\category;

class SubCategoryController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $cat = category::all();
        return view('subcategory.index', ['cat' => $cat]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Request $request) {
        $this->validate($request, [
            'cid' => 'required',
            'name' => 'required'
        ]);
        
        $is_custom_layout=$request->is_custom_layout?1:0;

        $thumbname = "";
        if (!empty($request->file('photo'))) {
            $img = $request->file('photo');
            $upload = 'upload/category';
            //$filename=$img->getClientOriginalName();
            $thumbname = time() . "S." . $img->getClientOriginalExtension();
            $img->move($upload, $thumbname);
        }

        if(!empty($is_custom_layout))
        {
            $this->validate($request, [
                'layout' => 'required'
            ]);
        }

        $subcat = new SubCategory;
        $subcat->category_id = $request->cid;
        $subcat->name = $request->name;
        $subcat->photo = $thumbname;
        $subcat->description = $request->description;
        $subcat->is_custom_layout = $is_custom_layout;
        if(!empty($is_custom_layout))
        {
            $subcat->layout = $request->layout;
        }
        $subcat->save();
        \Session::flash('status', 'Sub-Category Successfully Added.');
        return redirect()->action('SubCategoryController@index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        //
    }

    public function showjson() {
        $json= DB::table('sub_categories')
        ->join('categories','sub_categories.category_id','=','categories.id')
        ->select('sub_categories.*','categories.name as cname')
        ->get();        
        
        //$json = SubCategory::all();

        $retarray = array("data" => $json, "total" => count($json));

        return response()->json($retarray);
        //"{\"data\":" . json_encode($json) . ",\"total\":" . count($json) . "}"
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        $cat = category::all();
        $json=SubCategory::find($id);
        return view('subcategory.edit',['data'=>$json,'cat'=>$cat]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request) {
        $this->validate($request, [
            'cid' => 'required',
            'name' => 'required'
        ]);
        
        $is_custom_layout=$request->is_custom_layout?1:0;

        if(!empty($is_custom_layout))
        {
            $this->validate($request, [
                'layout' => 'required'
            ]);
        }

        $thumbname = $request->ex_photo;
        if (!empty($request->file('photo'))) {
            $img = $request->file('photo');
            $upload = 'upload/category';
            //$filename=$img->getClientOriginalName();
            $thumbname = time() . "S." . $img->getClientOriginalExtension();
            $img->move($upload, $thumbname);
        }



        $subcat=SubCategory::find($request->id);
        $subcat->category_id = $request->cid;
        $subcat->name = $request->name;
        $subcat->photo = $thumbname;
        $subcat->description = $request->description;
        $subcat->is_custom_layout = $is_custom_layout;
        if(!empty($is_custom_layout))
        {
            $subcat->layout = $request->layout;
        }
        $subcat->save();
        \Session::flash('status', 'Sub-Category Successfully Updated.');
        return redirect()->action('SubCategoryController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        $json=SubCategory::find($id);
        $json->delete();
        return response()->json(1);
    }

}
