@extends('layouts.customer')

@section('content')
	
	@foreach($searchResult as $row)

	<strong>{{ $row->short_description }}</strong><br>




	@endforeach









@endsection