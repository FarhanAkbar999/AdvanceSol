@extends('layouts.customer')

@section('content')
<style>
    .lines { display: flex;flex-wrap: wrap;margin: 0 -1vw;}

    .rta-kitchen-cabinets-wrapper .line { position: relative;width: calc(25% - 1.5vw);margin: .75vw;padding: 0 20px 16px 20px;border: 4px solid #E3E3E3;border-radius: 12px;overflow: hidden;}
    .rta-kitchen-cabinets-wrapper .line .img-wrapper { display: block;height: 216px;overflow: hidden;margin: 0 -20px;text-align: center;box-shadow: inset 0 -4px 12px -8px #888;}
    .rta-kitchen-cabinets-wrapper .line .img-wrapper img { width: 50%;min-width: 0;margin-top: 16px;height: auto;}
    .line.room-bathroom .img-wrapper img { width: 62%;}
    .rta-kitchen-cabinets-wrapper .line .img-wrapper span + span img { width: 100%;height: auto;min-height: 212px;margin-top: 0;}
    .rta-kitchen-cabinets-wrapper .line .img-wrapper span + span { display: none;}
    .rta-kitchen-cabinets-wrapper .line h2 { margin: 20px 0 4px 0;font-size: 16px;font-weight: bold;line-height: 1.25em;}
    .rta-kitchen-cabinets-wrapper .line h2 a { text-decoration: none;}
    .rta-kitchen-cabinets-wrapper .line .button { width: 100%;font-size: 13px;padding: 12px 0;border: 2px solid #1A5B11; display: block; background-color: #1A5B11; text-align: center;} 
    .rta-kitchen-cabinets-wrapper .line .button + .button, .preview .button + .button { width: 60%;margin-top: 12px;color: #185A73;background: none;border-color: #185A73;}
    .line.room-bathroom .button + .button { width: 100%;}
    .rta-kitchen-cabinets-wrapper .line .preview-style { display: block;margin-top: 24px;font-size: 13px;text-align: center;}
    .rta-kitchen-cabinets-wrapper .line .button + .button + .preview-style { float: right;}
    .rta-kitchen-cabinets-wrapper .line .features { position: relative;margin: -22px -20px 0 -20px;padding: 3px 10px;font-size: 11px;color: #fff;background: #185A73;text-align: center;}
    .rta-kitchen-cabinets-wrapper .line .features li { display: inline-block;line-height: 1.1em;}
    .rta-kitchen-cabinets-wrapper .line .features li + li { margin-left: 12px;padding-left: 12px;border-left: 1px solid #fff;}
    .rta-kitchen-cabinets-wrapper .line .features li.quick-ship { padding-left: 46px;background: url(../images/elements.png) -321px -455px no-repeat;background-size: 512px 512px;padding-top: 0;padding-bottom: 0;} 
    .rta-kitchen-cabinets-wrapper .line .button.disabled { opacity: .35;}

    @media (max-width: 1600px) {
        /*.filter-room fieldset > div { width: calc(100% - 160px);}*/
        .rta-kitchen-cabinets-wrapper .line .button { width: 100%;}
        .rta-kitchen-cabinets-wrapper .line .button + .button { width: 100%;}
        .rta-kitchen-cabinets-wrapper .line .button + .button + .preview-style { display: block;float: none;margin: 18px 0 4px 0;text-align: center;}
        /*.popular-styles.bathroom span { max-width: 88px;margin: 16px 0 0 90px;}*/
    }

    @media (max-width: 1220px) {
        .rta-kitchen-cabinets-wrapper .line { width: calc(33.3% - 1.5vw);}
        /*.popular-styles.bathroom img { transform: scale(.8);margin-left: -6px;}
        .popular-styles.bathroom span { margin-left: 72px;}*/
    }
    @media (max-width: 920px) {
        .rta-kitchen-cabinets-wrapper .line .button { font-size: 12px;} 
        /*.popular-styles h3 { display: none;}
        .mobile.popular-styles-heading { display: block;margin-bottom: 12px;font-size: 16px;font-weight: bold;text-align: center;}
        .popular-styles a { width: 24.25%;}

        .filter legend, */ .rta-kitchen-cabinets-wrapper .line .features li.quick-ship { background-image: url(../images/elements.webp);}
    }
    @media (max-width: 750px) {
        /*h1 { margin: 32px 0 28px 0;font-size: 18px;}
        .breadcrumb { font-size: 12px;}
        .mobile { display: block;}
        .desktop { display: none;}
        .lines-wrapper { margin: 24px 0;}*/
        .rta-kitchen-cabinets-wrapper .line { width: calc(49.9% - 1.5vw);margin: 2vw .75vw;padding: 0 12px 16px 12px;}
        .rta-kitchen-cabinets-wrapper .line h2 { font-size: 14px;}
        .rta-kitchen-cabinets-wrapper .line .img-wrapper img { width: 74%;}
        .rta-kitchen-cabinets-wrapper .line .features { margin: -22px -56px 0 -56px;letter-spacing: -.5px;}
        .rta-kitchen-cabinets-wrapper .line .features li + li { margin-left: 4px;}
        .rta-kitchen-cabinets-wrapper .line .features li.quick-ship { padding-left: 32px;background-position: -334px -455px;}
        .rta-kitchen-cabinets-wrapper .line .button + .button + .preview-style { float: none;}

        }
</style>

<!-- new frontend design start-->

    <!-- Header Area End Here -->
            <!-- Begin Li's Breadcrumb Area -->
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="active">Rta Kitchen Cabinets</li>
                        </ul>
                    </div>
                </div>
            </div>
            <h1 class="text-center" style="margin: 20px;">Assemble Kitchen Cabinets</h1>
            <!-- Li's Breadcrumb Area End Here -->
            <!-- Begin Li's Content Wraper Area -->
            <div class="content-wraper pb-60 pt-sm-30">
                <div class="container">
                    <div class="row">
                @php($i = 1)
                    @if($i != 1)
                        <div class="col-lg-9 order-1 order-lg-2">
                            <div class="row">
                                    <div class="lines rta-kitchen-cabinets-wrapper"> 
                                        
                                        @foreach($kitchen as $row)
                                            <div class="line room-kitchen discount discount-25" >
                                                <a class="img-wrapper" href="{{ route('productDetails', $row->pscSlug) }}">
                                                    <span>
                                                        <img src="{{ asset('uploads/productSubCategory/'.$row->pscImage) }}"
                                                             alt="{{ $row->pscImage }}" style="">
                                                    </span>

                                                </a>
                                                <ul class="features">
                                                    <li class="best">Best Seller</li>
                                                @if($row->pscQuickShip)
                                                    <li class="quick-ship">Quick Ship</li>
                                                @endif
                                                </ul>
                                                <h2><a href="{{ route('productDetails', $row->pscSlug) }}">{{ $row->pscName }}</a></h2>
                                                <p class="product-price">Basic Kitchen Starting at <span
                                                        class="strike">$2319</span>&nbsp;<strong>{{  $row->pscPrice }}</strong></p>
                                                <a class="button shop" href="{{ route('productDetails', $row->pscSlug ) }}">Shop Cabinets</a>
                                        @if($row->refunable_samples == 1)
                                                <a class="button order-sample" href="{{ route('productDetails', $row->pscSlug ) }}">Order Sample Door</a>
                                        @endif
                                            </div>
                                        @endforeach
                    
                                    </div>
                            </div>
                            <!-- Begin Li's Banner Area -->
                            
                            <!-- shop-products-wrapper end -->
                        </div>
                    
                        <div class="col-lg-3 order-2 order-lg-1">
                            <!--sidebar-categores-box start  -->
                            
                                <!-- category-sub-menu end -->
                            <!-- </div> -->
                            <!--sidebar-categores-box end  -->
                            <!--sidebar-categores-box start  -->
                            <div class="sidebar-categores-box">
                                <div class="sidebar-title">
                                    <h2>Filter By</h2>
                                </div>
                                <!-- btn-clear-all start -->
                                <button class="btn-clear-all mb-sm-30 mb-xs-30">Clear all</button>
                                <!-- btn-clear-all end -->
                                <!-- filter-sub-area start -->
                                <!-- <div class="filter-sub-area">
                                    <h5 class="filter-sub-titel">Brand</h5>
                                    <div class="categori-checkbox">
                                        <form action="#">
                                            <ul>
                                                <li><input type="checkbox" name="product-categori"><a href="#">Prime Video (13)</a></li>
                                                <li><input type="checkbox" name="product-categori"><a href="#">Computers (12)</a></li>
                                                <li><input type="checkbox" name="product-categori"><a href="#">Electronics (11)</a></li>
                                            </ul>
                                        </form>
                                    </div>
                                </div> -->
                                <!-- filter-sub-area end -->
                                <!-- filter-sub-area start -->
                                <div class="filter-sub-area pt-sm-10 pt-xs-10">
                                    <h5 class="filter-sub-titel">Categories</h5>
                                    <div class="categori-checkbox">
                                        <form action="#">
                                            <ul>
                                                <li><input type="checkbox" name="product-categori"><a href="#"> Kitchen Cabinets</a></li>
                                                <li><input type="checkbox" name="product-categori"><a href="#"> Bathroom Vanities</a></li>
                                                <li><input type="checkbox" name="product-categori"><a href="#"> QuickShip</a></li>
                                                <li><input type="checkbox" name="product-categori"><a href="#"> Refundable Samples</a></li>
                                            </ul>
                                        </form>
                                    </div>
                                 </div>
                                <!-- filter-sub-area end -->
                                <!-- filter-sub-area start -->
                                <div class="filter-sub-area pt-sm-10 pt-xs-10">
                                    <h5 class="filter-sub-titel">Size</h5>
                                    <div class="size-checkbox">
                                        <form action="#">
                                            <ul>
                                                <li><input type="checkbox" name="product-size"><a href="#">S (3)</a></li>
                                                <li><input type="checkbox" name="product-size"><a href="#">M (3)</a></li>
                                                <li><input type="checkbox" name="product-size"><a href="#">L (3)</a></li>
                                                <li><input type="checkbox" name="product-size"><a href="#">XL (3)</a></li>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                                <!-- filter-sub-area end -->
                                <!-- filter-sub-area start -->
                                <div class="filter-sub-area pt-sm-10 pt-xs-10">
                                    <h5 class="filter-sub-titel">Color</h5>
                                    <div class="color-categoriy">
                                        <form action="#">
                                            <ul>
                                                <li><span class="white"></span><a href="#">White (1)</a></li>
                                                <li><span class="black"></span><a href="#">Black (1)</a></li>
                                                <li><span class="Orange"></span><a href="#">Orange (3) </a></li>
                                                <li><span class="Blue"></span><a href="#">Blue  (2) </a></li>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                                <!-- filter-sub-area end -->
                                <!-- filter-sub-area start -->
                                <!-- <div class="filter-sub-area pt-sm-10 pb-sm-15 pb-xs-15">
                                    <h5 class="filter-sub-titel">Dimension</h5>
                                    <div class="categori-checkbox">
                                        <form action="#">
                                            <ul>
                                                <li><input type="checkbox" name="product-categori"><a href="#">40x60cm (6)</a></li>
                                                <li><input type="checkbox" name="product-categori"><a href="#">60x90cm (6)</a></li>
                                                <li><input type="checkbox" name="product-categori"><a href="#">80x120cm (6)</a></li>
                                            </ul>
                                        </form>
                                    </div>
                                 </div> -->
                                <!-- filter-sub-area end -->
                            </div>
                            <!--sidebar-categores-box end  -->
                            <!-- category-sub-menu start -->
                            <!-- <div class="sidebar-categores-box mb-sm-0 mb-xs-0">
                                <div class="sidebar-title">
                                    <h2>Laptop</h2>
                                </div>
                                <div class="category-tags">
                                    <ul>
                                        <li><a href="# ">Devita</a></li>
                                        <li><a href="# ">Cameras</a></li>
                                        <li><a href="# ">Sony</a></li>
                                        <li><a href="# ">Computer</a></li>
                                        <li><a href="# ">Big Sale</a></li>
                                        <li><a href="# ">Accessories</a></li>
                                    </ul>
                                </div> -->
                                <!-- category-sub-menu end -->
                            <!-- </div> -->
                        </div>
                    @endif
                    </div>
                </div>
            </div>
            <!-- Content Wraper Area End Here -->
            <!-- Begin Footer Area -->
<!-- new frontend design end -->

    
@endsection
