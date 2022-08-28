<!-- new footer -->
<div class="footer">
    <!-- Begin Footer Static Top Area -->
    <div class="footer-static-top">
        <div class="container">
            <!-- Begin Footer Shipping Area -->
            <div class="footer-shipping pt-60 pb-55 pb-xs-25">
                <div class="row">
                    <!-- Begin Li's Shipping Inner Box Area -->
                    <div class="col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55">
                        <div class="li-shipping-inner-box">
                            <div class="shipping-icon">
                                <img src="{{ asset('updatedFrontend/images/shipping-icon/1.png')}}" alt="Shipping Icon">
                            </div>
                            <div class="shipping-text">
                                <h2>Fast Delivery</h2>
                                <p>And free returns. See checkout for delivery dates.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Li's Shipping Inner Box Area End Here -->
                    <!-- Begin Li's Shipping Inner Box Area -->
                    <div class="col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55">
                        <div class="li-shipping-inner-box">
                            <div class="shipping-icon">
                                <img src="{{ asset('updatedFrontend/images/shipping-icon/2.png')}}" alt="Shipping Icon">
                            </div>
                            <div class="shipping-text">
                                <h2>Safe Payment</h2>
                                <p>Pay with the world's most popular and secure payment methods.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Li's Shipping Inner Box Area End Here -->
                    <!-- Begin Li's Shipping Inner Box Area -->
                    <div class="col-lg-3 col-md-6 col-sm-6 pb-xs-30">
                        <div class="li-shipping-inner-box">
                            <div class="shipping-icon">
                                <img src="{{ asset('updatedFrontend/images/shipping-icon/3.png')}}" alt="Shipping Icon">
                            </div>
                            <div class="shipping-text">
                                <h2>Shop with Confidence</h2>
                                <p>Our Buyer Protection covers your purchasefrom click to delivery.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Li's Shipping Inner Box Area End Here -->
                    <!-- Begin Li's Shipping Inner Box Area -->
                    <div class="col-lg-3 col-md-6 col-sm-6 pb-xs-30">
                        <div class="li-shipping-inner-box">
                            <div class="shipping-icon">
                                <img src="{{ asset('updatedFrontend/images/shipping-icon/4.png')}}" alt="Shipping Icon">
                            </div>
                            <div class="shipping-text">
                                <h2>24/7 Help Center</h2>
                                <p>Have a question? Call a Specialist or chat online.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Li's Shipping Inner Box Area End Here -->
                </div>
            </div>
            <!-- Footer Shipping Area End Here -->
        </div>
    </div>
    <!-- Footer Static Top Area End Here -->
    <!-- Begin Footer Static Middle Area -->
    <div class="footer-static-middle bg-dark">
        <div class="container">
            <div class="footer-logo-wrap pt-50 pb-35">
                <div class="row">
                    <!-- Begin Footer Logo Area -->
                    <!-- <div class="col-lg-4 col-md-6">
                        <div class="footer-logo">
                            <img src="{{ asset('updatedFrontend/images/menu/logo/1.jpg')}}" alt="Footer Logo">
                            <p class="info">
                                We are a team of designers and developers that create high quality HTML Template & Woocommerce, Shopify Theme.
                            </p>
                        </div>
                        <ul class="des">
                            <li>
                                <span>Address: </span>
                                6688Princess Road, London, Greater London BAS 23JK, UK
                            </li>
                            <li>
                                <span>Phone: </span>
                                <a href="#">(+123) 123 321 345</a>
                            </li>
                            <li>
                                <span>Email: </span>
                                <a href="mailto://info@yourdomain.com">info@yourdomain.com</a>
                            </li>
                        </ul>
                    </div> -->
                    <!-- Footer Logo Area End Here -->
                    <!-- Begin Footer Block Area -->
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <div class="footer-block">
                            <!-- <h3 class="footer-block-title">Product</h3> -->
                            <ul>
                                <li><a href="{{ url('/register') }}">Create an Account</a></li>
                                <li><a href="{{ route('aboutUs') }}">About Us</a></li>
                                <li><a href="{{ route('contactUs') }}">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer Block Area End Here -->
                    <!-- Begin Footer Block Area -->
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <div class="footer-block">
                            <!-- <h3 class="footer-block-title" >Our company</h3> -->
                            <ul>
                                <li><a href="{{ url('/login') }}">Sign in</a></li>
                                <li><a href="{{ url('/cart') }}">Shopping Cart</a></li>
                                <li> @if(Auth::user())
                                    <!-- <li><a href="{{ route('logout') }}">Sign out</a></li> -->
                                    <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                                    @else
                                    <a href="{{ url('/login') }}"> <span class="d-none d-md-inline-block ">Account</span></a>
                @endif</li>
                                
                            </ul>
                        </div>
                    </div>
                    <!-- Footer Block Area End Here -->
                    <!-- Begin Footer Block Area -->
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <div class="footer-block">
                            <!-- <h3 class="footer-block-title">Product</h3> -->
                            <ul>
                                <li><a href="{{ url('/refundable-samples') }}">Refundable samples</a></li>
                                <li><a href="{{ route('profileBillingDetails') }}">Profile</a></li>
                                <li><a href="{{ url('/trade') }}">Trade Pro Discount</a></li>
                                
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <div class="footer-block">
                            <!-- <h3 class="footer-block-title">Product</h3> -->
                            <ul>
                                <li><a href="{{ route('order.tracking') }}">Order Tracking</a></li>
                                <li><a href="">Shipping & Return Policy</a></li>
                                <li><a href="">Warranty</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <!-- Footer Block Area End Here -->
                    <!-- Begin Footer Block Area -->
                    <!-- <div class="col-lg-2 col-md-3 col-sm-6">
                        <div class="footer-block">
                            
                            <ul>
                                <li><a href="#">Delivery</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Order Status</a></li>
                               
                            </ul>
                        </div>
                    </div> -->
                    <!-- Footer Block Area End Here -->
                    <!-- Begin Footer Block Area -->
                    <div class="col-lg-4">
                        <div class="footer-block">
                            <h3 class="footer-block-title" style="color: #fff">Follow Us</h3>
                            <ul class="social-link">
                                
                              
                                <li class="facebook">
                                    <a href="https://www.facebook.com/" data-toggle="tooltip" target="_blank" title="Facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                               
                                <li class="instagram">
                                    <a href="https://www.instagram.com/" data-toggle="tooltip" target="_blank" title="Instagram">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Begin Footer Newsletter Area -->
                        <!-- <div class="footer-newsletter">
                            <h4>Sign up to newsletter</h4>
                            <form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="footer-subscribe-form validate" target="_blank" novalidate>
                               <div id="mc_embed_signup_scroll">
                                  <div id="mc-form" class="mc-form subscribe-form form-group" >
                                    <input id="mc-email" type="email" autocomplete="off" placeholder="Enter your email" />
                                    <button  class="btn" id="mc-submit">Subscribe</button>
                                  </div>
                               </div>
                            </form>
                        </div> -->
                        <!-- Footer Newsletter Area End Here -->
                    </div>
                    <!-- Footer Block Area End Here -->
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Static Middle Area End Here -->
    <!-- Begin Footer Static Bottom Area -->
    <div class="footer-static-bottom pt-55 pb-55">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Begin Footer Links Area -->
                    <div class="footer-links">
                        <!-- <ul>
                            <li><a href="#">Online Shopping</a></li>
                            <li><a href="#">Promotions</a></li>
                            <li><a href="#">My Orders</a></li>
                            <li><a href="#">Help</a></li>
                            <li><a href="#">Customer Service</a></li>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Most Populars</a></li>
                            <li><a href="#">New Arrivals</a></li>
                            <li><a href="#">Special Products</a></li>
                            <li><a href="#">Manufacturers</a></li>
                            <li><a href="#">Our Stores</a></li>
                            <li><a href="#">Shipping</a></li>
                            <li><a href="#">Payments</a></li>
                            <li><a href="#">Warantee</a></li>
                            <li><a href="#">Refunds</a></li>
                            <li><a href="#">Checkout</a></li>
                            <li><a href="#">Discount</a></li>
                            <li><a href="#">Refunds</a></li>
                            <li><a href="#">Policy Shipping</a></li>
                        </ul> -->
                    </div>
                    <!-- Footer Links Area End Here -->
                    <!-- Begin Footer Payment Area -->
                    <!-- <div class="copyright text-center">
                        <a href="#">
                            <img src="{{ asset('updatedFrontend/images/payment/1.png')}}" alt="">
                        </a>
                    </div> -->
                    <!-- Footer Payment Area End Here -->
                    <!-- Begin Copyright Area -->
                  
                    <!-- Copyright Area End Here -->
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Static Bottom Area End Here -->
</div>
<!-- new footer end -->

<!-- old design footer -->
    <!-- <div id="rtaFooterNav" class="visualNoPrint">
        <ul>
            <li><a href="#">Order Status</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Shopping Cart</a></li>
            <li><a href="#">Privacy Notice</a></li>
            <li><a href="#">Conditions of Use</a></li>
            <li><a href="#">Log Out</a></li>
        </ul>
        <ul>
            <li><a href="#">Shipping &amp; Return Policy</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Kitchen Design Tool</a></li>
            <li><a href="#">Find a Trade Professional</a></li>
            <li><a href="#">Careers</a></li>
        </ul>
        <ul>
            <li><a href="#">Installation &amp; Assembly</a></li>
            <li><a href="#">Resources</a> / <a href="#">Inspiration</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">RTA in the Media</a></li>
            <li><a href="#">RTA Cabinet Warranty</a></li>
        </ul>
        <ul>
            <li><a href="#">Create an account</a></li>
            <li><a href="#">Trade Pro Rewards</a></li>
            <li><a href="#">Multi-Unit Projects</a></li>
            <li><a href="#">Customer Reviews</a></li>
            <li><a href="#">Submit a Claim</a></li>
        </ul>
    </div>
    <div class="footer-logos">
        <img src="{{ asset('frontend/assets/images/paypallogo.png') }}" alt="Paypal" width="288" height="50">
        <img src="{{ asset('frontend/assets/images/nahb-nkba-value-line.png') }}" alt="Member of NAHB, NKBA" width="450" height="67">

        <div class="social-icons">
            <a href="#" target="_blank">
                <img width="48" height="48" alt="." src="{{ asset('frontend/assets/images/facebook.png') }}">
            </a>
            <a href="#" target="_blank">
                <img width="48" height="48" alt="." src="{{ asset('frontend/assets/images/instagram.png') }}">
            </a>
            <a href="#" target="_blank">
                <img width="48" height="48" alt="." src="{{ asset('frontend/assets/images/pinterest.png') }}">
            </a>
            <a href="#" target="_blank">
                <img width="48" height="48" alt="." src="{{ asset('frontend/assets/images/linkedin.png') }}">
            </a>
        </div>
    </div>
    <footer class="site-footer rb">
        <a href="#">
            <img src="{{ asset('frontend/assets/images/rb.png') }}" alt="Renovation Brands" width="450" height="28">
        </a>

        <div class="brands">
            <p><span>Part of the Renovation Brands Family</span></p>
            <div class="brands-logos">
                <a href="#">
                    <img src="{{ asset('frontend/assets/images/atc.png') }}" alt="American Tin Ceilings">
                </a>
                <a href="#">
                    <img src="{{ asset('frontend/assets/images/reggio.png') }}" alt="American Tin Ceilings">
                </a>
                <a href="#">
                    <img src="{{ asset('frontend/assets/images/baseboarders.png') }}" alt="American Tin Ceilings">
                </a>
                <a href="#">
                    <img src="{{ asset('frontend/assets/images/kdp.png') }}" alt="American Tin Ceilings">
                </a>
                <a href="#">
                    <img src="{{ asset('frontend/assets/images/rta.png') }}" alt="American Tin Ceilings">
                </a>
                <a href="#">
                    <img src="{{ asset('frontend/assets/images/decor-planet.png') }}" alt="American Tin Ceilings">
                </a>

            </div>
        </div>

        <div class="rtaFooterText">
            <p>Copyright &copy;2022 RTA Cabinet Store, LLC wholesale ready-to-assemble RTA kitchen cabinets and bathroom
                vanities.<br><br></p>
        </div>
    </footer> -->
<!-- old design footer -->
