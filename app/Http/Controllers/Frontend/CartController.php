<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;  

class CartController extends Controller
{
    public function CartPageFullDelete(){
        DB::table('carts')->where('userId', Auth::id() )->delete();

        return response()->json(['success' => 'Cart Empty']);

    }
    public function addToCart($slug){
        $refunableSamples = DB::table('refunable_samples')->where('slug', $slug)->first();
        

        $data = array();
        $data['refundableId'] = $refunableSamples->id ;
        $data['userId'] = Auth::id();        
        $data['slug'] = $refunableSamples->slug ;
        // dd($data);
        DB::table('carts')->insert($data);

        $notification = array(
            'alert-type' => 'warning',
            'message' => 'product added Successfully',
        );
        return redirect()->route('refundable-samples')->with($notification);
    }

    public function addProductToCart($slug){
        $product = DB::table('products')->where('slug', $slug)->first();

        $data = array();
        $data['productId'] = $product->id ;
        $data['userId'] = Auth::id();        
        $data['slug'] = $product->slug ;
        // dd($data);
        DB::table('carts')->insert($data);

        $subCategoryId = $product->sub_category_id;
        $subCategory = DB::table('product_sub_categories')->where('id', $subCategoryId)->first();
        $subCategorySlug = $subCategory->pscSlug;
        // dd($subCategorySlug);

        $notification = array(
            'alert-type' => 'success',
            'message' => 'product added Successfully',
        );
        return redirect()->route('productDetails',$subCategorySlug)->with($notification);
    }


    public function index(){
        $cartProduct= DB::table('carts') 
                    ->join('products', 'carts.productId', '=', 'products.id')
                    ->select('carts.*', 'products.*')
                    ->where('userId', Auth::id())
                    ->get();
        // dd($cartProduct->count());

        $cartRefundableSample = DB::table('carts')
                    ->join('refunable_samples', 'carts.refundableId', '=', 'refunable_samples.id')
                    ->select('carts.*', 'refunable_samples.*')
                    ->where('userId', Auth::id() )
                    ->get();
        // dd($cartRefundableSample);
        return view('customer.cart.index', compact('cartProduct', 'cartRefundableSample'));
    }

    public function update(Request $request){
        
    }

    public function destroy($slug){
        
        DB::table('carts')->where('slug', $slug)->where('userId', Auth::id())
                            ->delete();                  
        return redirect()->route('cart');

    }

    public function ajaxAddToCart($slugId){
        // $id = Auth::id();

        $product = DB::table('products')->where('slug', $slugId)->get();
            // dd($product);
        // $data = array();
        // $data[' productId'] = $product->id ;
        // $data['userId'] = Auth::id();        
        // $data['slug'] = $product->slug ;
        // DB::table('carts')->insert($data);

        // $cartProducts = DB::table('carts')->where('userId',$id)->get();

        // $cartUserProducts= DB::table('carts')
        //                 ->join('products', 'carts.productId', '=', 'products.id')
        //                 ->select('carts.*', 'products.*')
        //                 ->where('userId',$data[' userId'])
        //                 ->get();

        return response()->json($product);
    }

    public function ProductViewModal($id){
        $modalViewProduct = DB::table('products')->where('id',$id)->first();


        $modalViewProduct->price = ($modalViewProduct->price*25/100) +  $modalViewProduct->price;
        // $modalViewProduct->price = $modalViewProduct->price*25;

        return response()->json($modalViewProduct);
    }

    public function cartProductStoreAJAX(Request $request, $id){

        $product = DB::table('products')->where('id',$id)->first();

        $data = array();
        $data['productId'] = $product->id ;
        $data['userId'] = Auth::id() ;
        $data['slug'] = $product->slug ;
        $data['quantity'] = $request->quantity;
        $data['unit_price'] = $request->price ;
        $data['sub_total'] = $request->quantity * $request->price;

        DB::table('carts')->insert($data);

        return response()->json(['success' => 'Successfully Added on Your Cart']);

    }

    public function ProductMiniCart(){
        // $miniCart = DB::table('carts')->where('userId', Auth::id())->get();

        $miniCart= DB::table('carts') 
                    ->join('products', 'carts.productId', '=', 'products.id')
                    ->select('carts.*', 'products.*')
                    ->where('carts.userId', Auth::id())
                    ->get();
        $miniCartTotal = $miniCart->sum('sub_total'); /*grand total*/

        $miniCartQty= $miniCart->sum('quantity'); 

        return response()->json(array(
            'miniCart' => $miniCart,
            'miniCartQty' => $miniCartQty,
            'miniCartTotal' => round($miniCartTotal),

        ));
    }

    public function ProductMiniCartSticky(){
         $miniCart= DB::table('carts') 
                    ->join('products', 'carts.productId', '=', 'products.id')
                    ->select('carts.*', 'products.*')
                    ->where('carts.userId', Auth::id())
                    ->get();
        $miniCartTotal = $miniCart->sum('sub_total');

        $miniCartQty= $miniCart->sum('quantity'); 

        return response()->json(array(
            'miniCart' => $miniCart,
            'miniCartQty' => $miniCartQty,
            'miniCartTotal' => round($miniCartTotal),

        ));
    }

    public function CartPageIncrement($id){

        $product = DB::table('carts')->where('productId', $id)
                                     ->where('userId', Auth::id() )
                                     ->first();


        $data = array();
        $data['quantity'] = $product->quantity + 1 ;
        $data['sub_total'] = $data['quantity'] * $product->unit_price ;


        DB::table('carts')->where('productId', $id)
                          ->where('userId', Auth::id() )
                          ->update($data);

        return response()->json('increment');
    }

    public function CartPageDecrement($id){

        $product = DB::table('carts')->where('productId', $id)
                                     ->where('userId', Auth::id() )
                                     ->first();


        $data = array();
        $data['quantity'] = $product->quantity - 1 ;
        $data['sub_total'] = $data['quantity'] * $product->unit_price ;


        DB::table('carts')->where('productId', $id)
                          ->where('userId', Auth::id() )
                          ->update($data);

        return response()->json('decrement');
    }
    
     public function CartPageProductDelete($id){
        $product = DB::table('carts')->where('productId', $id)
                                     ->where('userId', Auth::id() )
                                     ->delete();

        return response()->json(['success' => 'Product Deleted Successfully']);                                     

    }

}
