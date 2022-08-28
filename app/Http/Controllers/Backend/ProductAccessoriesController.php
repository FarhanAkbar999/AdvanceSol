<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Str;
use Auth;

class ProductAccessoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $productAccessories = DB::table('product_accessories')->get();
        return view('admin.product-accessories.index', compact('productAccessories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product-accessories.create');
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
            'name' => ['required', 'string', 'max:50', 'unique:product_accessories,name'],
        ]);
        $data = array();
        $data['name'] = $request->name ;
        $data['slug'] = Str::slug($request->name, '-');
        $data['createdBy'] = Auth::id();
        // dd($data);

        DB::table('product_accessories')->insert($data);
        return redirect()->route('product-accessories.index');
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
        $productAccessories = DB::table('product_accessories')->where('slug', $slug)->first();
        return view('admin.product-accessories.edit', compact('productAccessories'));
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
        $data['slug'] = Str::slug($request->name, '-');

        DB::table('product_accessories')->where('slug', $slug)->update($data);
        return redirect()->route('product-accessories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        DB::table('product_accessories')->where('slug', $slug)->delete();
        return redirect()->route('product-accessories.index');
    }
}
