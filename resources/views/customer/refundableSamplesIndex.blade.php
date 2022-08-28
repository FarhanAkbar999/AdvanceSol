@extends('layouts.customer')

@section('content')
<style>
    .lines { display: flex;flex-wrap: wrap;margin: 0 -1vw;}

    .rta-kitchen-cabinets-wrapper .line { position: relative;width: calc(22% - 1.5vw);margin: .75vw;padding: 0 20px 16px 20px;border: 4px solid #E3E3E3;border-radius: 12px;overflow: hidden;}
    .rta-kitchen-cabinets-wrapper .line .img-wrapper { display: block;height: 235px;overflow: hidden;margin:0  -20px;text-align: center;box-shadow: inset 0 -4px 12px -8px #888;}
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
                            <li class="active">Rta Refundables Samples</li>
                        </ul>
                    </div>
                </div>
            </div>
            <h1 class="text-center" style="margin: 20px;">RTA Refundables Samples</h1>
            <!-- Li's Breadcrumb Area End Here -->
            <!-- Begin Li's Content Wraper Area -->
            <div class="content-wraper pb-60 pt-sm-30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 order-1 order-lg-2">
                            <!-- <div class="row d-flex justify-content-center"> -->
                                <div class="lines rta-kitchen-cabinets-wrapper d-flex justify-content-center"> 
                                    
                                    @foreach($refunableSamples as $row)
                                        <div class="line room-kitchen discount discount-25">
                                            <a class="img-wrapper" href="#">
                                                <span>
                                                    <img src="{{ asset('uploads/productSubCategory/'.$row->image) }}"
                                                         alt="{{ $row->image }}" style=" width: 37%; margin-top: 1px;">
                                                </span>

                                            </a>
                                            <!-- <ul class="features">
                                                <li class="best">Best Seller</li>
                                                <li class="quick-ship">Quick Ship</li>
                                            </ul> -->
                                            <h2>{{ $row->pscName }}</h2>

                                            <p class="product-price">     <!-- Basic Kitchen Starting at
                                            <span class="strike">$2319</span>&nbsp;-->
                                                <strong> 
                                                ${{  $row->price }}</strong>
                                            </p>

                                            <!-- <a class="button shop" href="{{ route('productDetails', $row->slug ) }}">Shop Vanities</a> -->

                                            <!-- <a class="button order-sample" style="color:white;" href="{{ route('addToCart', $row->slug )}}">Add to Cart </a> -->
                                            <a type="button"  style="color:white; background-color:#2A7BA7;padding: 6px;" data-toggle="modal" data-target="#exampleModal" id="{{ $row->id }}" onclick="productView(this.id)" 
                                                   >Add to Cart »</a>
                                        </div>
                                    @endforeach                
                                </div>
                            </div>
                        </div>                        
                    <!-- </div> -->
                </div>
            </div>
            <!-- Begin Footer Area -->
<!-- new frontend design end -->

    
@endsection
