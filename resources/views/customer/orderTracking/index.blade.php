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

<div class="about-us-wrapper pt-60 pb-40">
    <div class="container">
        <div class="row d-flex justify-content-center">
        	<form action="{{ route('track.now') }}" method="post">
        		@csrf

			  	<div class="form-group">
			    	<label for="exampleInputPassword1">Order Tracking #</label>
			    	<input type="text" class="form-control" name="trackingId" >
			  	</div>
			  	
			  	<button type="submit" class="btn btn-success btn-sm float-right">Continue</button>
			</form>
    	</div>
    </div>
</div>


@endsection