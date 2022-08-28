@extends('layouts.customer')
@section('content')
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active">Tracking</li>
            </ul>
        </div>
    </div>
</div>

<h2 class="text-center" style="margin: 20px;"><b>Order Tracking</b></h2>

<div class="about-us-wrapper pt-60 pb-40">
    <div class="container" >




        	<!-- <div class="progress">
			  <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
			  <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
			  <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
			</div> -->
        	
        	@if($orderStatus->status == 0)
	        	<div class="progress">
		        	<div class="progress-bar bg-warning" role="progressbar" style="width: 33%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" ></div>In Review
		        </div><br><br>

	        	<span>your order # <b>{{ $orderStatus->invoice_no }}</b> is <b>In Review</b></span>

        	@elseif($orderStatus->status == 1)
	        	<div class="progress">
	        		<div class="progress-bar bg-warning" role="progressbar" style="width: 33%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
				  	<div class="progress-bar bg-success" role="progressbar" style="width: 33%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>Sent for shipping
			  	</div><br><br>

	        	<span>your order # <b>{{ $orderStatus->invoice_no }}</b> is <b>Sent for shipping.</b></span>

        	@elseif($orderStatus->status == 2)
        		<div class="progress">
	        		<div class="progress-bar bg-warning" role="progressbar" style="width: 33%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
				  	<div class="progress-bar bg-success" role="progressbar" style="width: 33%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
				  	<div class="progress-bar bg-info" role="progressbar" style="width: 34%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>Delivered
			  	</div><br><br>

	        	<span>your order # <b>{{ $orderStatus->invoice_no }}</b> is <b>Delivered </b>to your Shipping Address.</span>

        	@elseif($orderStatus->status == 3)

        		<div class="progress">
	        		
				  	<div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>Canceled
			  	</div><br><br>

	        	<span>your order # <b>{{ $orderStatus->invoice_no }}</b> is <b>Canceled </b>.</span>

	        @else

	        <span> <b>your order #  is Invalid </b> </span>
        	
        	@endif



        


    	
    </div>
</div>


@endsection