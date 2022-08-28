@extends('layouts.customer')
@section('content') 

@php 
    $CustomerPercentage = 25;
    $CuttingPercentage = 50;
@endphp

<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/images/favicon.png') }}"> 
<!--CSS start-->
<link rel="stylesheet" href="{{ asset('frontend/assets/css/page-single.css') }}" />
<link rel="stylesheet" href="{{ asset('frontend/assets/css/Cabinet-Store/store-categro1.css') }}"/>
<link rel="stylesheet" href="{{ asset('frontend/assets/css/Cabinet-Store/Plonestyles6049.css') }}"/>
<link rel="stylesheet" href="{{ asset('frontend/assets/css/Cabinet-Store/rta2013.css') }}" />
<link rel="preconnect" href="https://ajax.googleapis.com">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/layout.css') }}">

<link rel="stylesheet" href="{{ asset('frontend/assets/css/Cabinet-Store/cart.css') }}" />
<!--CSS end-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700" rel="stylesheet">
<link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet" class="lazyload" charset="utf-8">


<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('frontend/headerfiles/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/headerfiles/css/owl.carousel.min.css') }}">

   
    <link rel="stylesheet" href="{{ asset('frontend/headerfiles/css/bootstrap.min.css') }}">
    
   
    <link rel="stylesheet" href="{{ asset('frontend/headerfiles/css/style.css') }}">
<style>
header{
    background: black;
position: sticky;
top: 0;

left: 0px;
}

.site-navbar{
    position: none;
}
    
.ht-menu a{
    color: #fff;
}
.pp a {
	color: #fff;
}
.minicart-button a span{
    color: white;
}
</style>



<div class="border px-5">
	<div itemscope="" itemtype="http://schema.org/Product">
        <a class="image-enlarge image-url cboxElement" title="click to enlarge kitchen image" href="#">
            <div class="img-wrap">
                <img itemprop="image" class="category-image" src="//s3.amazonaws.com/rtaproducts/category/weston-white-shaker.jpg" alt="Weston White Shaker Kitchen Cabinets" style="cursor: pointer">
            </div>
        </a>
        <div class="title-pricing">
            <h1 itemprop="name">
                {{ $productChain->pscName }}  
            </h1>
            <div class="price-10x10">
                <div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                    <!-- <meta itemprop="url" content="https://www.rtacabinetstore.com/RTA-Kitchen-Cabinets/weston-white-shaker">
                    <meta itemprop="itemCondition" itemtype="http://schema.org/OfferItemCondition" content="http://schema.org/NewCondition"> -->
                    <link itemprop="availability" href="https://schema.org/InStock">
                    <meta itemprop="priceCurrency" content="USD"> 
                    Starting at
                    <strong itemprop="priceSpecification" itemscope="" itemtype="http://schema.org/UnitPriceSpecification">
                        <strike>$<span class="price_10x10" itemprop="price" data-price10x10="2319">2319</span>
                        </strike>
                        <meta itemprop="priceCurrency" content="USD">
                    </strong>
                    <strong itemprop="priceSpecification" itemscope="" itemtype="http://schema.org/UnitPriceSpecification">
                        $<span class="price_10x10" itemprop="price" data-price10x10="1739">{{ $productChain->pscPrice }}</span>
                        <meta itemprop="priceCurrency" content="USD">
                        <meta itemprop="priceType" content="DISCOUNT">
                        <meta itemprop="validThrough" content="2022-03-12 03:00:00">
                    </strong>
                    for a basic kitchen
                    <!-- <span class="sale-text">during our
                      	<a href="https://www.rtacabinetstore.com/sale/">March Cabinet Sale</a>.
                    </span> -->
                </div>
            </div>
        </div>

        <div class="category-description">
            <span itemprop="description">
                 <p style="color:#282F29;">
                    {{ $productChain->psc_description }} 
                </p>
                <p style="
                          background: url(http://mycabinetspro.com/frontend/assets/images/Fast-shipping.png) 4px
                          6px no-repeat;
                          padding-left: 144px;margin: 16px 0 32px -32px;
                          font-size: 16px;max-width: 334px;box-sizing: content-box;">
                    <b>This cabinet line has the fastest ship time available
                      and leaves the warehouse within 3 business days!</b>
                </p>
            </span>
            <!-- <div class="assembly-intro">
                <img alt="BILT QR Code" width="92" height="92" src="http://kc.advancesols.com/frontend/assets/images/bil-qr-small.webp" style="cursor: pointer; display: block">
                <div>
                    <p>
                        Interactive 3D assembly instructions powered by BILT
                    </p>
                    <img alt="BILT Logo" width="55" height="18" src="http://kc.advancesols.com/frontend/assets/images/bilt-logo.webp" style="cursor: pointer; display: inline">
                    <a href="https://play.google.com/store/apps/details?id=com.bilt.mobile&amp;hl=en_US&amp;gl=US">
                        <img src="http://kc.advancesols.com/frontend/assets/images/google.jpg" alt="BILT on Google Play" width="75" height="22" style="cursor: pointer; display: inline">
                    </a>
                    <a href="https://apps.apple.com/us/app/bilt/id879452214">
                        <img alt="BILT on App Store" width="66" height="22" src="http://kc.advancesols.com/frontend/assets/images/app-store1.png" style="cursor: pointer; display: inline"></a>
                </div>
            </div> -->
            <p class="content-buttons">
                <a class="rta-button-flat call fkdh-start-shopping event-track" href="#item-listing" data-event_category="PDP" data-event_action="click" data-event_label="Start Shopping Now">Start Shopping Now
                    <i class="fas fa-chevron-down"></i>
                </a>
                <a class="rta-button-flat call order-sample-btn event-track nocallback" href="#page-listing" data-event_category="PDP" data-event_action="click" data-event_label="Order Sample">Order Sample</a>
            </p>
        </div>
    </div>
</div>

<div id="tabbed-content px-5" class="bg-white">
    <div class="tabs-wrapper bg-white" style=" border:none;">
        <!--<ul class="tabs">-->
        <!--    <li class="selected">-->
        <!--        <a href="?tab=features#content" id="tab-features" rel="nofollow">Features</a>-->
        <!--    </li>-->
        <!--    <li class=""></li>-->
        <!--    <li class="">-->
        <!--        <a href="?tab=gallery#content" id="tab-gallery" rel="nofollow">Gallery</a>-->
        <!--    </li>-->
        <!--    <li class="">-->
        <!--        <a href="?tab=design#content" id="tab-design" rel="nofollow">Design Ideas</a>-->
        <!--    </li>-->
        <!--    <li class="">-->
        <!--        <a href="?tab=brochure#content" id="tab-brochure" rel="nofollow">Specs<span class="nom"> &amp; Downloads</span></a>-->
        <!--    </li>-->
        <!--    <li class="">-->
        <!--        <a href="?tab=assembly#content" id="tab-assembly" rel="nofollow">Assembly<span class="nom"> Instructions</span></a>-->
        <!--    </li>-->
        <!--</ul>-->
    </div>

   <!--<div style="display: block;">-->
   <!--     <div id="features" class="tab-body">-->
   <!--        <h2>The {{ $productChain->pscName }} Line</h2>-->
   <!--         <ul class="features">-->
   <!--             <li>Full overlay doors provide a seamless aesthetic</li>-->
   <!--             <li>Soft close doors and drawers prevent slamming</li>-->
   <!--             <li>Full extension drawers ensure easy access</li>-->
   <!--             <li> Dovetail drawer craftsman construction</li>-->
   <!--             <li>Solid wood cabinet box and drawers provide exceptional durability</li>-->
   <!--             <li>-->
   <!--                Premium Sherwin-Williams® fi nish delivers a lifetime of beauty-->
   <!--             </li> -->
   <!--             <li>-->
   <!--                  Available with a full line of accessories and upgrades-->
   <!--             </li>-->
                
   <!--         </ul>-->
   <!--         <div class="visualClear"></div>-->
   <!--     </div>-->
   <!-- </div>-->

    <div style="display: none"></div>

    <div style="display: none">
        <div id="gallery" class="tab-body initial-hide" style="display: block">
            <div class="gallery-entry external-gallery" data-url="//s3.amazonaws.com/rtaproducts/gallery/weston-white-shaker/Gallery_1.jpg">
                <a href="//s3.amazonaws.com/rtaproducts/gallery/weston-white-shaker/Gallery_1.jpg">
                    <span class="gallery-entry-wrapper">
                        <img width="200" alt="" data-original="//s3.amazonaws.com/rtaproducts/gallery/weston-white-shaker/thumb/Gallery_1.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC">
                    </span>
                    <span class="gallery-entry-title">
                    </span>
                </a>
            </div>
            <div class="gallery-entry external-gallery" data-url="//s3.amazonaws.com/rtaproducts/gallery/weston-white-shaker/Gallery_10.jpg">
                <a href="//s3.amazonaws.com/rtaproducts/gallery/weston-white-shaker/Gallery_10.jpg">
                    <span class="gallery-entry-wrapper">
                        <img width="200" alt="" data-original="//s3.amazonaws.com/rtaproducts/gallery/weston-white-shaker/thumb/Gallery_10.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC">
                    </span>
                    <span class="gallery-entry-title">
                    </span>
                </a>
            </div>
            <div class="gallery-entry external-gallery" data-url="//s3.amazonaws.com/rtaproducts/gallery/weston-white-shaker/Gallery_11.jpg">
                <a href="//s3.amazonaws.com/rtaproducts/gallery/weston-white-shaker/Gallery_11.jpg">
                    <span class="gallery-entry-wrapper">
                        <img width="200" alt="" data-original="//s3.amazonaws.com/rtaproducts/gallery/weston-white-shaker/thumb/Gallery_11.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"></span>
                    <span class="gallery-entry-title"></span>
                </a>
            </div>
            <div class="gallery-entry external-gallery" data-url="//s3.amazonaws.com/rtaproducts/gallery/weston-white-shaker/Gallery_13.jpg">
                <a href="//s3.amazonaws.com/rtaproducts/gallery/weston-white-shaker/Gallery_13.jpg">
                    <span class="gallery-entry-wrapper">
                        <img width="200" alt="" data-original="//s3.amazonaws.com/rtaproducts/gallery/weston-white-shaker/thumb/Gallery_13.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"></span>
                    <span class="gallery-entry-title">
                    </span>
                </a>
            </div>
            <div class="gallery-entry external-gallery" data-url="//s3.amazonaws.com/rtaproducts/gallery/weston-white-shaker/Gallery_2.jpg">
                <a href="//s3.amazonaws.com/rtaproducts/gallery/weston-white-shaker/Gallery_2.jpg">
                    <span class="gallery-entry-wrapper">
                        <img width="200" alt="" data-original="//s3.amazonaws.com/rtaproducts/gallery/weston-white-shaker/thumb/Gallery_2.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC">
                    </span>
                    <span class="gallery-entry-title"></span>
                </a>
            </div>
            <div class="gallery-entry external-gallery" data-url="//s3.amazonaws.com/rtaproducts/gallery/weston-white-shaker/Gallery_4.jpg">
                <a href="//s3.amazonaws.com/rtaproducts/gallery/weston-white-shaker/Gallery_4.jpg">
                    <span class="gallery-entry-wrapper">
                        <img width="200" alt="" data-original="//s3.amazonaws.com/rtaproducts/gallery/weston-white-shaker/thumb/Gallery_4.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"></span>
                    <span class="gallery-entry-title"></span>
                </a>
            </div>
            <div class="gallery-entry external-gallery" data-url="//s3.amazonaws.com/rtaproducts/gallery/weston-white-shaker/Gallery_5.jpg">
                <a href="//s3.amazonaws.com/rtaproducts/gallery/weston-white-shaker/Gallery_5.jpg">
                    <span class="gallery-entry-wrapper">
                        <img width="200" alt="" data-original="//s3.amazonaws.com/rtaproducts/gallery/weston-white-shaker/thumb/Gallery_5.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC">
                        </span>
                    <span class="gallery-entry-title"></span>
                </a>
            </div>
            <div class="gallery-entry external-gallery" 	data-url="//s3.amazonaws.com/rtaproducts/	gallery/weston-white-shaker/Gallery_6.jpg"		>
                <a href="//s3.amazonaws.com/rtaproducts/gallery/weston-white-shaker/Gallery_6.jpg"><span class="gallery-entry-wrapper"><img width="200" alt="" data-original="//s3.amazonaws.com/rtaproducts/gallery/weston-white-shaker/thumb/Gallery_6.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"></span><span class="gallery-entry-title"></span></a>
            </div>
            <div class="gallery-entry external-gallery" data-url="//s3.amazonaws.com/rtaproducts/gallery/weston-white-shaker/Gallery_7.jpg">
                <a href="//s3.amazonaws.com/rtaproducts/gallery/weston-white-shaker/Gallery_7.jpg"><span class="gallery-entry-wrapper"><img width="200" alt="" data-original="//s3.amazonaws.com/rtaproducts/gallery/weston-white-shaker/thumb/Gallery_7.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"></span><span class="gallery-entry-title"></span></a>
            </div>
            <div class="gallery-entry external-gallery" data-url="//s3.amazonaws.com/rtaproducts/gallery/weston-white-shaker/Gallery_8.jpg">
                <a href="//s3.amazonaws.com/rtaproducts/gallery/weston-white-shaker/Gallery_8.jpg"><span class="gallery-entry-wrapper"><img width="200" alt="" data-original="//s3.amazonaws.com/rtaproducts/gallery/weston-white-shaker/thumb/Gallery_8.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"></span><span class="gallery-entry-title"></span></a>
            </div>
            <div class="gallery-entry external-gallery" data-url="//s3.amazonaws.com/rtaproducts/gallery/weston-white-shaker/Gallery_9.jpg">
                <a href="//s3.amazonaws.com/rtaproducts/gallery/weston-white-shaker/Gallery_9.jpg"><span class="gallery-entry-wrapper"><img width="200" alt="" data-original="//s3.amazonaws.com/rtaproducts/gallery/weston-white-shaker/thumb/Gallery_9.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"></span><span class="gallery-entry-title"></span></a>
            </div>
            <div class="visualClear"></div>
        </div>
    </div>

    <div style="display: none">
        <div id="assembly" class="tab-body initial-hide">
            <style>
                .bilt-asmb {
                    max-width: 600px;
                    padding: 30px;
                    background: #fff;
                }

                .bilt-asmb img {
                    max-width: 100%;
                    height: auto;
                }

                .bilt-asmb img + img {
                    float: right;
                    margin-top: 16px;
                }

                .bilt-asmb ul {
                    display: inline-block;
                    margin: 0 0 16px 0;
                    padding: 16px 0 0 0;
                    list-style: none;
                    font-size: 16px;
                    font-weight: bold;
                    color: #868a89;
                    text-transform: uppercase;
                }

                .bilt-asmb li {
                    margin: 10px 0;
                }

                .bilt-asmb li img {
                    margin: -1px 10px 0 0;
                }

                .bilt-asmb a {
                    margin-right: 8px;
                }

                .bilt-asmb + p {
                    max-width: 660px;
                    margin-top: 36px;
                    font-size: 16px;
                }

                @media (max-width: 650px) {
                    .bilt-asmb {
                        margin: 0 -24px;
                        padding: 16px;
                    }

                    .bilt-asmb img + img {
                        width: 128px;
                        margin-top: 24px;
                    }

                    .bilt-asmb ul {
                        font-size: 12px;
                    }

                    .bilt-asmb li {
                        margin: 6px 0;
                    }

                    #content .bilt-asmb li img {
                        width: auto;
                        height: 26px;
                    }

                    #content .bilt-asmb a img {
                        height: 25px;
                        width: auto;
                    }

                    .bilt-asmb + p {
                        margin-top: 20px;
                        font-size: 13px;
                    }
                }
            </style>
            <div class="bilt-asmb">
                <img data-original="/assets/img/page/pdp/bilt/bilt-header.png?v=1" alt="3D Interactive Assembly Instructions" width="600" height="307" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" style="cursor: pointer">
                <img data-original="/assets/img/page/pdp/bilt/bilt-qr.png" alt="BILT QR Code" width="193" height="193" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" style="cursor: pointer">
                <ul>
                    <li>
                        <img data-original="/assets/img/page/pdp/bilt/icon-download.png" alt="" width="22" height="30" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" style="cursor: pointer">
                        1. Download the app
                    </li>
                    <li>
                        <img data-original="/assets/img/page/pdp/bilt/icon-search.png" alt="" width="22" height="30" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" style="cursor: pointer">
                        2. Find your product
                    </li>
                    <li>
                        <img data-original="/assets/img/page/pdp/bilt/icon-steps.png" alt="" width="22" height="30" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" style="cursor: pointer">
                        3. Get the steps
                    </li>
                </ul>
                <br>
                <a href="https://play.google.com/store/apps/details?id=com.bilt.mobile&amp;hl=en_US&amp;gl=US"><img data-original="/assets/img/page/pdp/bilt/google-play.png" alt="BILT on Google Play" width="131" height="39" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" style="cursor: pointer"></a>
                <a href="https://apps.apple.com/us/app/bilt/id879452214"><img data-original="/assets/img/page/pdp/bilt/app-store.png" alt="BILT on App Store" width="116" height="39" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" style="cursor: pointer"></a>
            </div>
            <p>
                3D interactive instructions on the BILT app guide you
                step by step through the assembly with voice, text &amp;
                interactive animated images. Tap on a part for more
                details. Pinch to zoom in &amp; out for a better view.
                Drag to rotate the image 360°. BILT eliminates the
                frustration &amp; guesswork of paper instructions.
                Download the BILT app FREE on any mobile device.
            </p>
        </div>
    </div>

    <div style="display: none">
        <div id="design" class="tab-body initial-hide"></div>
    </div>
    <div style="display: none">
        <div id="brochure" class="tab-body initial-hide">
            <a class="price-list-download" target="_blank" download="Weston-White-Shaker-Kitchen-Cabinets-Brochure.pdf" href="/assets/html/product-management/cabinet-line-pdf/?wc_store_name=Weston White Shaker"><img data-original="//s3.amazonaws.com/rtacabinet/page/kitchen/kitchen-brochure-thumb.jpg" alt="Weston White Shaker Kitchen Cabinets Brochure" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" style="cursor: pointer">
                Download PDF Brochure</a>
            <a class="price-list-download" target="_blank" download="Weston-White-Shaker-Kitchen-Cabinets-.pdf" href="/assets/html/product-management/cabinet-line-export/pdf.php?line=Weston White Shaker Kitchen Cabinets"><img data-original="//s3.amazonaws.com/rtacabinet/page/kitchen/price-list-thumb.png" alt="Weston White Shaker Kitchen Cabinets Price List" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" style="cursor: pointer">
                Download Price List</a>
            <a class="price-list-download" target="_blank" href="//s3.amazonaws.com/rtaproducts/stain/weston-white-shaker-stain.pdf"><img data-original="//s3.amazonaws.com/rtaproducts/stain/stain-pdf-thumb.jpg" alt="Weston White Shaker Kitchen Cabinets Stain Formula" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" style="cursor: pointer">
                Stain Formula</a>

            <div class="visualClear"></div>
        </div>
    </div>
</div>


<div id="page-cart" class="item-count-0 mobile-collapsed stylecart sstt" style="display: block; position:sticky; top:96px; position: -webkit-sticky; margin:auto;">
    <!-- <div condition="categoryData">
        <div class="sidebar-sample">
            <form action="/addtoCart" method="post" class="quick-cart-form">
                <fieldset>
                <legend>Add Sample Door to Cart</legend>
                <input type="hidden" name="quantity" value="1" min="1" max="1000">
                <input type="submit" value="Add to Cart" class="event-track nocallback" data-event_category="PDP" data-event_action="click" data-event_label="Add Sample To Cart (sidebar)">

                <input type="hidden" name="id" value="SWWHITESAMPLE">
                <input type="hidden" class="cart-title" name="name" value="Easton/Weston White Shaker Sample Door">
                <input type="hidden" name="price" value="9.99">
                <input type="hidden" class="cart-model" name="sku" value="SWWHITESAMPLE">
                <input type="hidden" name="weight" value="1.0">
                <input type="hidden" name="taxable" value="1">
                <input type="hidden" name="path" value="https://www.rtacabinetstore.com/sample-doors/weston-white-sample-door/">
            </fieldset>
                <h3>Order Sample</h3>
                <span class="strike">$20</span>
                <span class="price">$9.99</span>
                <p>{{ $productChain->pscName }}</p>
            </form>
        </div>
    </div> -->

    <a class="design-help event-track" href="/assets/html/free-kitchen-design/" data-event_category="PDP" data-event_action="click" data-event_label="Sidebar Design Consult">
        <h6>
            <b>FREE</b> Professional Kitchen Design Consultation
        </h6>
        <p>
            Design Your Dream Kitchen &nbsp;<span>Learn More »</span>
        </p>
    </a>
	
    <div id="page-cart-inner" style="position: -webkit-sticky; position: sticky; top:0; z-index: 0;">
        <h3><a href="#">Your Cart</a></h3>
        @if(Auth::user() )
            <div id="miniCartSticky" class="header-cart-paste">                 
        
                       
            </div>

            <span class="mr-auto">
                <strong id=""> Qty........   </strong> <strong id="miniCartQty"></strong><br>
                <strong id=""> Subtotal...   $</strong> <strong id="miniCartTotal"> </strong>
                
           </span> 


        @endif 
        <div class="yes-bread">
            <div id="bread-checkout-btn" data-bread-default-size="true"></div>
            <span class="affirm-wrapper">
                <span class="affirm-as-low-as" data-page-type="product" data-affirm-type="text" data-amount="0"></span>
                <a class="affirm-site-modal" data-promo-id="promo_set_zero_3_6_12" aria-label="0% Financing Available!Prequalify Now - Affirm Financing (opens in modal)" style="cursor: pointer">0% Financing Available!<br>Prequalify Now</a>
                <a class="low-price cboxElement" href="//www.rtacabinetstore.com/lowest-price-guarantee/?iframe=1&amp;nol=1&amp;nos=1">Low Price Guarantee</a>
            </span>
        </div>
        <a href="{{ route('cart') }}" class="cart-view-cart">View Cart »</a>
    </div>
</div>



<div id="page-listing">
	<!--<a class="price-list-download" target="_blank"-->
	<!--   download="Weston-White-Shaker-Kitchen-Cabinets-.pdf"-->
	<!--   href="/assets/html/product-management/cabinet-line-export/pdf.php?line=Weston White Shaker Kitchen Cabinets"><i-->
	<!--        class="fa fa-file-pdf-o"></i> Download Complete Price List</a>-->
	<div id="item-listing" style="margin:20px">
		

        
<div class="text-dark font-weight-bold" style="font-size: xx-large;"> Showing {{ $major_accessories_exist_without_distinct->count() }} Products </div>

    @foreach($major_accessories_exist as $majorAccessoriesexist) 
        @foreach($major_accessories as $majorAccessories)
            @if($majorAccessories->id == $majorAccessoriesexist )
                <h3 class="category-heading heading-single-door-wall-cabinets"style="background-color:white;text-align: center;color:#0B57A5;font-weight: 900;">{{$majorAccessories->name}}
                </h3>
            @endif
        @endforeach


        <?php 
            $AccessoriesBelongsMajor =  DB::table('product_accessories')
                ->where('major_accessories_id', $majorAccessoriesexist)
                ->get();
                $AccessoriesBelongsMajor->count();
            
            if ($AccessoriesBelongsMajor->count() != 0){
        ?>

        <div class="text-success font-weight-bold">{{$AccessoriesBelongsMajor->count()}} Accessories</div>

            @foreach($AccessoriesBelongsMajor as $AccessoryBelongsMajor)
                @foreach($accessories_exist as $AccessoryExist)
                    @if($AccessoryBelongsMajor->id == $AccessoryExist )
                        <h6 class="category-heading heading-single-door-wall-cabinets"style="background-color:#0B57A5; color:white; padding-top: 15px;padding-left: 13px;">{{$AccessoryBelongsMajor->name}}</h6>  

                        @foreach($productDetails as $row)
                            @if( $majorAccessoriesexist == $row->major_accessories_id && $AccessoryExist == $row->accessories_id )  

                                <div class="block-single-door-wall-cabinets" cellspacing="2">
                                    <form action="/addtoCart" method="post" class="quick-cart-form block-item" id="block-SW5-W930-5PC">
                                        <span itemscope="" itemtype="http://schema.org/Product" class="">
                                        
                                            <div class="block-image-wrapper" >
                                                <img class="thumb-image"
                                                 data-original=""
                                                 alt="{{ $row->name }}"
                                                 src="{{ asset('uploads/products/'.$row->image) }}"
                                                 data-toggle="modal" data-target="#exampleModal" id="{{ $row->id }}" onclick="productView(this.id)"
                                                 style="cursor: pointer; display: inline; margin-top: 28px;"> </vr>
                                            </div>
                                           <div class="block-desc" style="height: 160px;">
                                                <a class="item-link" style="width: 610px;" target="_blank" href="#">
                                                    <span>{{ $row->short_description }}</span>
                                                </a>
                                                <span class="model" itemprop="sku mpn">{{ $row->name }}</span>
                                                <span class="oos-test-original"></span>
                                                 <div class="no-stock oos-test-variant"> class="return-date">Expected Return: 03/25/22                              <a class="stock-notify" target="_blank"itle="Notify me when this product is back in stock"ref="#">notify me</a></p>p class="no-quick-ship">Not currently available for Quick Ship</p>
                                                </div>
                                                <p class="quick-checkout-prod-desc"
                                                   itemprop="description">{{ $row->description }}
                                               </p>
                                            </div>
                                            <div class="block-order" style="height: 160px;" itemprop="offers" itemscope=""
                                                 itemtype="http://schema.org/Offer">
                                                <fieldset>
                                                    <legend>Add Weston White Shaker Single Door Wall Cabinet - 9"W x 30"H to Cart</legend>

                                                    <strike>$ {{  ($row->price * $CuttingPercentage/100) + ($row->price) }}</strike>
                                                    <!-- <span class="price">${{ $row->price}} </span> -->
                                                    <span class="price">$ {{  ($row->price * $CustomerPercentage/100) + ($row->price) }} </span>
                                                    <br>
                                                   <!--  <input type="number" size="4" class="cart-quantity center"
                                                           name="quantity" value="1" min="1" max="1000"
                                                           title="Quantity for SW5-W930-5PC"> -->

                                                    <input type="hidden" id="slugId" name="slugId" value="{{$row->slug}}">
                                                    <!-- <a type="button" id="addToCart"  onclick=""
                                                       >Add to Cart »</a> -->
                                                       <!-- <a type="button" id="addToCart" style="color:black;" href="{{
                                                       route ('addProductToCart', $row->slug )}}" 
                                                       >Add to Cart »</a> -->

                                                       @if(Auth::user())

                                                       <a type="button"  style="color:white; background-color:#2A7BA7;padding: 6px;" data-toggle="modal" data-target="#exampleModal" id="{{ $row->id }}" onclick="productView(this.id)" 
                                                       >Add to Cart »</a>

                                                       @else

                                                       <a href="{{ route('login') }}" type="button" style="color:white; background-color:#2A7BA7;padding: 6px;"> Add to Cart »</a>


                                                       @endif

                                                       <!-- <button type="button" class="btn btn-dark">Add to Cart »</button> -->
                                                </fieldset>
                                            </div>
                                        </span>
                                    </form>  
                                </div>


                                
                            @endif
                        @endforeach
                    @endif
                @endforeach 
                
            @endforeach
        <?php } else{ ?>
                @foreach($productDetails as $row)
                            @if( $majorAccessoriesexist == $row->major_accessories_id)  

                                <div class="block-single-door-wall-cabinets" cellspacing="2">
                                    <form action="/addtoCart" method="post" class="quick-cart-form block-item" id="block-SW5-W930-5PC">
                                        <span itemscope="" itemtype="http://schema.org/Product" class="">
                                        
                                            <div class="block-image-wrapper" style="border-right: 1px solid #ddd;">
                                                <img class="thumb-image"
                                                 data-original=""
                                                 alt="{{ $row->name }}"
                                                 src="{{ asset('uploads/products/'.$row->image) }}"
                                                 style="cursor: pointer; display: inline; margin-top: 28px;"> </vr>
                                            </div>
                                            <div class="block-desc">
                                                <a class="item-link" target="_blank" href="#">
                                                    <span>{{ $row->short_description }}</span>
                                                </a>
                                                <span class="model" itemprop="sku mpn">{{ $row->name }}</span>
                                                <span class="oos-test-original"></span>
                                                 <div class="no-stock oos-test-variant"> class="return-date">Expected Return: 03/25/22                              <a class="stock-notify" target="_blank"itle="Notify me when this product is back in stock"ref="#">notify me</a></p>p class="no-quick-ship">Not currently available for Quick Ship</p>
                                                </div>
                                                <p class="quick-checkout-prod-desc"
                                                   itemprop="description">{{ $row->description }}
                                               </p>
                                            </div>
                                            <div class="block-order" itemprop="offers" itemscope=""
                                                 itemtype="http://schema.org/Offer">
                                                <fieldset>
                                                    <legend>Add Weston White Shaker Single Door Wall Cabinet - 9"W x 30"H to Cart</legend>
                                                    <strike>$ {{  ($row->price * $CuttingPercentage/100) + ($row->price) }}</strike>
                                                    <span class="price">${{ $row->price}} </span>
                                                    <span class="price">$ {{  ($row->price * $CustomerPercentage/100) + ($row->price) }} </span>
                                                    <!-- <input type="number" size="4" class="cart-quantity center"
                                                           name="quantity" value="1" min="1" max="1000"
                                                           title="Quantity for SW5-W930-5PC"> -->

                                                    <input type="hidden" id="slugId" name="slugId" value="{{$row->slug}}">
                                                    <!-- <a type="button" id="addToCart"  onclick=""
                                                       >Add to Cart »</a> -->
                                                       <!-- <a type="button" id="addToCart" style="color:black;" href="{{
                                                       route ('addProductToCart', $row->slug )}}" 
                                                       >Add to Cart »</a> -->

                                                       @if(Auth::user()) 

                                                       <a type="button"  style="color:white; background-color:#2A7BA7;padding: 6px;" data-toggle="modal" data-target="#exampleModal" id="{{ $row->id }}" onclick="productView(this.id)" 
                                                       >Add to Cart »</a>

                                                       @else

                                                       <a href="{{ route('login') }}" type="button" style="color:white; background-color:#2A7BA7;padding: 6px;"> Add to Cart »</a>


                                                       @endif



                                                       <!-- <button type="button" class="btn btn-dark">Add to Cart »</button> -->
                                                </fieldset>
                                            </div>
                                        </span>
                                    </form>  
                                </div>
                            @endif
                        @endforeach
        <?php } ?>
    @endforeach


        
        
	</div>
</div>



<!-- <script src="{{ asset('frontend/headerfiles/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('frontend/headerfiles/js/popper.min.js')}}"></script>
    <script src="{{ asset('frontend/headerfiles/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('frontend/headerfiles/js/jquery.sticky.js')}}"></script>
    <script src="{{ asset('frontend/headerfiles/js/main.js')}}"></script> -->





@endsection