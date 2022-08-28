<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Str;
use Auth;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $categories = DB::table('product_categories')->get();
        return view('admin.productCategory.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.productCategory.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:50', 'unique:product_categories,name'],
            'details' => ['required', 'string']
        ]);
        $data = array();
        $data['name'] = $request->name ;
        $data['details'] = $request->details ;
        $data['slug'] = Str::slug($request->name, '-');
        $data['createdBy'] = Auth::id();
        // dd($data);

        DB::table('product_categories')->insert($data);
        return redirect()->route('product-categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $categories = DB::table('product_categories')->where('slug', $slug)->first();
        return view('admin.productCategory.show', compact('categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $categories = DB::table('product_categories')->where('slug', $slug)->first();
        return view('admin.productCategory.edit', compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $data = array();
        $data['name'] = $request->name ;
        $data['details'] = $request->details;

        DB::table('product_categories')->where('slug', $slug)->update($data);
        return redirect()->route('product-categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        DB::table('product_categories')->where('slug', $slug)->delete();
        return redirect()->route('product-categories.index');
    }
}
