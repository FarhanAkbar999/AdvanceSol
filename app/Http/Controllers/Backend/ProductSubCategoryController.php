<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;
use Str;

class ProductSubCategoryController extends Controller 
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $subcategories= DB::table('product_sub_categories')->get();
        $subcategories= DB::table('product_sub_categories')
                            ->join('product_categories', 'product_sub_categories.pscCategoryId', '=', 'product_categories.id')
                            ->join('distributers', 'product_sub_categories.distributer_id', '=', 'distributers.id')
                            ->select('product_sub_categories.*', 'product_categories.name', 
                                'distributers.distributer_name')
                            ->get();
        // dd($subcategories);
        return view('admin.productSubCategory.index', compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = DB::table('product_categories')->get();

        $distributers = DB::table('distributers')->get();


        return view('admin.productSubCategory.create',  compact('categories', 'distributers') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'pscCategoryId' => ['required', 'numeric', 'exists:product_categories,id'],
            'distributer_id' => ['required', 'numeric', 'exists:distributers,id'],
            'pscName' =>['required', 'string', 'max:50',
                        'unique:product_sub_categories,pscName'],
            'pscDetails' => ['required', 'string'],
            'pscPrice' => ['required'],
        ]);

        $data = array();
        $data['pscCategoryId'] = $request->pscCategoryId ;
        $data['pscName'] = $request->pscName ;
        $data['pscDetails'] = $request->pscDetails ;
        $data['pscSlug'] = Str::slug($request->pscName, '-');
        $data['pscCreatedBy'] = Auth::id();
        $data['pscPrice'] = $request->pscPrice ;
        $data['pscQuickShip'] = $request->pscQuickShip ; 
        $data['distributer_id'] = $request->distributer_id ;

        if ($request->hasFile('pscImage')) {
            $dims = getimagesize($request->pscImage);
            $width = $dims[0];
            $height = $dims[1];
            $name = uniqid() . '-' . $width . '-' . $height . '.' . $request->file('pscImage')->extension();
            $path = public_path('uploads/productSubCategory/');
            $file = $request->file('pscImage');
            if ($file->move($path, $name)) {
                $data['pscImage'] = $name;
            }
        }
        DB::table('product_sub_categories')->insert($data);
        return redirect()->route('product-subcategories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($pscSlug)
    {
        $subcategories= DB::table('product_sub_categories')->where('pscSlug',$pscSlug)->first();
        // dd($subcategories);
        $categories = DB::table('product_categories')->get();

        $distributers = DB::table('distributers')->get();

        return view('admin.productSubCategory.edit', compact('subcategories', 'categories', 'distributers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $pscSlug)
    {
        // dd($request);
        $data = array();
        $data['pscCategoryId'] = $request->pscCategoryId ;
        $data['pscName'] = $request->pscName ;
        $data['pscDetails'] = $request->pscDetails ;
        $data['pscSlug'] = Str::slug($request->pscName, '-');
        // $data['pscCreatedBy'] = Auth::id();
        $data['pscPrice'] = $request->pscPrice ;
        $data['pscQuickShip'] = $request->pscQuickShip ;
        $data['distributer_id'] = $request->distributer_id ;

        if ($request->hasFile('pscImage')) {
            $dims = getimagesize($request->pscImage);
            $width = $dims[0];
            $height = $dims[1];
            $name = uniqid() . '-' . $width . '-' . $height . '.' . $request->file('pscImage')->extension();
            $path = public_path('uploads/productSubCategory/');
            $file = $request->file('pscImage');
            if ($file->move($path, $name)) {
                $data['pscImage'] = $name;
            }
        // $oldimage = 'uploads/productSubCategory/' . $request->old_image;
        // unlink('uploads/productSubCategory/' . $request->old_image);
        }

        DB::table('product_sub_categories')->where('pscSlug', $pscSlug)->update($data);
        return redirect()->route('product-subcategories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($pscSlug)
    {
        DB::table('product_sub_categories')->where('pscSlug', $pscSlug)->delete($data);
        return redirect()->route('product-subcategories.index');
    }
}
