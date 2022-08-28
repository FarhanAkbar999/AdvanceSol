<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Str; 
use Auth;

class ProductSizeController extends Controller
{
    /**
     * Display a listing of the resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productSize = DB::table('product_sizes')->get();
        return view('admin.product-size.index', compact('productSize') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product-size.create' );
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
            'name' => ['required', 'string', 'max:50', 'unique:product_sizes,name'],
            'details' => ['required']
        ]);
        $data = array();
        $data['name'] = $request->name ;
        $data['details'] = $request->details ;
        $data['slug'] = Str::slug($request->name, '-');
        $data['createdBy'] = Auth::id();

        DB::table('product_sizes')->insert($data);
        return redirect()->route('product-sizes.index');
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
    public function edit($slug)
    {
        $productSize = DB::table('product_sizes')->where('slug', $slug)->first();
        return view('admin.product-size.edit', compact('productSize') );
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
        $data['details'] = $request->details ;
        $data['slug'] = Str::slug($request->name, '-');
        $data['updatedBy'] = Auth::id();

        DB::table('product_sizes')->where('slug', $slug)->update($data);
        return redirect()->route('product-sizes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        DB::table('product_sizes')->where('slug', $slug)->delete();
        return redirect()->route('product-sizes.index');    }
}
