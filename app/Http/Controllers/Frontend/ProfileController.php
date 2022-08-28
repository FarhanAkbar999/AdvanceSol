<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Auth;
use DB;

class ProfileController extends Controller
{
    public function profileAccountDetails(){

        return view('customer.profile.accountDetails');
    }

    public function profileBillingDetails(){

        $orders = DB::table('orders')->where('user_id', Auth::id() )->get();

        return view('customer.profile.billingDetails', compact('orders') );        
    }

    public function profileChangePassword(){

        return view('customer.profile.changePassword');
    }

    public function profileBillingDetailsShow($id){

        $orderItems = DB::table('order_items')
                    ->join('products', 'order_items.product_id', 'products.id')
                    ->select('order_items.*', 'products.*')
                    ->where('order_id', $id)
                    ->get();

        $orders = DB::table('orders')->where('id', $id )->first();

        return view('customer.profile.billingDetailsShow', compact('orderItems', 'orders') );

    } 

    public function profileChangePasswordPost(Request $request){

        $validateData = $request->validate([
            'currentPassword' => 'required',
            'newPassword' => 'required',
            'confirmPassword' => 'required|same:newPassword',

        ]);

        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->currentPassword,$hashedPassword )) {

            $users = User::find(Auth::id());
            $users->password = Hash::make($request->newPassword);
            $users->save();

            $notification = array(
                'message' => 'Password Updated Successfully', 
                'alert-type' => 'success'
            );  

            // session()->flash('message','Password Updated Successfully');
            // return redirect()->back()->with($notification);
        } else{

            $notification = array(
                'message' => 'Old password is not match', 
                'alert-type' => 'danger'
            ); 
            // session()->flash('message','Old password is not match');
            // return redirect()->back();
        }



        return redirect()->back()->with($notification);

    }
}
