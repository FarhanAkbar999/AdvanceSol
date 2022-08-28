<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Str;

class FaqsFiltersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqsFilters = DB::table('faq_filters')->get();
        return view('admin.faqs-filters.index', compact('faqsFilters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function create()
    {
        return view('admin.faqs-filters.create');
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
            'name' => ['required', 'string', 'max:50', 'unique:faq_filters,name'],
        ]);
        $data = array();
        $data['name'] = $request->name ;
        $data['slug'] = Str::slug($request->name, '-');

        DB::table('faq_filters')->insert($data);
        return redirect()->route('faqs-filters.index');
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
        $faqsFilters = DB::table('faq_filters')->where('slug', $slug)->first();
        return view('admin.faqs-filters.edit', compact('faqsFilters'));
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

        DB::table('faq_filters')->where('slug', $slug)->update($data);
        return redirect()->route('faqs-filters.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        DB::table('faq_filters')->where('slug', $slug)->delete();
        return redirect()->route('faqs-filters.index');
    }
}
