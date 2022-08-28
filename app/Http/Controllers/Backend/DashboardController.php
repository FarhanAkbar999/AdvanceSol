<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

class DashboardController extends Controller
{ 
    public function index(){
        $review = DB::table('orders')->where('status', 0)->get();

        $sentForShipping = DB::table('orders')->where('status', 1)->get();

        $completed = DB::table('orders')->where('status', 2)->get();

        $canceled = DB::table('orders')->where('status', 3)->get();


        return view('admin.dashboard', compact('review', 'sentForShipping', 'completed', 'canceled') );
    }
}
