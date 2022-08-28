@extends('layouts.customer')
@section('content')
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<style>
    /**
 * The CSS shown here will not be introduced in the Quickstart guide, but shows
 * how you can use CSS to style your Element's container.
 */
.StripeElement {
        width: -webkit-fill-available;
  box-sizing: border-box;
  height: 40px;
  padding: 10px 12px;
  border: 1px solid transparent;
  border-radius: 4px;
  background-color: white;
  box-shadow: 0 1px 3px 0 #e6ebf1;
  -webkit-transition: box-shadow 150ms ease;
  transition: box-shadow 150ms ease;
}
.StripeElement--focus {
  box-shadow: 0 1px 3px 0 #cfd7df;
}
.StripeElement--invalid {
  border-color: #fa755a;
}
.StripeElement--webkit-autofill {
  background-color: #fefde5 !important;}

  
</style>

<style>

nav > .nav.nav-tabs{

border: none;
  color:#fff;
  background:#272e38;
  border-radius:0;

}
nav > div a.nav-item.nav-link,
nav > div a.nav-item.nav-link.active
{
border: none;
  padding: 18px 25px;
  color:#fff;
  background:#F0F0F0;
  border-radius:0;
}

nav > div a.nav-item.nav-link.active:after
{
content: "";
position: relative;
bottom: -60px;
left: -10%;
border: 15px solid transparent;
border-top-color: #418415;
}
.tab-content{
background: #fdfdfd;
  line-height: 25px;
  border: 1px solid #ddd;
  border-top:5px solid #418415;
  border-bottom:5px solid #418415;
  padding:30px 25px;
}

nav > div a.nav-item.nav-link:hover,
nav > div a.nav-item.nav-link:focus
{
border: none;
  background: #418415;
  color:#fff;
  border-radius:0;
  transition:background 0.20s linear;
}
nav > div a.nav-item.nav-link{
    color: #418415;
}
nav > div a.nav-item.nav-link.active{
    background: #418415;
}


    </style>
<?php $subTotal = 0; ?>
<!-- Begin Li's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="{{ url ('/')}}">Home</a></li>
                <li class="active">Checkout</li>
            </ul>
        </div>
    </div>
</div>


<div class="container">
              <div class="row">
                <div class="col-xs-12 col-md-12 ">
                  <!-- <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                      <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Address</a>
                      <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Delivery</a>
                      <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Payment</a>
                      <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">Complete</a>
                    </div>
                  </nav> -->
                  <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="checkout-area pt-60 pb-30">
            <div class="container" style="padding-left: 10%;padding-right: 10%; margin-top: -48px;">
            <div class="row">
            <div class="col-12">
                <div class="coupon-accordion">
                    <!--Accordion Start-->
                    <!-- <h3>Returning customer? <span id="showlogin">Click here to login</span></h3>
                    <div id="checkout-login" class="coupon-content">
                        <div class="coupon-info">
                            <p class="coupon-text">Quisque gravida turpis sit amet nulla posuere lacinia. Cras sed est sit amet ipsum luctus.</p>
                            <form action="#">
                                <p class="form-row-first">
                                    <label>Username or email <span class="required">*</span></label>
                                    <input type="text">
                                </p>
                                <p class="form-row-last">
                                    <label>Password  <span class="required">*</span></label>
                                    <input type="text">
                                </p>
                                <p class="form-row">
                                    <input value="Login" type="submit">
                                    <label>
                                        <input type="checkbox">
                                         Remember me 
                                    </label>
                                </p>
                                <p class="lost-password"><a href="#">Lost your password?</a></p>
                            </form>
                        </div>
                    </div> -->
                    <!--Accordion End-->
                    <!--Accordion Start-->
                    <!-- <h3>Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3>
                    <div id="checkout_coupon" class="coupon-checkout-content">
                        <div class="coupon-info">
                            <form action="#">
                                <p class="checkout-coupon">
                                    <input placeholder="Coupon code" type="text">
                                    <input value="Apply Coupon" type="submit">
                                </p>
                            </form>
                        </div>
                    </div> -->
                    <!--Accordion End-->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-12" style="background-color:#EEEEEE">

                




                <form action="{{ route ( 'checkout.payment' ) }}" method="post" id="payment-form">
                @csrf
                    <div class="checkbox-form"style="padding-left:10%;padding-right: 10%;">
                    <br>
                        <h3 class="text-center">Billing Details</h3>
                        <div class="row"style="padding-bottom:0px">
                            <div class="col-md-12">
                                <div class="country-select clearfix">
                                    <label>Country <span class="required">*</span></label>
                                    <select class="nice-select wide" name="countryName">
                                      <option value="United States" data-display="United States">United States</option>
                                      <!-- <option value="uk">London</option>
                                      <option value="rou">Romania</option>
                                      <option value="fr">French</option>
                                      <option value="de">Germany</option>
                                      <option value="aus">Australia</option -->>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>First Name <span class="required">*</span></label>
                                    <input placeholder="" type="text" id="firstName" name="firstName" value="" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Last Name <span class="required">*</span></label>
                                    <input placeholder="" type="text" id="lastName" name="lastName" value="" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Company Name</label>
                                    <input placeholder="" type="text" id="companyName" value="" name="companyName">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Address <span class="required">*</span></label>
                                    <input placeholder="Street address" type="text" id="address" value="" name="address" required>
                                </div>
                            </div>
                            <!-- <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <input placeholder="Apartment, suite, unit etc. (optional)" type="text">
                                </div>
                            </div> -->
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Town / City <span class="required">*</span></label>
                                    <input type="text" id="city" value="" name="city" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>State / County <span class="required">*</span></label>
                                    <input placeholder="" value="" type="text" id="State" name="State" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Postcode / Zip <span class="required">*</span></label>
                                    <input placeholder="" value="" type="text" id="zipcode" name="zipcode" required>
                                </div>
                            </div>
                            <!-- <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Email Address <span class="required">*</span></label>
                                    <input placeholder="" type="email">
                                </div>
                            </div> -->
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Phone  <span class="required">*</span></label>
                                    <input type="text" value="" placeholder=""  id="phoneNumber" name="phoneNumber" required>
                                </div>
                            </div>
                            <!-- <div class="col-md-12">
                                <div class="checkout-form-list create-acc">
                                    <input id="cbox" type="checkbox">
                                    <label>Create an account?</label>
                                </div>
                                <div id="cbox-info" class="checkout-form-list create-account">
                                    <p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                                    <label>Account password  <span class="required">*</span></label>
                                    <input placeholder="password" type="password">
                                </div>
                            </div> -->
                        </div>
                        <div class="different-address">
                            <div class="ship-different-title">
                                <h3>
                                    <label>COMMERCIAL USER?</label>
                                    <input id="ship-box" type="checkbox">
                                </h3>
                            </div>
                            <div id="ship-box-info" class="row">
                                <div class="col-md-12">
                                    <div class="country-select clearfix">
                                        <label>Role <span class="required">*</span></label>
                                        <select class="nice-select wide" name="role">   
                                          <option value=""></option>      
                                          <option value="Consumer">Consumer</option>
                                          <option value="Architect">Architect</option>
                                          <option value="Builder/Contractor">Builder/Contractor</option>
                                          <option value="Interior-Designer">Interior Designer</option>
                                          <option value="Property-Owner/Developer">Property Owner/ Developer</option>
                                          <option value="Reseller/Dealer">Reseller/ Dealer</option>
                                          <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="country-select clearfix">
                                        <label>Industry <span class="required">*</span></label>
                                        <select class="nice-select wide" name="industry">   
                                          <option value=""></option>      
                                          <option value="bigbossretailer">Big Boss Retailer</option>
                                          <option value="hospitality">Hospitality</option>
                                          <option value="multi-family">Multi-Family</option>
                                          <option value="onlineretaile">Online Retailer</option>
                                          <option value="originalbrickandmortar">Original/Brick and Mortar</option>
                                          <option value="retailshowroom">Retail/Showroom</option>
                                          <option value="singlefamilyresidential">Single Family Residential</option>
                                          <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="country-select clearfix">
                                        <label>Sub Industry <span class="required">*</span></label>
                                        <select class="nice-select wide" name="subIndustry">   
                                          <option value=""></option>      
                                          <option value="bigbossretailer">Food and Beverage</option>
                                          <option value="lodging">Lodging</option>
                                          <option value="multi-family">Public Institutions</option>
                                          <option value="onlineretaile">Recreation</option>
                                          <option value="originalbrickandmortar">Travel and Tourism</option>
                                          <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Employer/ Federal Tax ID <span class="required">*</span></label>
                                        <input placeholder="" type="text" name="federal_tax_id">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Contractor's License # <span class="required">*</span></label>
                                        <input placeholder="" type="text" name="contractor_license_no">
                                    </div>
                                </div>
                               
                                <div class="order-notes">
                                    <div class="checkout-form-list">
                                        <label>If you don't have a license #, Please explain why?</label>
                                        <textarea id="checkout-mess" name="no_license_reason" cols="30" rows="10" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="clearfix">
<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
    <a onclick="halfForm()" class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="button" aria-controls="nav-profile" aria-selected="false" class=" float-center" style="background-color:#418415; color:white;margin-bottom:20px;width:23%; margin-left: 13px;margin-right:2px; height: 40px; border:0px;">Next Page >></a>
</div>


    <!-- <button   type="" class=" float-center" style="background-color:#418415; color:white;margin-bottom:20px;width:23%; margin-left: 183px; height: 40px; border:0px;">Next Page >></button> -->

   
</div>
                    </div>
            </div>

            
            
        </div>
    </div>
</div>
                    </div>
<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" >
                   
                    <div class="checkout-area pt-60 pb-30">
            <div class="container col-md-8" >
            <div class="row">
            <div class="col-sm-12">
            <h2>Shipping Method</h2>
                <div class="ship-different-title">
                    <h3>
                        
                        <input id="ship-box" type="checkbox">
                        <label style="font-size:20px;">I want to ship directly to my house via curbside delivery.</label>
                    </h3>
                </div>
                <div class="coupon-accordion">
                    <!--Accordion Start-->
                    <!-- <h3>Returning customer? <span id="showlogin">Click here to login</span></h3>
                    <div id="checkout-login" class="coupon-content">
                        <div class="coupon-info">
                            <p class="coupon-text">Quisque gravida turpis sit amet nulla posuere lacinia. Cras sed est sit amet ipsum luctus.</p>
                            <form action="#">
                                <p class="form-row-first">
                                    <label>Username or email <span class="required">*</span></label>
                                    <input type="text">
                                </p>
                                <p class="form-row-last">
                                    <label>Password  <span class="required">*</span></label>
                                    <input type="text">
                                </p>
                                <p class="form-row">
                                    <input value="Login" type="submit">
                                    <label>
                                        <input type="checkbox">
                                         Remember me 
                                    </label>
                                </p>
                                <p class="lost-password"><a href="#">Lost your password?</a></p>
                            </form>
                        </div>
                    </div> -->
                    <!--Accordion End-->
                    <!--Accordion Start-->
<!--                     
                    <h3>Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3>
                    <div id="checkout_coupon" class="coupon-checkout-content">
                        <div class="coupon-info">
                            <form action="#">
                                <p class="checkout-coupon">
                                    <input placeholder="Coupon code" type="text">
                                    <input value="Apply Coupon" type="submit">
                                </p>
                            </form>
                        </div>
                    </div> -->
                    <!--Accordion End-->
                </div>
            </div>
        </div>
        <h3>Enter your shipping address below.</h3>
        <div class="row">
            <div class="col-lg-12 col-12" style="background-color:#EEEEEE">

                




               
                    <div class="checkbox-form"style="padding-left:10%;padding-right: 10%;">
                    <br>
                        
                        <div class="row"style="padding-bottom:0px">
                            
                        <div class="different-address">
                            <div class="ship-different-title">
                                <h3>
                                <input id="shippingformbtn" type="checkbox" onclick="if(this.checked){shippingFormBtn();} else {shippingformbtnclose();}">

                                <!-- <input id="shippingformbtn" type="checkbox" onclick=" shippingFormBtn();"> -->
                                    <label style="font-size:20px;">My Bill To and Ship To are not same</label>
                                    
                                </h3>
                            </div>
                            <div id="shippingform" class="row">

                                <h3 class="text-center">Shipping Details</h3>
                        <div class="row"style="padding-bottom:0px">
                            <div class="col-md-12">
                                <div class="country-select clearfix">
                                    <label>Country <span class="required">*</span></label>
                                    <select class="nice-select wide" name="countryName">
                                      <option value="United States" data-display="United States">United States</option>
                                      <!-- <option value="uk">London</option>
                                      <option value="rou">Romania</option>
                                      <option value="fr">French</option>
                                      <option value="de">Germany</option>
                                      <option value="aus">Australia</option -->>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>First Name <span class="required">*</span></label>
                                    <input placeholder="" type="text" id="shippingfirstName" name="shippingfirstName" value="" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Last Name <span class="required">*</span></label>
                                    <input placeholder="" type="text" id="shippinglastName" name="shippinglastName" value="" >
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Company Name</label>
                                    <input placeholder="" type="text" id="shippingcompanyName" value="" name="shippingcompanyName">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Address <span class="required">*</span></label>
                                    <input placeholder="Street address" type="text" id="shippingaddress" value="" name="shippingaddress" >
                                </div>
                            </div>
                            <!-- <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <input placeholder="Apartment, suite, unit etc. (optional)" type="text">
                                </div>
                            </div> -->
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Town / City <span class="required">*</span></label>
                                    <input type="text" id="shippingcity" value="" name="shippingcity" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>State / County <span class="required">*</span></label>
                                    <input placeholder="" value="" type="text" id="shippingState" name="shippingState" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Postcode / Zip <span class="required">*</span></label>
                                    <input placeholder="" value="" type="text" id="shippingzipcode" name="shippingzipcode" >
                                </div>
                            </div>
                            <!-- <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Email Address <span class="required">*</span></label>
                                    <input placeholder="" type="email">
                                </div>
                            </div> -->
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Phone  <span class="required">*</span></label>
                                    <input type="text" value="" placeholder=""  id="shippingphoneNumber" name="shippingphoneNumber" >
                                </div>
                            </div>
                            <!-- <div class="col-md-12">
                                <div class="checkout-form-list create-acc">
                                    <input id="cbox" type="checkbox">
                                    <label>Create an account?</label>
                                </div>
                                <div id="cbox-info" class="checkout-form-list create-account">
                                    <p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                                    <label>Account password  <span class="required">*</span></label>
                                    <input placeholder="password" type="password">
                                </div>
                            </div> -->
                        </div>




                                <!-- <div class="col-md-12">
                                    <div class="country-select clearfix">
                                        <label>Role <span class="required">*</span></label>
                                        <select class="nice-select wide" name="role">   
                                          <option value=""></option>      
                                          <option value="Consumer">Consumer</option>
                                          <option value="Architect">Architect</option>
                                          <option value="Builder/Contractor">Builder/Contractor</option>
                                          <option value="Interior-Designer">Interior Designer</option>
                                          <option value="Property-Owner/Developer">Property Owner/ Developer</option>
                                          <option value="Reseller/Dealer">Reseller/ Dealer</option>
                                          <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="country-select clearfix">
                                        <label>Industry <span class="required">*</span></label>
                                        <select class="nice-select wide" name="industry">   
                                          <option value=""></option>      
                                          <option value="bigbossretailer">Big Boss Retailer</option>
                                          <option value="hospitality">Hospitality</option>
                                          <option value="multi-family">Multi-Family</option>
                                          <option value="onlineretaile">Online Retailer</option>
                                          <option value="originalbrickandmortar">Original/Brick and Mortar</option>
                                          <option value="retailshowroom">Retail/Showroom</option>
                                          <option value="singlefamilyresidential">Single Family Residential</option>
                                          <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="country-select clearfix">
                                        <label>Sub Industry <span class="required">*</span></label>
                                        <select class="nice-select wide" name="subIndustry">   
                                          <option value=""></option>      
                                          <option value="bigbossretailer">Food and Beverage</option>
                                          <option value="lodging">Lodging</option>
                                          <option value="multi-family">Public Institutions</option>
                                          <option value="onlineretaile">Recreation</option>
                                          <option value="originalbrickandmortar">Travel and Tourism</option>
                                          <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Employer/ Federal Tax ID <span class="required">*</span></label>
                                        <input placeholder="" type="text" name="federal_tax_id">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Contractor's License # <span class="required">*</span></label>
                                        <input placeholder="" type="text" name="contractor_license_no">
                                    </div>
                                </div>
                               
                                <div class="order-notes">
                                    <div class="checkout-form-list">
                                        <label>If you don't have a license #, Please explain why?</label>
                                        <textarea id="checkout-mess" name="no_license_reason" cols="30" rows="10" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="clearfix">
    
    

   
</div>

<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
   
    

    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false" style="background-color:#418415; color:white;margin-bottom:20px;width:23%; margin-left: 183px; height: 40px; border:0px;" onclick="halfFormShipping()">Next Page</a>
    

</div>



<!-- <button type="button" class=" float-center" style="background-color:#418415; color:white;margin-bottom:20px;width:23%; margin-left: 183px; height: 40px; border:0px;">Next Page >></button> -->

                    </div>
            </div>

            
          
        </div>
    </div>
</div>
                    </div>
                    </div>
<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <div class="col-lg-12 col-12">
                        <center>
                <div class="your-order col-md-7 col-sm-12">
                    <h3>Your order</h3>
                    <div class="your-order-table table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="cart-product-name" style="font-size:20px"><b>Products</b></th>
                                    <th class="cart-product-total"style="font-size:20px"><b>Total</b></th>
                                </tr>
                            </thead>
                            <tbody> 
                                @foreach($cartProduct as $item)

                                <tr class="cart_item">
                                    <td class="cart-product-name"> {{ $item->name }}<strong class="product-quantity"> × {{ $item->quantity }}</strong></td>
                                    
                                    <td class="cart-product-total"><span class="amount">${{ $item->sub_total }}</span></td>  
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr class="cart-subtotal">
                                    <th>Cart Subtotal</th>

                                    <!-- <input type="hidden" placeholder="" value="${{ $subTotal }}" name="cart_subtotal" required> --> 

                                    <td><span class="amount">${{ $cartGrandTotal }}</span></td>
                                </tr>
                                <tr class="order-total">
                                    <th>Order Total</th>

                                    <input type="hidden" placeholder="" value="{{ $cartGrandTotal }}" name="order_total" required> 

                                    <td><strong><span class="amount">${{ $cartGrandTotal }}</span></strong></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="payment-method">
                        <div class="payment-accordion">
                            <!-- <div id="accordion">
                                <div class="card">
                                    <div class="card-header" id="#payment-1">
                                      <h5 class="panel-title">
                                        <a class="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                          PAYMENT
                                        </a>
                                      </h5>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                      <div class="card-body">
                                        <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                        
                                            
                                            
                                      </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="#payment-2">
                                      <h5 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                          Cheque Payment
                                        </a>
                                      </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                      <div class="card-body">
                                        <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                      </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="#payment-3">
                                      <h5 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                          PayPal
                                        </a>
                                      </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                                      <div class="card-body">
                                        <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                      </div>
                                    </div>
                                </div>
                            </div> --> 
                            <!-- <div class="order-button-payment">
                                <input value="Place order" type="submit" name="submit">
                            </div> -->
                            <div class="form-row">
                    <label for="card-element">
                      Credit or debit card
                    </label>
                    <div id="card-element">
                      <!-- A Stripe Element will be inserted here. -->
                    </div>

                    <!-- Used to display Element errors. -->
                    <div id="card-errors" role="alert"></div>
                    </div><br>

                   

                 <center> <button style="background-color: #418415;border: 0px;height: 39px; width: 148px;">Submit Payment</button></center>
                        </div>
                       
                        
  </div>
  
  
                </div></center>
                </form> 
            </div>
                    </div>
<div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab"style="padding-left: 265px;padding-right: 488px;padding-top: 25px;">
                     <h1>Thanks For Shopping</h1>
                    </div>
                  </div>
                
                </div>
              </div>
        </div>
      </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!--Checkout Area Strat--> 

<!--Checkout Area End-->
<!-- Begin Footer Area -->

<script type="text/javascript">
    $(document).ready(function() {
        $("#shippingform").css("display", "none");
// function shippingformbtn(){
//         alert('shippinf')
//             var checked = $("#shippingformbtn").checked;

//         if (checked == true) { $("#shippingform").css("display", "block"); }
//         else{ $("#shippingform").css("display", "none"); }
//     }
   });

    
    
    // Create a Stripe client.
    var stripe = Stripe('pk_test_51IemLPDq3PO52CbnWO8fLbGFmGGnTQuAdZKSqSqhW4JA4gJZIpuwdILI5hwS3qynEEIRsFky7TkvZuTFGUwMouwC00YObDyJ1H');
    // Create an instance of Elements.
    var elements = stripe.elements();
    // Custom styling can be passed to options when creating an Element.
    // (Note that this demo uses a wider set of styles than the guide below.)
    var style = {
      base: {
        color: '#32325d',
        fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
        fontSmoothing: 'antialiased',
        fontSize: '16px',
        '::placeholder': {
          color: '#aab7c4'
        }
      },
      invalid: {
        color: '#fa755a',
        iconColor: '#fa755a'
      }
    };
// Create an instance of the card Element.
    var card = elements.create('card', {style: style});
    // Add an instance of the card Element into the `card-element` <div>.
    card.mount('#card-element');
    // Handle real-time validation errors from the card Element.
    card.on('change', function(event) {
      var displayError = document.getElementById('card-errors');
      if (event.error) {
        displayError.textContent = event.error.message;
      } else {
        displayError.textContent = '';
      }
    });
// Handle form submission.
    var form = document.getElementById('payment-form');
    form.addEventListener('submit', function(event) {
      event.preventDefault();
      stripe.createToken(card).then(function(result) {
        if (result.error) {
          // Inform the user if there was an error.
          var errorElement = document.getElementById('card-errors');
          errorElement.textContent = result.error.message;
        } else {
          // Send the token to your server.
          stripeTokenHandler(result.token);
        }
      });
    });
// Submit the form with the token ID.
    function stripeTokenHandler(token) {
      // Insert the token ID into the form so it gets submitted to the server
      var form = document.getElementById('payment-form');
      var hiddenInput = document.createElement('input');
      hiddenInput.setAttribute('type', 'hidden');
      hiddenInput.setAttribute('name', 'stripeToken');
      hiddenInput.setAttribute('value', token.id);
      form.appendChild(hiddenInput);
      // Submit the form
      form.submit();
    }

    function halfForm(){
        // alert("jsdhsdbvhcsj")
        var firstName = $('#firstName').val();
        var lastName = $('#lastName').val();
        var companyName = $('#companyName').val();
        var address = $('#address').val();
        var city = $('#city').val();
        var State = $('#State').val();
        var zipcode = $('#zipcode').val();
        var phoneNumber = $('#phoneNumber').val();
        // var firstName = $('#firstName').val();

        if (firstName.trim().length == 0 || lastName.trim().length == 0  || address.trim().length == 0 || city.trim().length == 0  || zipcode.trim().length == 0  || phoneNumber.trim().length == 0) {

            // alert("trim k");
            return location.reload();
        }
    }

    // function halfFormShipping(){
    //     alert("jsdhsdbvhcsj")
    //     var firstName = $('#shippingfirstName').val();
    //     var lastName = $('#shippinglastName').val();
    //     var companyName = $('#shippingcompanyName').val();
    //     var address = $('#address').val();
    //     var city = $('#shippingcity').val();
    //     var State = $('#shippingState').val();
    //     var zipcode = $('#shippingzipcode').val();
    //     var phoneNumber = $('#shippingphoneNumber').val();
    //     // var firstName = $('#firstName').val();

    //     if (firstName.trim().length == 0 || lastName.trim().length == 0  || address.trim().length == 0 || city.trim().length == 0  || zipcode.trim().length == 0  || phoneNumber.trim().length == 0) {

    //         // alert("trim k");
    //         return location.reload();
    //     }
    // }

    
    function shippingFormBtn(){
        // alert('shippinf')
        // $("#shippingform").css("display", "none");
        //     var checked = document.getElementById("#shippingformbtn").checked;
        // alert(checked)

        // if (checked == true) { 
            $("#shippingform").css("display", "block");
        //      }
        // else{ $("#shippingform").css("display", "none"); }

    }
    
    function shippingformbtnclose(){
        $("#shippingform").css("display", "none");

    }

   
</script>
@endsection