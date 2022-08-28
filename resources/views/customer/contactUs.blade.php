@extends('layouts.customer')
@section('content') 
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active">Contact</li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->     
<!-- Begin Contact Main Page Area -->
<div class="contact-main-page mt-60 mb-40 mb-md-40 mb-sm-40 mb-xs-40">
    <!-- <div class="container mb-60">
        <div id="google-map"></div>
    </div> -->
    <div class="container">
        <div class="row">
            <div class="col-lg-5 offset-lg-1 col-md-12 order-1 order-lg-2">
                <div class="contact-page-side-content">
                    <h3 class="contact-page-title">Contact Us</h3>
                    <p class="contact-page-message mb-25">Looking for high-quality kitchen cabinets or bathroom vanities? Cabinets Pro LLC has you covered, with a wide range of products to choose from. We only use the best materials, so you can be sure your new cabinets will last for years to come. Plus, our team is always on hand to help you with any questions or concerns you may have. So why wait? Give us a try today!</p>
                    <div class="single-contact-block">
                        <h4><i class="fa fa-fax"></i> Address</h4>
                        <p>5805 Pinemont Drive, Suite B, Houston, TX-77092</p>
                    </div>
                    <div class="single-contact-block">
                        <h4><i class="fa fa-phone"></i> Phone</h4>
                        <p>Mobile: 1-877-327-2776</p>
                        
                    </div>
                    <div class="single-contact-block last-child">
                        <h4><i class="fa fa-envelope-o"></i> Email</h4>
                        
                        <p>support@CabinetsPro.LLC.com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 order-2 order-lg-1">
                <div class="contact-form-content pt-sm-55 pt-xs-55">
                    <h3 class="contact-page-title">Tell Us Your Message</h3>
                    <div class="contact-form"> 
                        <form  id="contact-form" action="{{ route('contactUsPost') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Your Name <span class="required">*</span></label>
                                <input type="text" name="name" id="name" required>
                            </div>
                            <div class="form-group">
                                <label>Your Email <span class="required">*</span></label>
                                <input type="email" name="email" id="email" required>
                            </div>
                             <div class="form-group">
                                <label>Zip Code <span class="required">*</span></label>
                                <input type="text" name="zipcode" id="zipcode" required>
                            </div>
                            <div class="form-group">
                                <label>Subject</label>
                                <input type="text" name="subject" id="subject">
                            </div>
                             
                            <div class="form-group mb-30">
                                <label>Your Message<span class="required">*</span></label>
                                <textarea name="message" id="message" required></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" value="submit" id="submit" class="li-btn-3" name="submit">send</button>
                            </div>
                        </form>
                    </div>
                    <!-- <p class="form-messege"></p> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection