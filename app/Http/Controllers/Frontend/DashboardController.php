<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth; 
use Carbon\Carbon;
use App\Models\Order;

use Illuminate\Support\Facades\Mail;
use App\Mail\OrderMail;

class DashboardController extends Controller
{
    public function orderTrackingPost(Request $request){

        $orderStatus = DB::table('orders')->where('invoice_no', $request->trackingId)->first();
        // dd($orderStatus);

        return view('customer.orderTracking.show', compact('orderStatus') );
    }

    public function orderTracking(){
        return view('customer.orderTracking.index');
    }
    public function rtaBathroomVanitiesFilter(Request $request)
    {
        if ($request->frame && $request->color) {
            $bathroom = DB::table('product_sub_categories')                            
                            ->where('pscCategoryId', 2)
                            ->where('pscName','LIKE',"%$request->color%")
                            ->where('frame', $request->frame)
                            ->orderBy('pscPrice',$request->price)
                            ->get();
        }
        else if ($request->color) {
            $bathroom = DB::table('product_sub_categories')                            
                            ->where('pscCategoryId', 2)
                            ->where('pscName','LIKE',"%$request->color%")
                            ->orderBy('pscPrice',$request->price)
                            ->get();
        }

        else if ($request->frame) {
            // dd('frameless');
            $bathroom = DB::table('product_sub_categories')                            
                            ->where('pscCategoryId', 2)
                            ->where('frame', $request->frame)
                            ->orderBy('pscPrice',$request->price)
                            ->get();
        }
        else if ($request->price) {
            // dd('frame');
            $bathroom = DB::table('product_sub_categories')                            
                            ->where('pscCategoryId', 2)
                            ->orderBy('pscPrice',$request->price)
                            ->get();
        }

        return view('customer.filter.bathroomfilter', compact('bathroom') );
    }

    public function rtaKitchenCabinetsFilter(Request $request){
        
        if ($request->frame && $request->color) {

            $kitchen = DB::table('product_sub_categories')                            
                            ->where('pscCategoryId', 1)
                            ->where('pscName','LIKE',"%$request->color%")
                            ->where('frame', $request->frame)
                            ->orderBy('pscPrice',$request->price)
                            ->get();
        }
        else if ($request->color) {
            $kitchen = DB::table('product_sub_categories')                            
                            ->where('pscCategoryId', 1)
                            ->where('pscName','LIKE',"%$request->color%")
                            ->orderBy('pscPrice',$request->price)
                            ->get();
        }

        else if ($request->frame) {

            $kitchen = DB::table('product_sub_categories')                            
                            ->where('pscCategoryId', 1)
                            ->where('frame', $request->frame)
                            ->orderBy('pscPrice',$request->price)
                            ->get();
                            // dd($kitchen);
        }
        else if ($request->price) {
            // dd('frame');
            $kitchen = DB::table('product_sub_categories')                            
                            ->where('pscCategoryId', 1)
                            ->orderBy('pscPrice',$request->price)
                            ->get();
        }

        return view('customer.filter.kitchenfilter', compact('kitchen') );
    }

    public function rtaKitchenCabinetsIndex(Request $request){        
        
        $distributer_pluck = DB::table('product_sub_categories')
                                ->join('product_categories', 'product_sub_categories.pscCategoryId', '=', 'product_categories.id')
                            ->where('product_categories.name', 'kitchen')
                            ->distinct()
                            ->pluck('product_sub_categories.distributer_id');        

        $distributers = DB::table('distributers')->get();
        $filter = 0;

        return view('customer.rtaKitchenCabinetsIndex', compact('distributer_pluck', 'distributers', 'filter'));
    }

    public function Home(){
        
        return view('customer.home');

    }
    
    public function Search(Request $request){
        $searchKey = $request->search;

        $searchResult = DB::table('products')
                        ->where('short_description','LIKE',"%$searchKey%")->get();

        // dd($searchResult);

        return view('customer.search', compact('searchResult') );
    }

    public function faqs(){
        $faqs = DB::table('faqs')->get();
        $faq_filters = DB::table('faq_filters')->get();
        return view('customer.faqs', compact('faqs', 'faq_filters'));
    }
    public function faqsFiltersPost(Request $request){
        $faqFilters = $request->faqFilters;

        $faq_filters = DB::table('faq_filters')->get();
        $faqs = DB::table('faqs')
                        ->join('faq_filters', 'faqs.filterId', '=', 'faq_filters.id')
                        ->select('faqs.*', 'faq_filters.*')
                        ->where('faq_filters.name', $faqFilters )
                        ->get();

        return view('customer.faqs', compact('faqs', 'faq_filters') );
    }
    public function assembledKitchenCabinetsIndex(){
        return view('customer.assembledKitchenCabinetsIndex');
    }
    public function quickShipIndex(){
        $quickship = DB::table('product_sub_categories')->where('pscQuickShip', 1)->get();
        return view('customer.quickShipIndex', compact('quickship') );
    }

    public function rtaBathroomVanitiesIndex(){
        // $bathroom = DB::table('product_sub_categories')->where('pscCategoryId', 2)->get();
        // return view('customer.rtaBathroomVanitiesIndex', compact('bathroom'));

        $distributer_pluck = DB::table('product_sub_categories')
                                ->join('product_categories', 'product_sub_categories.pscCategoryId', '=', 'product_categories.id')
                            ->where('product_categories.name', 'bathroom')
                            ->distinct()
                            ->pluck('product_sub_categories.distributer_id');        

        $distributers = DB::table('distributers')->get();
        return view('customer.rtaBathroomVanitiesIndex', compact('distributer_pluck', 'distributers'));
    }
    public function refundableSamplesIndex(){

       $refunableSamples =  DB::table('product_sub_categories') 
                            ->join('products', 'product_sub_categories.refunable_samples', '=', 'products.id')
                            ->whereNotNull('refunable_samples')
                            ->get();

        // dd($refunableSamples);

        return view('customer.refundableSamplesIndex', compact('refunableSamples'));
    }
    public function kitchenHoodsIndex(){
        $kitchenHoods = DB::table('product_sub_categories')
                        ->where('hoodsId', 1)->get();
        return view('customer.kitchenHoodsIndex', compact('kitchenHoods') );
    }
    public function productDetailsIndex($slug){
        // dd()

        $productChain = DB::table('product_sub_categories')
                        ->where('pscSlug',$slug)
                        ->first();



        // dd($productChain);
        $categoryId = $productChain->pscCategoryId;
        $subCategoryId = $productChain->id ;

        $productDetails = DB::table('products')
                            ->where('category_id', $categoryId)
                            ->where('sub_category_id', $subCategoryId)
                            ->get();



        $major_accessories = DB::table('major_accessories')->get();
        $major_accessories_exist = DB::table('products')
                            ->where('category_id',$categoryId)
                            ->where('sub_category_id', $subCategoryId)
                            ->distinct()
                            ->pluck('major_accessories_id');

        $major_accessories_exist_without_distinct = DB::table('products')
                            ->where('category_id',$categoryId)
                            ->where('sub_category_id', $subCategoryId)
                            ->pluck('major_accessories_id');

        $accessories = DB::table('product_accessories')->get();
        $accessories_exist = DB::table('products')
                            ->where('category_id',$categoryId)
                            ->where('sub_category_id', $subCategoryId)
                            ->distinct()
                            ->pluck('accessories_id');

        $cartUserProducts = DB::table('carts')
                        ->join('products','carts.productId', '=', 'products.id')
                        ->select('carts.*', 'products.*')
                        ->where('userId', Auth::id() )
                        ->get();        

        return view('customer.productDetailsIndex', compact('productDetails', 
            'cartUserProducts', 'productChain', 'major_accessories_exist', 'major_accessories', 'accessories', 'accessories_exist', 'major_accessories_exist_without_distinct'));
    }
    public function checkout(){
        $cartProduct= DB::table('carts') 
                    ->join('products', 'carts.productId', '=', 'products.id')
                    ->select('carts.*', 'products.*')
                    ->where('carts.userId', Auth::id())
                    ->get();

        $cartGrandTotal = $cartProduct->sum('sub_total');
        // dd($cartProduct);
 
       
        return view('customer.checkout', compact('cartProduct', 'cartGrandTotal') );
    }

    public function checkoutPayment(Request $request){

        // dd($request);

        $data = array();
        $data['countryName'] = $request->countryName ;
        $data['firstName'] = $request->firstName ;
        $data['lastName'] = $request->lastName ;
        $data['companyName'] = $request->companyName ;
        $data['address'] = $request->address;
        $data['city'] = $request->city;
        $data['State'] = $request->State ;
        $data['zipcode'] = $request->zipcode ;
        $data['phoneNumber'] = $request->phoneNumber ;
        $data['role'] = $request->role ;
        $data['industry'] = $request->industry ;
        $data['subIndustry'] = $request->subIndustry ;
        $data['federal_tax_id'] = $request->federal_tax_id ;
        $data['contractor_license_no'] = $request->contractor_license_no ;
        $data['no_license_reason'] = $request->no_license_reason ;
        $data['order_total'] = $request->order_total ;
        // dd($data);


        \Stripe\Stripe::setApiKey('sk_test_51IemLPDq3PO52CbnTntV1ij6dTmSWZ2kAAu5uMhNjhRBEPeUP5ispAkMffrdsCxPwnK677A97xOjUC023BPnthE3003Ymv9CXW');
     
        $token = $_POST['stripeToken'];
        $charge = \Stripe\Charge::create([
          'amount' => $data['order_total']*100,
          'currency' => 'usd',
          'description' => 'My Cabinets Pro',
          'source' => $token,
          'metadata' => ['order_id' => uniqid() ],
        ]);

        $data['user_id'] = Auth::id();
        $data['user_email'] = Auth::user()->email;
        $data['payment_method'] = $charge->payment_method;
        $data['transaction_id'] = $charge->balance_transaction;
        $data['currency'] = $charge->currency;
        $data['order_id'] = $charge->metadata->order_id;
        $data['invoice_no'] = 'MCP'. mt_rand(10000000,99999999);
        $data['order_date'] = Carbon::now()->format('d F Y');
        $data['order_month'] = Carbon::now()->format('F');
        $data['order_year'] = Carbon::now()->format('Y');
        $data['status'] = '0';
        // $data['created_at'] = Carbon::now();

        $order_id = DB::table('orders')->insertGetId($data); 


        $user_cart = DB::table('carts')->where('userId', Auth::id())->get();

        foreach($user_cart as $cart){
            $cart_data = array();
            $cart_data['order_id'] = $order_id;
            $cart_data['product_id'] = $cart->productId;
            $cart_data['qty'] = $cart->quantity;
            $cart_data['unit_price'] = $cart->unit_price;
            $cart_data['subtotal_price'] = $cart->sub_total;
            $cart_data['created_at'] = Carbon::now();

            DB::table('order_items')->insert($cart_data);
        }

         // start sending email
 
        $orderdata = DB::table('orders')->where('id', $order_id)->first();
                // dd($orderdata);

        Mail::to($orderdata->user_email)->send(new OrderMail($orderdata));

        // end sending email

        

        DB::table('carts')->where('userId', Auth::id())->delete();

        $notification = array(
            'message' => 'Order Placed Successfull', 
            'alert-type' => 'success'
        );

        return redirect()->route('home')->with($notification);        
    }

    public function contactUs(){
        return view('customer.contactUs');
    }
    public function contactUsPost(Request $request){
        

        $data = array();
        $data['name'] = $request->name ;
        $data['email'] = $request->email ;
        $data['zipcode'] = $request->zipcode ;
        $data['subject'] = $request->subject ;
        $data['message'] = $request->message ;

        DB::table('contact_us')->insert($data);
        return redirect()->route('contactUs');
    }
    public function aboutUs(){
        return view('customer.aboutUs');
    }
    public function resources(){
        return view('customer.resources');
    }
    public function trade(){
        return view('customer.trade');
    }
    public function freedesign(){
        return view('customer.freedesign');
    }
}
