@extends('layouts.customer')

@section('content')
<style>
    .newdt td a{
        color: #626262;
    }
    .text{
        font-size: 25px;
    font-weight: 700;
    margin-bottom: 20px;
    text-transform: capitalize;
    }
    .continueshopping{

        background-color: #333;
    border: 1px solid #333;
    color: #fff;
    display: inline-block;
    margin-top: 30px;
    padding: 9px 18px;
    margin-left: 207px;
    margin-top: 2px;
    margin-bottom: -10px;
    text-transform: capitalize;
    -webkit-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
}
#tbodyCart tr td {
    border: none;
}


    
</style>
<?php 
$subTotal = 0; 
if ($cartProduct->count() != 0) {
    // code...

?>
<br>
<div class="container">
    <h2 class=text>Shopping Cart</h2>
    <b>Congratulations</b> on making a great decision and saving a lot of money at the My Cabinets Pro LLC.
     If you have any questions or need help checking out, please do not hesitate to contact one of our 
     friendly customer service specialists by calling 1-877-327-2776 .
</div>
<!-- new updated frontend cart start-->


                        
                    
<div class="Shopping-cart-area pt-60 pb-60">
<div class="col-md-5 ml-auto">
                            <div class="cart-page-total">
                               
                                <a href="{{ route('checkout')}}" style="margin-left: 207px; margin-top: 2px; margin-bottom: -10px;background-color:#0B57A5; color:white">Proceed to checkout</a>
                            </div>
                        </div>
                        <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="#">
                    <div class="table-content table-responsive newdt">
                        <table class="table">
                            <thead>
                                <tr>
                                <th class="cart-product-name"style="width:400px">Product</th>
                                <th class="li-product-price"style="width:30px">Unit Price</th>
                                <th class="li-product-quantity"style="width:15px">Quantity</th>
                                   
                                    <th class="li-product-thumbnail"style="width:40px"></th>
                                    <th class="li-product-subtotal"style="width:30px">SubTotal</th>
                                    <th class="li-product-remove"style="width:10px">remove</th>
                                    
                                    
                                   
                                </tr>
                            </thead>
                            <tbody id="tbodyCart">

                            <thead>
                                <tr>
                                <th class="cart-product-name"style="width:400px">Product</th>
                                <th class="li-product-price"style="width:30px">Total Qty:</th>
                                <th class="li-product-quantity"style="width:15px"><span id="QtyTotalCartPage"></span></th>
                                   
                                    <th class="li-product-thumbnail"style="width:40px; font-size:20px; " >SubTotal</th>
                                    <th class="li-product-subtotal"style="width:30px; font-size:20px;">$<span id="grandTotalCartPage"></span></th>
                                    <th class="li-product-remove"style="width:10px"></th>
                                    
                                    
                                   
                                </tr>
                            </thead>
                        
                                

                            </tbody>
                           
                        </table>
                        
                    </div><br>
                    
                    <!-- <div class="col-md-5 ml-auto">
                            <div class="cart-page-total">
                               
                                <a href="{{ route('checkout')}}" style="margin-left: 207px; margin-top: 2px; margin-bottom: -10px;background-color:#0B57A5;">Proceed to checkout</a>
                            </div>
                        </div> -->
                        <div class=" clearfix">
                            <a href="{{ route('home') }}" class=" float-left" style="background-color:#222222; color:white; padding: 7px;">Continue Shopping</a>
       
    <!-- <button type="button" class=" float-left" style="background-color:#222222; color:white; width:17%; margin-left: 20px; height: 40px;" >Continue Shopping</button> -->
    <button type="button" class=" float-right" style="background-color:white; color:#222222;border:0px; width:30%; margin-left: 20px; height: 40px;" id="" onclick="CartPageFullDelete()" ><i class="fa fa-trash-o"></i> Clear Cart</button>
    
</div>
<br>
                        
                    
                    <center>
                        <div class="col-md-12 ml-auto" style="background-color:#F6F6F6; margin-left:40%; margin-right:40%; " >
                           
                            <div class="cart-page-total col-sm-12 col-md-5 ml-md-5"style=" display:inline-block ">
                               
                            
                            <div class="bg-light clearfix col-md-12">
                            <span style="font-size:18px; font-weight:900;">Estimate Shipping Cost</span>   
    
    <input type="text"style="width:80px; height:40px; margin-right:2px; border: 1px solid;background-color: white;" class="" placeholder="00001">

    <button type="button" style="background-color: black; height: 40px;" class="float-right">Calculate</button>
</div>
                            
                                <ul>
                                    <li style="font-size:20px;">Retail Price <span> $ </span><span id="grandTotalCartPage"></span></li>
                                    <li style="font-size:20px; color:#0B57A5">Today's Savings: <span >0</span></li>
                                    <hr style="height:2px;border-width:0;color:gray;background-color:gray; margin-left:28px; margin-right:28px;">

                                    <li style="font-size:25px;">Grand Total <span> $ </span><span id="grandTotalCartPage"></span></li>
                                    
                                </ul>
                                <a href="{{ route('checkout')}}" style="background-color:#0B57A5; color:white;margin-top: -6px;margin-left: 30px;padding: -4px 85px;">Proceed to checkout</a>
                            </div>
                        </div>  </center>
                   
                  
                    
                </form>
            </div>
        </div>
    </div>
</div>

<?php 
} else{ 
?>

<div class="text-center" style="height:300px; width:100%"> CART IS EMPTY</div>






<?php 
}
?>


@endsection