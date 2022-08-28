<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

use Illuminate\Support\Facades\Mail;
use App\Mail\OrderCancelMail;
use App\Mail\OrderAcceptMail;
use App\Mail\OrderDeliveredMail;

class OrderDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function deliveredOrdersIndex(){

        $deliveredOrders = DB::table('orders')->where('status', 2 )->get();
        return view('admin.order.deliveredOrdersIndex', compact('deliveredOrders') );        
    }


    public function orderDelivered($id){
  
        $data = array();
        $data['status'] = 2 ;
        $data['delivered_date'] = Carbon::now()->format('d F Y'); ;

        DB::table('orders')->where('id', $id )->update($data);


        // start sending email

        $orderdata = DB::table('orders')->where('id', $id)->first();
        // dd($order);
        Mail::to($orderdata->user_email)->send(new OrderDeliveredMail($orderdata));

        // end sending email



        $notification = array(
            'message' => 'Order Delivered Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }


    public function shippingOrdersIndex(){

        $shippingOrders = DB::table('orders')->where('status', 1 )->get();
        return view('admin.order.shippingOrdersIndex', compact('shippingOrders') );

    }


    public function canceledOrdersIndex(){

        $canceledOrders = DB::table('orders')->where('status', 3 )->get();
        return view('admin.order.canceledOrdersIndex', compact('canceledOrders') );

    }


    public function cancel($id){

        $data = array();
        $data['status'] = 3 ;
        $data['cancel_date'] = Carbon::now()->format('d F Y'); 

        DB::table('orders')->where('id', $id )->update($data);

        // start sending email

        $orderdata = DB::table('orders')->where('id', $id)->first();
        // dd($order);
        Mail::to($orderdata->user_email)->send(new OrderCancelMail($orderdata));

        // end sending email

        $notification = array(
            'message' => 'Order Canceled Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }

    public function accept($id) 
    {
        $data = array();
        $data['status'] = 1 ;
        $data['confirmed_date'] = Carbon::now()->format('d F Y'); ;

        DB::table('orders')->where('id', $id )->update($data);

        // start sending email

        $orderdata = DB::table('orders')->where('id', $id)->first();
        // dd($order);
        Mail::to($orderdata->user_email)->send(new OrderAcceptMail($orderdata));

        // end sending email

        $notification = array(
            'message' => 'Order Sent for Shipping Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }


    public function index()
    {
        $orders = DB::table('orders')->where('status', 0 )->get();
        return view('admin.order.orderDetails.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orders = DB::table('orders')->where('id', $id)->first();

        $orderItems = DB::table('order_items')
                        ->join('products', 'order_items.product_id', '=', 'products.id')
                        ->select('order_items.*', 'products.name', 'products.short_description')
                        ->where('order_id', $id)
                        ->get();
        // dd($orderItems);

        return view('admin.order.orderDetails.show', compact('orders', 'orderItems') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
