<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;

class FaqsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response 
     */
    public function index()
    {
        $faqs= DB::table('faqs')->join('faq_filters', 'faqs.filterId', '=', 'faq_filters.id')->select('faqs.*', 'faq_filters.name')->get();

        return view('admin.faqs.index', compact('faqs') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faqsFilters = DB::table('faq_filters')->get();
        return view('admin.faqs.create', compact('faqsFilters') );
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
            'filterId' => ['required', 'numeric', 'exists:faq_filters,id'],
            'question' =>['required'],
            'answer' => ['required'],
        ]);

        $data = array();
        $data['filterId'] = $request->filterId ;
        $data['question'] = $request->question ;
        $data['answer'] = $request->answer ;
        $data['createdBy'] = Auth::id();

        DB::table('faqs')->insert($data);
        return redirect()->route('faqs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $faqs= DB::table('faqs')->join('faq_filters', 'faqs.filterId', '=', 'faq_filters.id')->where('faqs.id', $id)->select('faqs.*', 'faq_filters.name')->first();
        // $faqs = DB::table('faqs')->where('id', $id)->first();
        return view('admin.faqs.show', compact('faqs') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faqs = DB::table('faqs')->first();
        $faqsFilters = DB::table('faq_filters')->get();
        return view('admin.faqs.edit', compact('faqs', 'faqsFilters') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = array();
        $data['filterId'] = $request->filterId ;
        $data['question'] = $request->question ;
        $data['answer'] = $request->answer ;
        $data['updatedBy'] = Auth::id();

        DB::table('faqs')->where('id', $id)->update($data);
        return redirect()->route('faqs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('faqs')->where('id', $id)->delete();
        return redirect()->route('faqs.index');
    }
}
