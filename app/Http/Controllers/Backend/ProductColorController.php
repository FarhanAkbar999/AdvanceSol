<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Str; 
use Auth;

class ProductColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colors = DB::table('product_colors')->get();
        return view('admin.productColor.index', compact('colors') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.productColor.create');
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
            'name' => ['required', 'string', 'max:50', 'unique:product_colors,name'],
            'details' => ['required']
        ]);
        $data = array();
        $data['name'] = $request->name ;
        $data['details'] = $request->details ;
        $data['slug'] = Str::slug($request->name, '-');
        $data['createdBy'] = Auth::id();

        DB::table('product_colors')->insert($data);
        return redirect()->route('product-colors.index');
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
        $colors = DB::table('product_colors')->where('slug', $slug)->first();
        return view('admin.productColor.edit', compact('colors') );
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

        DB::table('product_colors')->where('slug', $slug)->update($data);
        return redirect()->route('product-colors.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        DB::table('product_colors')->where('slug', $slug)->delete();
        return redirect()->route('product-colors.index');
    }
}
