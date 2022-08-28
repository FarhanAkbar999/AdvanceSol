@extends('layouts.customer')

@section('content')  

<style>
    .paragraph{
        font-weight: 600px;
    font-size: 17px;
    line-height: 30px;
    color:black;

    }
    .para{

font-size: 14px;
    font-weight: 600px;
    font-size: 17px;
    line-height: 30px;
    color: black;
    margin-bottom: 15px;
    display: block;
    text-align: center;
}
    </style>
        <!-- Begin Slider With Banner Area -->
        <div class="slider-with-banner">
            <div class="container-fluid">
                <div class="row">
                    <!-- Begin Slider Area -->
                    <div class="col-lg-12 col-md-12">
                        <div class="slider-area">
                            <div class="slider-active owl-carousel">
                                <!-- Begin Single Slide Area -->
                                <div class="single-slide align-center-left  animation-style-01">
                                    <img src="{{ asset('updatedFrontend/kitchen/aaron-huber-G7sE2S4Lab4-unsplash.jpg')}}" style="height: 500px;">
                                    <div class="slider-progress"></div>
                                    <div class="slider-content">
                                    <h2><b>you Provide the Space </b> </h2>
                                    <h2 style="color:white"><b>We'll Provide the Cabinets </b> </h2>
                                        <!-- <h5> <span>-20% Off</span> This Week</h5>
                                        
                                        <h3>Starting at <span>$1209.00</span></h3>
                                        <div class="default-btn slide-btn">
                                            <a class="links" href="shop-left-sidebar.html">Shopping Now</a>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="single-slide align-center-left animation-style-02">
                                    <img src="{{ asset('updatedFrontend/kitchen/zac-gudakov-bJOluIUkFzQ-unsplash.jpg')}}" style="height: 500px;">
                                    <div class="slider-progress"></div>
                                    <div class="slider-content">
                                    <h2><b>Discover Your </b> </h2>
                                    <h2 style="color:white"><b>Dream Kitchen </b> </h2>
                                        <!-- <h5>Sale Offer <span>Black Friday</span> This Week</h5>
                                        <h2>Work Desk Surface Studio 2018</h2>
                                        <h3>Starting at <span>$824.00</span></h3>
                                        <div class="default-btn slide-btn">
                                            <a class="links" href="shop-left-sidebar.html">Shopping Now</a>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="single-slide align-center-left animation-style-01">
                                    <img src="{{ asset('updatedFrontend/kitchen/andrea-davis-Wj6oZNCAzs4-unsplash.jpg')}}" style="height: 500px;">
                                    <div class="slider-progress"></div>
                                    <div class="slider-content">
                                        <!-- <h5>Sale Offer <span>-10% Off</span> This Week</h5>
                                        <h2>Phantom 4 Pro+ Obsidian</h2>
                                        <h3>Starting at <span>$1849.00</span></h3>
                                        <div class="default-btn slide-btn">
                                            <a class="links" href="shop-left-sidebar.html">Shopping Now</a>
                                        </div> -->
                                        <h2><b>We Provide Thoughtful Products and Exceptional Service</b> </h2>
                                    <h2 style="color:white"><b>To Inspire Spaces Where People Love To Live. </b> </h2>
                                    </div>
                                </div>
                                <!-- Single Slide Area End Here -->
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </div>
        
        <br>
        <div class="container ">
    <p class="text-justify para">If you're looking for top-quality kitchen cabinets or bathroom vanities,
         Cabinets Pro LLC is the place to shop. We carry a wide selection of RTA (ready to assemble)
          and pre-assembled cabinets in a variety of styles and finishes. Whether you're a DIYer or prefer to 
          leave the assembly to the professionals, we have the perfect option for you. Plus, our experienced team
           is always on hand to answer any questions you may have. Shop with us today and see the difference!</p>
</div>
<br>
<br>
        
<div class="about-us-wrapper pt-60 pb-40">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 ">
                        <h3>RTA KITCHEN CABINETS</h3>
                            <div class="row">
                                <!-- About Image Start -->
                                
                                <div class="col-lg-12 col-md-10">
                                    <div class="">
                                    <a href="{{ route('rta-kitchen-cabinets') }}"> <img class="img-full" src="{{ asset ('updatedFrontend/andrea-davis-Wj6oZNCAzs4-unsplash.jpg')}}" alt="About Us" /></a>
                                    </div>
                                </div>
                                <!-- About Image End -->
                                <!-- About Text Start -->
                                <div class="col-lg-12">
                                
                                    <div class="about-text-wrap">
                                    <p class="text-justify paragraph">Looking for an affordable way to upgrade your kitchen or bathroom? Check out our collection of Ready To Assemble (RTA) kitchen cabinets and bathroom vanities! These cabinets are made from high-quality materials and are easy to assemble, so you can get the beautiful look of custom cabinetry without the high price tag. Plus, all of the parts are pre-cut and holes are pre-drilled, so assembly is a breeze. With our wide selection of styles and finishes, you're sure to find the perfect cabinets for your home. Order today and start enjoying your new kitchen or bathroom in no time!</p>
                                        <!-- <p>We provide the best Beard oile all over the world. We are the worldd best store in indi for Beard Oil. You can buy our product without any hegitation because they truste us and buy our product without any hagitation because they belive and always happy buy our product.</p>
                                        <p>Some of our customer say’s that they trust us and buy our product without any hagitation because they belive us and always happy to buy our product.</p>
                                        <p>We provide the beshat they trusted us and buy our product without any hagitation because they belive us and always happy to buy.</p> -->
                                    </div>
                                </div>
                                <!-- About Text End -->
                                
                            </div>
                        </div>    
                        <div class="col-lg-6 ">
                        <h3>BATHROOM VANITIES</h3>
                            <div class="row">
                                <!-- About Image Start -->
                                <div class="col-lg-12 col-md-10">
                                    <div class="">
                                    <a href="{{ route('rta-bathroom-vanities') }}"><img class="img-full" src="{{ asset ('updatedFrontend/bathroom.jpg')}}" alt="About Us" /></a>
                                    </div>
                                </div>
                                <!-- About Image End -->
                                <!-- About Text Start -->
                                <div class="col-lg-12">
                                    <div class="">
                                    <p class="text-justify paragraph" >Browse our expansive collection of Ready To Assemble (RTA) bathroom vanities and get the beautiful look and durability of custom vanities for a fraction of the cost by assembling the vanities in your home. Assembly is a breeze with all parts being pre-cut and holes, pre-drilled. The end result will be a stunning bathroom your family will enjoy for years to come!</p>
                                    </div>
                                </div>
                                <!-- About Text End -->
                                
                            </div>
                        </div>                      
                    </div>

                    <div class="row">
                        <div class="col-lg-6 ">
                        <h3>FAST DELIVERY</h3>
                            <div class="row">
                                <!-- About Image Start -->
                                <div class="col-lg-12 col-md-10">
                                    <div class="">
                                    <a href="{{ route('quick-ship') }}"><img class="img-full" src="{{ asset ('updatedFrontend/Screenshot 2022-06-17 191134.jpg')}}" alt="About Us" /></a>
                                    </div>
                                </div>
                                <!-- About Image End -->
                                <!-- About Text Start -->
                                <div class="col-lg-12 col-md-10">
                                    <div class="">
                                    <p class="text-justify paragraph">100% of the fast delivery cabinets order leaves our warehouse within 3 business days for orders placed prior to 12pm ET. For orders placed after 12pm ET, the following day will be considered the order date. This does not include assembled cabinets, back ordered items marked at the time of ordering, lost or damaged items occurring from shipping, significant weather events, holidays, carrier embargos or other unforeseen issues out of RTA's control. Claims can be submitted</p>
                                    </div>
                                </div>
                                <!-- About Text End -->
                                
                            </div>
                        </div>    
                        <div class="col-lg-6 ">
           <h3>Hoods</h3>

                            <div class="row">
                                <!-- About Image Start -->
                                <div class="col-lg-12 col-md-10">
                                    <div class="">
                                    <a href="{{ route('kitchen-Hoods') }}"><img class="img-full" src="{{ asset ('updatedFrontend/hood.jpg')}}" alt="About Us" /></a>
                                    </div>
                                </div>
                                <!-- About Image End -->
                                <!-- About Text Start -->
                                <div class="col-lg-12">
                                    <div class="">
                                    <p class="text-justify paragraph">Our new wood range hoods are available in four different styles, each with three different trim styles and can be finished in any one of our Highland Series cabinet paint or stain finishes. Wood range hoods are also available unfinished, or raw, to customize to your liking.</p>
                                    </div>
                                </div>
                                <!-- About Text End -->
                                
                            </div>
                        </div>                      
                    </div>
                </div>
            </div>

<div class="footer-static-top">
        <div class="container">
            <!-- Begin Footer Shipping Area -->
            <div class=" pt-60 text-center" style="background-color: black ;">
                <div class="container " style="color: white; font-size: 15px;">
                   <h2> OUR VISION </h2>
                </div>
                <div class="row" >
                <p  style="color: white; font-size: 17px; line-height: 2.6; ">Cabinets Pro LLC strives to be the leading provider of cabinetry solutions to our partners throughout the United States. Through a commitment to outstanding service, uncompromised quality, and an attitude of continuous improvement, we will achieve our vision by: -Excelling in customer satisfaction through the design and installation process -Offering only quality products and services -Providing cost-effective solutions</p>
                </div>
            </div>
            <!-- Footer Shipping Area End Here -->
        </div>



        <div class="li-static-banner">
            <div class="container">
                <div class="row">
                    <!-- Begin Single Banner Area -->
                    <!-- <div class="col-lg-4 col-md-4 text-center">
                        <div class="single-banner">
                            <a href="#">
                                <img src="{{ asset('updatedFrontend/images/banner/1_3.jpg')}} " alt="Li's Static Banner">
                            </a>
                        </div>
                    </div> -->
                    <!-- Single Banner Area End Here -->
                    <!-- Begin Single Banner Area -->
                    <!-- <div class="col-lg-4 col-md-4 text-center pt-xs-30">
                        <div class="single-banner">
                            <a href="#">
                                <img src="{{ asset('updatedFrontend/images/banner/1_4.jpg')}} " alt="Li's Static Banner">
                            </a>
                        </div>
                    </div> -->
                    <!-- Single Banner Area End Here -->
                    <!-- Begin Single Banner Area -->
                    <!-- <div class="col-lg-4 col-md-4 text-center pt-xs-30">
                        <div class="single-banner">
                            <a href="#">
                                <img src="{{ asset('updatedFrontend/images/banner/1_5.jpg')}} " alt="Li's Static Banner">
                            </a>
                        </div>
                    </div> -->
                    <!-- Single Banner Area End Here -->
                </div>
            </div>
        </div>
        <!-- Li's Static Banner Area End Here -->
        <!-- Begin Li's Laptop Product Area -->
        <!-- <section class="product-area li-laptop-product pt-60 pb-45">
            <div class="container">
                <div class="row">
                   
                    <div class="col-lg-12">
                        <div class="li-section-title">
                            <h2>
                                <span>Laptop</span>
                            </h2>
                            <ul class="li-sub-category-list">
                                <li class="active"><a href="shop-left-sidebar.html">Prime Video</a></li>
                                <li><a href="shop-left-sidebar.html">Computers</a></li>
                                <li><a href="shop-left-sidebar.html">Electronics</a></li>
                            </ul>
                        </div>
                        <div class="row">
                            <div class="product-active owl-carousel">
                                <div class="col-lg-12">
                                   
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="single-product.html">
                                                <img src="{{ asset('updatedFrontend/images/product/large-size/1.jpg')}} " alt="Li's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        <a href="shop-left-sidebar.html">Graphic Corner</a>
                                                    </h5>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4><a class="product_name" href="single-product.html">Accusantium dolorem1</a></h4>
                                                <div class="price-box">
                                                    <span class="new-price">$46.80</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                    <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-lg-12">
                                  
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="single-product.html">
                                                <img src="{{ asset('updatedFrontend/images/product/large-size/2.jpg')}} " alt="Li's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        <a href="shop-left-sidebar.html">Studio Design</a>
                                                    </h5>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4><a class="product_name" href="single-product.html">Mug Today is a good day</a></h4>
                                                <div class="price-box">
                                                    <span class="new-price new-price-2">$71.80</span>
                                                    <span class="old-price">$77.22</span>
                                                    <span class="discount-percentage">-7%</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                    <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-lg-12">
                                    
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="single-product.html">
                                                <img src="{{ asset('updatedFrontend/images/product/large-size/3.jpg')}} " alt="Li's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        <a href="shop-left-sidebar.html">Graphic Corner</a>
                                                    </h5>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4><a class="product_name" href="single-product.html">Accusantium dolorem1</a></h4>
                                                <div class="price-box">
                                                    <span class="new-price">$46.80</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                    <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="col-lg-12">
                                
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="single-product.html">
                                                <img src="{{ asset('updatedFrontend/images/product/large-size/4.jpg')}} " alt="Li's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        <a href="shop-left-sidebar.html">Studio Design</a>
                                                    </h5>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4><a class="product_name" href="single-product.html">Mug Today is a good day</a></h4>
                                                <div class="price-box">
                                                    <span class="new-price new-price-2">$71.80</span>
                                                    <span class="old-price">$77.22</span>
                                                    <span class="discount-percentage">-7%</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                    <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-lg-12">
                                   
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="single-product.html">
                                                <img src="{{ asset('updatedFrontend/images/product/large-size/5.jpg')}} " alt="Li's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        <a href="shop-left-sidebar.html">Graphic Corner</a>
                                                    </h5>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4><a class="product_name" href="single-product.html">Accusantium dolorem1</a></h4>
                                                <div class="price-box">
                                                    <span class="new-price">$46.80</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                    <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-lg-12">
                                    
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="single-product.html">
                                                <img src="{{ asset('updatedFrontend/images/product/large-size/6.jpg')}} " alt="Li's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        <a href="shop-left-sidebar.html">Studio Design</a>
                                                    </h5>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4><a class="product_name" href="single-product.html">Mug Today is a good day</a></h4>
                                                <div class="price-box">
                                                    <span class="new-price new-price-2">$71.80</span>
                                                    <span class="old-price">$77.22</span>
                                                    <span class="discount-percentage">-7%</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                    <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section> -->
        <!-- Li's Laptop Product Area End Here -->
        <!-- Begin Li's TV & Audio Product Area -->
        <!-- <section class="product-area li-laptop-product li-tv-audio-product pb-45">
            <div class="container">
                <div class="row">
                   
                    <div class="col-lg-12">
                        <div class="li-section-title">
                            <h2>
                                <span>TV & Audio</span>
                            </h2>
                            <ul class="li-sub-category-list">
                                <li class="active"><a href="shop-left-sidebar.html">Chamcham</a></li>
                                <li><a href="shop-left-sidebar.html">Sanai</a></li>
                                <li><a href="shop-left-sidebar.html">Meito</a></li>
                            </ul>
                        </div>
                        <div class="row">
                            <div class="product-active owl-carousel">
                                <div class="col-lg-12">
                                    
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="single-product.html">
                                                <img src="{{ asset('updatedFrontend/images/product/large-size/3.jpg')}} " alt="Li's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        <a href="shop-left-sidebar.html">Graphic Corner</a>
                                                    </h5>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4><a class="product_name" href="single-product.html">Accusantium dolorem1</a></h4>
                                                <div class="price-box">
                                                    <span class="new-price">$46.80</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                    <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-lg-12">
                              
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="single-product.html">
                                                <img src="{{ asset('updatedFrontend/images/product/large-size/5.jpg')}} " alt="Li's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        <a href="shop-left-sidebar.html">Studio Design</a>
                                                    </h5>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4><a class="product_name" href="single-product.html">Mug Today is a good day</a></h4>
                                                <div class="price-box">
                                                    <span class="new-price new-price-2">$71.80</span>
                                                    <span class="old-price">$77.22</span>
                                                    <span class="discount-percentage">-7%</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                    <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                 
                                </div>
                                <div class="col-lg-12">
                                    
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="single-product.html">
                                                <img src="{{ asset('updatedFrontend/images/product/large-size/7.jpg')}} " alt="Li's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        <a href="shop-left-sidebar.html">Graphic Corner</a>
                                                    </h5>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4><a class="product_name" href="single-product.html">Accusantium dolorem1</a></h4>
                                                <div class="price-box">
                                                    <span class="new-price">$46.80</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                    <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="col-lg-12">
                                   
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="single-product.html">
                                                <img src="{{ asset('updatedFrontend/images/product/large-size/9.jpg')}} " alt="Li's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        <a href="shop-left-sidebar.html">Studio Design</a>
                                                    </h5>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4><a class="product_name" href="single-product.html">Mug Today is a good day</a></h4>
                                                <div class="price-box">
                                                    <span class="new-price new-price-2">$71.80</span>
                                                    <span class="old-price">$77.22</span>
                                                    <span class="discount-percentage">-7%</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                    <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-lg-12">
                                   
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="single-product.html">
                                                <img src="{{ asset('updatedFrontend/images/product/large-size/11.jpg')}} " alt="Li's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        <a href="shop-left-sidebar.html">Graphic Corner</a>
                                                    </h5>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4><a class="product_name" href="single-product.html">Accusantium dolorem1</a></h4>
                                                <div class="price-box">
                                                    <span class="new-price">$46.80</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                    <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-lg-12">
                                   =
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="single-product.html">
                                                <img src="{{ asset('updatedFrontend/images/product/large-size/11.jpg')}} " alt="Li's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        <a href="shop-left-sidebar.html">Studio Design</a>
                                                    </h5>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4><a class="product_name" href="single-product.html">Mug Today is a good day</a></h4>
                                                <div class="price-box">
                                                    <span class="new-price new-price-2">$71.80</span>
                                                    <span class="old-price">$77.22</span>
                                                    <span class="discount-percentage">-7%</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                    <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section> -->
        <!-- Li's TV & Audio Product Area End Here -->
        <!-- Begin Li's Static Home Area -->
        <div class="li-static-home">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Begin Li's Static Home Image Area -->
                        <div class="li-static-home-image2"></div>
                        <!-- Li's Static Home Image Area End Here -->
                        <!-- Begin Li's Static Home Content Area -->
                        <div class="li-static-home-content">
                            <!-- <p>Sale Offer<span>-20% Off</span>This Week</p>
                            <h2>Featured Product</h2>
                            <h2>Meito Accessories 2018</h2>
                            <p class="schedule">
                                Starting at
                                <span> $1209.00</span>
                            </p>
                            <div class="default-btn">
                                <a href="shop-left-sidebar.html" class="links">Shopping Now</a>
                            </div> -->
                        </div>
                        <!-- Li's Static Home Content Area End Here -->
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="li-static-home">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Begin Li's Static Home Image Area -->
                        <div class="li-static-home-image"></div>
                        <!-- Li's Static Home Image Area End Here -->
                        <!-- Begin Li's Static Home Content Area -->
                        <div class="li-static-home-content">
                            <!-- <p>Sale Offer<span>-20% Off</span>This Week</p>
                            <h2>Featured Product</h2>
                            <h2>Meito Accessories 2018</h2>
                            <p class="schedule">
                                Starting at
                                <span> $1209.00</span>
                            </p>
                            <div class="default-btn">
                                <a href="shop-left-sidebar.html" class="links">Shopping Now</a>
                            </div> -->
                        </div>
                        <!-- Li's Static Home Content Area End Here -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Li's Static Home Area End Here -->
        <!-- Begin Li's Trending Product Area -->
      
        <!-- Li's Trending Product Area End Here -->
        <!-- Begin Li's Trendding Products Area -->
       
        <!-- Li's Trendding Products Area End Here -->
        <!-- Begin Footer Area -->
<!-- new design end-->

    <!-- <section class="banner sale">
        <div class="intro">

            <a class="sale-headline event-track" href="#" data-event_category="Home Page Banner"
               data-event_action="click" data-event_label="Holiday Sale text">
                <p class="sale-line1">March Cabinet Sale</p>
                <p class="sale-line2">Take up to 50% off</p>
                <p class="sale-line3"><span>Sale Details</span></p>
            </a>

            <h1>RTA Cabinets Online &ndash; Wholesale Prices</h1>
            <a class="event-track" href="#" data-event_category="Home Page Banner" data-event_action="click"
               data-event_label="Lowest Price Guaranteed">Lowest Price Guaranteed</a>
            <div>
                <a class="event-track" href="#" data-event_category="Home Page Banner" data-event_action="click"
                   data-event_label="Explore RTA Cabinets">Explore RTA Cabinets</a>
            </div>
        </div>
        <aside class="bilt">
            <a href="#" class="event-track nocallback" data-event_category="Home Page Banner"
               data-event_action="click" data-event_label="BILT | Learn More">
                <div>
                    <img src="{{ asset('frontend/assets/images/bilt-intro.png') }}" width="186" alt="Now Introducing" />
                    <img src="{{ asset('frontend/assets/images/bilt-phone.png') }}" width="96" alt="mobile phone icon" />
                </div>
                <div>
                    <span>3D Interactive</span>
                    <span>Assembly Instructions</span>
                    <span>For All Quick Ship Lines</span>
                    <br class="mobile" />
                    <span class="link">Learn More</span>
                    <div class="desktop">
                        <img src="{{ asset('frontend/assets/images/powered-by-bilt.png') }}" width="154"
                             alt="Powered by BILT Intelligent Instructions" />
                    </div>
                </div>
            </a>
        </aside>
    </section>

    <div class="offers">
        <div class="container">
            <h2>25% OFF for All Trade Professionals</h2> <a href="#">Sign Up Now</a>
        </div>
    </div>

    <section class="quick-ship">
        <div class="inner">
            <div>
                <a class="block-link event-track" href="#" data-event_category="Home Page QSG"
                   data-event_action="click" data-event_label="Logo/Sample Images">
                    <img class="qsg-logo" src="{{ asset('frontend/assets/images/quick-ship-logo.png') }}" width="134" height="134"
                         alt="quick ship cabinetry guarantee" />
                    <div class="desktop">
                        <img class="qsg-doors" src="{{ asset('frontend/assets/images/ezgif-4-1c67c32523.png') }}" width="708"
                             alt="4 quick ship cabinet doors" />
                    </div>
                    <div class="mobile">
                        <img class="qsg-doors" src="{{ asset('frontend/assets/images/ezgif-4-1c67c32523.png') }}" width="282"
                             alt="quick ship cabinet sample doors" />
                    </div>
                </a>
            </div>
            <div>
                <a class="block-link event-track" href="#" data-event_category="Home Page QSG"
                   data-event_action="click" data-event_label="Heading/Copy">
                    <h2>Quick Ship Cabinet Lines</h2>
                    <p>Cabinets ship out in 3 days or we pay you!</p>
                </a>
                <a class="button link event-track" href="#" data-event_category="Home Page QSG"
                   data-event_action="click" data-event_label="Shop Now">Shop Now</a>
                <a class="link event-track" href="#" data-event_category="Home Page QSG" data-event_action="click"
                   data-event_label="Learn More">Learn More</a>
            </div>
        </div>
    </section>

    <section class="props container">
        <div>
            <ul>
                <li>
                    <a href="#">
                        <img src="{{ asset('frontend/assets/images/fast-shipping.svg') }}" />
                        <h3>Fast</h3>
                        <p>Select cabinet lines leave our warehouse within 3 business days!</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ asset('frontend/assets/images/low-price.svg') }}" />
                        <h3>Pricing</h3>
                        <p>Lowest price guarantee</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ asset('frontend/assets/images/financing.svg') }}" />
                        <h3>Financing</h3>
                        <p>0% APR financing available</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ asset('frontend/assets/images/samples.svg') }}" />
                        <h3>Samples</h3>
                        <p>Refundable samples demonstrate our high quality</p>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <section class="samples">
        <div class="img-wrapper">
            <img src="{{ asset('frontend/assets/images/sample-door-collection.png') }}" width="361" />
        </div>
        <div class="container">
            <div class="info desktop tablet">
                <h2>Refundable Sample Doors</h2>
                <span>$9.99</span>
                <p>Find your style and taste your dream Kitchen before you buy.</p>
                <a class="button desktop tablet" href="#">Shop All Sample Doors</a>
            </div>
            <div class="mobile">
                <div class="info">
                    <h2>Refundable Sample Doors</h2>
                    <p>Taste your dream Kitchen beforehand</p>
                    <span>$9.99</span>
                </div>
            </div>
            <div class="sample-carousel">
                <div class="cabinet-lines">
                    <div>
                        <a href="#">
                            <img src="{{ asset('frontend/assets/images/stone-grey-shaker.jpg') }}" width="200" height="200"
                                 alt="Stone Grey ShakerKitchen Cabinets">
                        </a>
                        <h3>Stone Grey</h3>
                        <a class="button" href="#">Shop Sample Door</a>
                        <a class="button" href="#">Shop Cabinet</a>
                    </div>
                    <div>
                        <a href="#">
                            <img src="{{ asset('frontend/assets/images/stone-grey-shaker.jpg') }}" width="200" height="200"
                                 alt="Stone Grey ShakerKitchen Cabinets">
                        </a>
                        <h3>Stone Grey</h3>
                        <a class="button" href="#">Shop Sample Door</a>
                        <a class="button" href="#">Shop Cabinet</a>
                    </div>
                    <div>
                        <a href="#">
                            <img src="{{ asset('frontend/assets/images/stone-grey-shaker.jpg') }}" width="200" height="200"
                                 alt="Stone Grey ShakerKitchen Cabinets">
                        </a>
                        <h3>Stone Grey</h3>
                        <a class="button" href="#">Shop Sample Door</a>
                        <a class="button" href="#">Shop Cabinet</a>
                    </div>
                    <div>
                        <a href="#">
                            <img src="{{ asset('frontend/assets/images/stone-grey-shaker.jpg') }}" width="200" height="200"
                                 alt="Stone Grey ShakerKitchen Cabinets">
                        </a>
                        <h3>Stone Grey</h3>
                        <a class="button" href="#">Shop Sample Door</a>
                        <a class="button" href="#">Shop Cabinet</a>
                    </div>
                    <div>
                        <a href="#">
                            <img src="{{ asset('frontend/assets/images/stone-grey-shaker.jpg') }}" width="200" height="200"
                                 alt="Stone Grey ShakerKitchen Cabinets">
                        </a>
                        <h3>Stone Grey</h3>
                        <a class="button" href="#">Shop Sample Door</a>
                        <a class="button" href="#">Shop Cabinet</a>
                    </div>
                </div>
            </div>
        </div>
        <a class="button mobile" href="/sample-doors/">Shop All Sample Doors</a>
    </section>
    <section class="kitchens">
        <div class="container">
            <h2>Real Kitchens. Real Results.</h2>
            <h3>See Our Customer's Creations</h3>
            <div class="kitchen-carousel">
                <div class="completed-kitchens">
                    <div>
                        <a href="#">
                            <img src="{{ asset('frontend/assets/images/Prospect__IL__USA-20190402203140.JPG') }}" width="484" height="322"
                                 alt="white raised panel kitchen"></a>
                        <span>Marie D., Mount Prospect, IL</span>
                    </div>
                    <div>
                        <a href="#">
                            <img src="{{ asset('frontend/assets/images/Prospect__IL__USA-20190402203140.JPG') }}" width="484" height="322"
                                 alt="white raised panel kitchen"></a>
                        <span>Marie D., Mount Prospect, IL</span>
                    </div>
                    <div>
                        <a href="#">
                            <img src="{{ asset('frontend/assets/images/Prospect__IL__USA-20190402203140.JPG') }}" width="484" height="322"
                                 alt="white raised panel kitchen"></a>
                        <span>Marie D., Mount Prospect, IL</span>
                    </div>
                    <div>
                        <a href="#">
                            <img src="{{ asset('frontend/assets/images/Prospect__IL__USA-20190402203140.JPG') }}" width="484" height="322"
                                 alt="white raised panel kitchen"></a>
                        <span>Marie D., Mount Prospect, IL</span>
                    </div>
                    <div>
                        <a href="#">
                            <img src="{{ asset('frontend/assets/images/Prospect__IL__USA-20190402203140.JPG') }}" width="484" height="322"
                                 alt="white raised panel kitchen"></a>
                        <span>Marie D., Mount Prospect, IL</span>
                    </div>
                </div>
            </div>
        </div>
        <a class="button" href="#">Get Inspired</a>
    </section>
    <section class="category">
        <h2>Shop By Category</h2>
        <ul>
            <li>
                <a href="#">
                    <div>
                        <img src="{{ asset('frontend/assets/images/Shop-RTA-Cabinet-Category-pic.jpg') }}" alt="grey shaker kitchen"
                             width="622" height="468" />
                    </div>
                    <h3>Want to Save Money?</h3>
                </a>
                <a class="button" href="#">Shop RTA Cabinets</a>
            </li>
            <li>
                <a href="#">
                    <div>
                        <img src="{{ asset('frontend/assets/images/Shop-Pre-Assembled-Cabinet-Category-pic.jpg') }}"
                             alt="blue shaker kitchen" width="622" height="468" />
                    </div>
                    <h3>Want to Save Time?</h3>
                </a>
                <a class="button" href="#">Shop Pre-Assembled Cabinets</a>
            </li>
            <li>
                <a href="#">
                    <div>
                        <img src="{{ asset('frontend/assets/images/Shop-Bathroom-Vanities-Category-pic.jpg') }}" alt="bathroom vanity"
                             width="622" height="468" />
                    </div>
                    <h3>More than Kitchens</h3>
                </a>
                <a class="button" href="#">Shop Bathroom Vanities</a>
            </li>
            <li>
                <a href="#">
                    <div>
                        <img src="{{ asset('frontend/assets/images/Shop-Accessories-Category-pic.jpg') }}" alt="kitchen drawer organizer"
                             width="622" height="468" />
                    </div>
                    <h3>More than Cabinets</h3>
                </a>
                <a class="button" href="#">Shop Accessories</a>
            </li>
        </ul>
    </section>
    <section class="video">
        <iframe width="1000" height="565" loading="lazy" title="Why RTA Cabinet Store Video"
                src="https://www.youtube.com/embed/u1C1Gecu25U?rel=0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        <img src="{{ asset('frontend/assets/images/logos01.jpg') }}" alt="As seen on HGTV, DIY, A&E, Bio...">
        <img src="{{ asset('frontend/assets/images/logos02.jpg') }}" alt="As seen on HGTV, DIY, A&E, Bio...">
    </section>
    <section class="contractors">
        <div class="intro">
            <h2>25% OFF for all Trade Professionals</h2>
            <p>Our trade pro clients receive an additional 25% off purchases</p>
            <a class="button" href="/offers/contractor/">Sign Up for 25% Discount</a>
        </div>
    </section>
    <section class="low-price">
        <h2>What do we mean by <strong>Lowest Price Guaranteed</strong></h2>
        <p>As a leader in the RTA cabinet industry, we are so confident that we can offer the lowest prices on the
            internet, that we are willing to back it up with a guarantee. If you can find the same exact rta
            cabinets at a lower price anywhere on the internet, we will not only match their price, but we will beat
            it!</p>
        <a class="button" href="/lowest-price-guarantee/">Learn More</a>
    </section> -->

@endsection



