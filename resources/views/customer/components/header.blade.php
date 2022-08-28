 

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('frontend/headerfiles/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{ asset('frontend/headerfiles/css/owl.carousel.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/headerfiles/css/bootstrap.min.css')}}">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('frontend/headerfiles/css/style.css')}}">

    <title>Website Menu #4</title>
    <style>
        .minicart-button a span{
            color:white;
        }

        .hm-searchbox{
                        min-width: 100px;

                        height: 25px;

                        float: right;

                  }
        .hm-searchbox input{
          height: 25px;
            padding: 0px;
            line-height: 0px;
        }

        button.li-btn{
          line-height: 0px;
          height: 25px;

        }
    </style>
    <!-- toaster css -->
         <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
         
        <script src="https://js.stripe.com/v3/"></script>

    
</head>
  <body>


    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>


      <div class="top-bar">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <a href="#" class=""><span class="mr-1  icon-envelope-open-o"></span> <span class="d-none d-md-inline-block">support@cabinetspro.com</span></a>
              <span class="mx-md-1 d-inline-block"></span>
              <a href="#" class=""><span class="mr-2  icon-phone"></span> <span class="d-none d-md-inline-block">1-877-327-2776</span></a>
              <span class="mx-md-1 d-inline-block"></span>
                @if(Auth::user())
                                    <!-- <li><a href="{{ route('logout') }}">Sign out</a></li> -->
                                    <span class="d-inline-block"> <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();"><span class="mr-2  icon-unlock"></span><span class="d-none d-md-inline-block ">
                                {{ __('Log Out') }}</span>
                            </x-dropdown-link>
                        </form></span>
                                    @else
                                    <a href="{{ url('/login') }}"><span class="mr-2  icon-lock"></span> <span class="d-none d-md-inline-block ">Account</span></a>
                @endif 
                
        <form action="{{ route('product.search') }}" method="post" class="hm-searchbox farcss" >
          @csrf
                            
                <input type="text" placeholder="   search" name="search">
                <button class="li-btn" type="submit"><i class="fa fa-search"></i></button>
            </form>















              

              

              <div class="float-right">
              <a href="{{ url('/quick-ship') }}"> <span class="d-none d-md-inline-block">Fast Delivery</span></a> 

              <span class="mx-md-1 d-inline-block"></span>

                
                
                <a href="{{ url('/trade') }}" class=""> <span class="d-none d-md-inline-block">Trade Pro Discount</span></a>

                <span class="mx-md-1 d-inline-block"></span>
                <a href="{{ url('/about-us') }}" class=""> <span class="d-none d-md-inline-block">AboutUs</span></a>
                <span class=" mx-md-1  d-inline-block"></span>
                <a href="{{ url('/contact-us') }}" class=""> <span class="d-none d-md-inline-block">ContactUs</span></a>
                <span class=" mx-md-1  d-inline-block"></span>

                

              </div>


              














            </div>

          </div>

        </div>
      </div>

      <header class="site-navbar js-sticky-header site-navbar-target" role="banner" style="background:black; position: sticky; top: 0; left: 0px;">

        <div class="container-fluid">
          <div class="row align-items-center position-relative">


            <div class="site-logo">
             <li><a href="{{ url('/') }}" ><img src="{{ asset('updatedFrontend/newlogo.png')}}"  alt="Cabinets Pro" 
                                    style="height: 40px; width: auto;color:white"></a></li>
            </div>

            <div class="col-12">
              <nav class="site-navigation text-right ml-auto " role="navigation">

                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <li class="has-children">
                    <a href="{{ route('rta-kitchen-cabinets') }}" class="nav-link">KITCHEN CABINETS</a>
                    <ul class="dropdown arrow-top">
                      <li><a href="{{ route('rta-kitchen-cabinets') }}" class="nav-link">RTA Kitchen Cabinets</a></li>
                      <li><a href="{{ route('assembled-kitchen-cabinets') }}" class="nav-link">Assembled Kitchen Cabinets</a></li>
                      <li><a href="{{ route('kitchen-Hoods') }}">Hoods</a></li>
                     
                    </ul>
                 </li>
                  <li><a href="{{ route('rta-bathroom-vanities') }}"class="nav-link">BATHROOM VANITIES</a></li>
                  <li><a href="{{ route('refundable-samples') }}">REFUNDABLE SAMPLES</a></li>


                  

     
                  <li class="has-children">
                    <a href="" class="nav-link">RESOURCE CENTER</a>
                    <ul class="dropdown arrow-top">
                      <li><a href="{{ route('resources') }}" class="nav-link">Resources</a></li>
                      <li><a href="{{ route('freedesign') }}" class="nav-link">Free Design Help</a></li>
                      <li><a href="{{ route('faqs') }}" class="nav-link">FAQ's</a></li>
                      
                      
                    </ul>
                 </li>
                
                  @if(Auth::user() )

                                    <li class="hm-minicart p-0 ">
                                        <div class="hm-minicart-trigger bg-dark cs">
                                            <span class="item-icon">$</span>
                                            <span id="miniCartTotal" class="item-text" >

                                                <span id="miniCartQty" class="cart-item-count" style="background:#B0B1AF; color: white;">
                                                </span>
                                                
                                            </span>

                                        </div>
                                        <span></span>
                                        <div class="minicart">
                                            <ul class="minicart-product-list">
                                                <div id="miniCart"></div>

                                           

                                                
                                            </ul>
                                            <p class="minicart-total">SUBTOTAL: <span> $ </span><span id="miniCartTotal"></span></p>
                                            <div class="minicart-button">
                                                <a href="{{url('/cart')}}" class="li-button li-button-fullwidth li-button-dark">
                                                    <span>View Full Cart</span>
                                                </a>
                                                <a href="{{ route('checkout') }}" class="li-button li-button-fullwidth bg-dark">
                                                    <span>Checkout</span>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                            @endif
                </ul>
              </nav>

            </div>

            <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>
        </div>

      </header>

  
  


    <script src="{{asset('frontend/headerfiles/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('frontend/headerfiles/js/popper.min.js')}}"></script>
    <!--<script src="{{asset('frontend/headerfiles/js/bootstrap.min.js')}}"></script>-->
    <script src="{{asset('frontend/headerfiles/js/jquery.sticky.js')}}"></script>
    <script src="{{asset('frontend/headerfiles/js/main.js')}}"></script>
  