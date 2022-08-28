@extends('layouts.admin')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header"></section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h3 class="card-title">Shipping Orders Details</h3>
                                </div>
                                <!-- <div class="col-sm-6 text-right">
                                    <a href="{{ route ('product.create') }}" class="btn btn-primary btn-sm">Add New Product</a>
                                </div> -->
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="dataTable" class="table table-bordered table-hover">
                                <thead>
	                                <tr>
	                                    <th>Customer Email</th>
	                                    <th>Address</th>
	                                    <th>Zipcode</th>
	                                    <th>Phone #</th>
                                        <th>Order Total</th>
                                        <th>Order Id</th>
	                                    <th>Invoice #</th>
                                        <th>Order Date</th>
                                        <th>Action</th>
	                                </tr>
                                </thead>
                                <tbody>
                                	@foreach($shippingOrders as $row)
                                	<tr>
	                                    <td> {{ $row->user_email }} </td>
                                        <td> {{ $row->address }} </td>
                                        <td> {{ $row->zipcode }} </td>
	                                    <td> {{ $row->phoneNumber }} </td>
                                        <td> ${{ $row->order_total }} </td>
                                        <td> {{ $row->order_id }} </td>
                                        <td> {{ $row->invoice_no }} </td>
                                        <td> {{ $row->order_date }} </td>
	                                    <td>
	                                    	<!-- <a href="{{ route ('order-details.edit', 		 	$row->id ) }}" class="btn btn-sm btn-link">
											    <i class="fa fa-edit"></i>
											</a> -->
											<!-- <a href="{{ route ('order-details.accept', 		$row->id)}}" class="btn btn-sm btn-link">
											    <i class="fa fa-eye"></i>Accept
											</a> -->
											<a href="{{ route ('order-details.delivered', 		$row->id)}}" class="btn btn-sm btn-link">
											    <!-- <i class="fa fa-eye"></i> -->Delivered
											</a>
											<a href="{{ route ('order-details.show', 		$row->id)}}" class="btn btn-sm btn-link">
											    <i class="fa fa-eye">view</i>
											</a>
                                            <!-- <form class="d-inline" method="POST" action="{{ route ('order-details.destroy', $row->id ) }}" accept-charset="UTF-8">
                                                @method('DELETE')
                                                @csrf
    											
                                                <button type="submit" class="btn btn-sm btn-link"><span class="fa fa-trash"></span> </button>
                                            </form> -->
										</td>
									</tr>
	                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->


@endsection


