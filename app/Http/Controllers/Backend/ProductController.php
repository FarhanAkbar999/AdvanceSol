<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Str;
use Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response 
     */
    public function index()
    {
        $productCategory = DB::table('product_categories')->get();
        $productSubcategory = DB::table('product_sub_categories')->get();
        $productAccessories = DB::table('product_accessories')->get();
        $products = DB::table('products')->get();
        $users = DB::table('users')->get();

        return view('admin.products.index', compact('products', 'productCategory', 'productSubcategory', 'productAccessories', 'users') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productCategory = DB::table('product_categories')->get();
        $productSubcategory = DB::table('product_sub_categories')->get();
        $productAccessories = DB::table('product_accessories')->get();
        return view('admin.products.create', compact('productCategory', 'productSubcategory', 'productAccessories') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = array();
        $data['category_id'] = $request->category_id ;
        $data['sub_category_id'] = $request->sub_category_id ;
        $data['accessories_id'] = $request->accessories_id ;
        $data['name'] = $request->name ;
        $data['slug'] = Str::slug($request->name , '-');
        $data['createdBy'] = Auth::id();
        $data['price'] = $request->price ;
        $data['short_description'] = $request->short_description ;
        $data['description'] = $request->description ;


        if ($request->hasFile('image')) {
            $dims = getimagesize($request->image);
            $width = $dims[0];
            $height = $dims[1];
            $name = time() . '-' . $width . '-' . $height . '.' . $request->file('image')->extension();
            $path = public_path('uploads/products/');
            $file = $request->file('image');
            if ($file->move($path, $name)) {
                $data['image'] = $name;
            }
        }
        // dd($data);
        DB::table('products')->insert($data);
        return redirect()->route('product.index');
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
        $productCategory = DB::table('product_categories')->get();
        $productSubcategory = DB::table('product_sub_categories')->get();
        $productAccessories = DB::table('product_accessories')->get();
        $products = DB::table('products')->where('slug', $slug)->first();
        $users = DB::table('users')->get();

        return view('admin.products.edit', compact('products', 'productCategory', 'productSubcategory', 'productAccessories', 'users') );
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
        $data['category_id'] = $request->category_id ;
        $data['sub_category_id'] = $request->sub_category_id ;
        $data['accessories_id'] = $request->accessories_id ;
        $data['name'] = $request->name ;
        $data['slug'] = Str::slug($request->name , '-');
        $data['updatedBy'] = Auth::id();
        $data['price'] = $request->price ;
        $data['short_description'] = $request->short_description ;
        $data['description'] = $request->description ;


        if ($request->hasFile('image')) {
            $dims = getimagesize($request->image);
            $width = $dims[0];
            $height = $dims[1];
            $name = time() . '-' . $width . '-' . $height . '.' . $request->file('image')->extension();
            $path = public_path('uploads/products/');
            $file = $request->file('image');
            if ($file->move($path, $name)) {
                $data['image'] = $name;
            }
        }
        // dd($data);
        DB::table('products')->where('slug', $slug)->update($data);
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        DB::table('products')->where('slug', $slug)->delete();
        return redirect()->route('product.index');
    }
}
