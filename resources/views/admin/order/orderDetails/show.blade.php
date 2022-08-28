@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header"></section>
<section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h3 class="card-title">Order Details</h3>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <a href="{{ route ('order-details.index') }}" class="btn btn-primary btn-sm">Back</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="dataTable" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Short Desc</th>
                                        <th>qty</th>
                                        <th>unit_price</th>
                                        <th>subtotal_price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($orderItems as $row)
                                    <tr>
                                        <td> {{ $row->name }} </td>
                                        <td> {{ $row->short_description }} </td>
                                        <td> {{ $row->qty }} </td>
                                        <td> {{ $row->unit_price }} </td>
                                        <td> ${{ $row->subtotal_price }} </td>
                                        
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </div>
            </div>




            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h3 class="card-title">Customer Details</h3>
                                </div>
                                
                            </div>
                        </div>
                    <!-- /.card-header -->
                        <div class="card-body d-flex flex-row row">
                            <div class="form-group col-md-6">
                                <strong>Customer Email: </strong>{{ $orders->user_email }}
                            </div>
                            <div class="form-group col-md-6">
                                <strong>Country Name: </strong>{{ $orders->countryName }}
                            </div>
                            <div class="form-group col-md-6">
                                <strong>First Name: </strong>{{ $orders->firstName }}
                            </div>
                            <div class="form-group col-md-6">
                                <strong>Last Name: </strong>{{ $orders->lastName }}
                            </div>
                            <div class="form-group col-md-6">
                                <strong>Company Name: </strong>{{ $orders->companyName }}
                            </div>
                            <div class="form-group col-md-6">
                                <strong>Address: </strong>{{ $orders->address }}
                            </div>
                            <div class="form-group col-md-6">
                                <strong>City: </strong>{{ $orders->city }}
                            </div>
                            <div class="form-group col-md-6">
                                <strong>State: </strong>{{ $orders->State }}
                            </div>
                            <div class="form-group col-md-6">
                                <strong>Zipcode: </strong>{{ $orders->zipcode }}
                            </div>
                            <div class="form-group col-md-6">
                                <strong>Phone Number: </strong>{{ $orders->phoneNumber }}
                            </div>
                            <div class="form-group col-md-6">
                                <strong>Role: </strong>{{ $orders->role }}
                            </div>
                            <div class="form-group col-md-6">
                                <strong>Industry: </strong>{{ $orders->industry }}
                            </div>
                            <div class="form-group col-md-6">
                                <strong>Sub-Industry: </strong>{{ $orders->subIndustry }}
                            </div>
                            <div class="form-group col-md-6">
                                <strong>Federal Tax Id: </strong>{{ $orders->federal_tax_id }}
                            </div>
                            <div class="form-group col-md-6">
                                <strong>Contractor License #: </strong>{{ $orders->contractor_license_no }}
                            </div>
                            <div class="form-group col-md-6">
                                <strong>No License Reason: </strong>{{ $orders->no_license_reason }}
                            </div>
                            <div class="form-group col-md-6">
                                <strong>Order Total: </strong>{{ $orders->order_total }}
                            </div>
                            <div class="form-group col-md-6">
                                <strong>Payment Method: </strong>{{ $orders->payment_method }}
                            </div>
                            <div class="form-group col-md-6">
                                <strong>Transaction Id: </strong>{{ $orders->transaction_id }}
                            </div>
                            <div class="form-group col-md-6">
                                <strong>Currency: </strong>{{ $orders->currency }}
                            </div>
                            <div class="form-group col-md-6">
                                <strong>Order Id: </strong>{{ $orders->order_id }}
                            </div>
                            <div class="form-group col-md-6">
                                <strong>Invoice #: </strong>{{ $orders->invoice_no }}
                            </div>
                            <div class="form-group col-md-6">
                                <strong>Order Date: </strong>{{ $orders->order_date }}
                            </div>
                            <div class="form-group col-md-6">
                                <strong>Order Month: </strong>{{ $orders->order_month }}
                            </div>
                            <div class="form-group col-md-6">
                                <strong>Order Year: </strong>{{ $orders->order_year }}
                            </div>
                            <div class="form-group col-md-6">
                                <strong>Confirmed Date: </strong>{{ $orders->confirmed_date }}
                            </div>
                            <!-- <div class="form-group col-md-6">
                                <strong>Processing Date: </strong>{{ $orders->processing_date }}
                            </div>
                            <div class="form-group">
                                <strong>Picked Date: </strong>{{ $orders->picked_date }}
                            </div> -->
                            <!-- <div class="form-group col-md-6">
                                <strong>Shipped Date: </strong>{{ $orders->shipped_date }}
                            </div> -->
                            <div class="form-group col-md-6">
                                <strong>Delivered Date: </strong>{{ $orders->delivered_date }}
                            </div>
                            <div class="form-group col-md-6">
                                <strong>Cancel Date: </strong>{{ $orders->cancel_date }}
                            </div>
                            <div class="form-group col-md-6">
                                <strong>Return Date: </strong>{{ $orders->return_date }}
                            </div>
                            <div class="form-group col-md-6">
                                <strong>Return Reason: </strong>{{ $orders->return_reason }}
                            </div>
                            <div class="form-group col-md-6">
                                <strong>Status: </strong><!-- {{ $orders->status }} -->
                                    @if($orders->status == 0)
                                        <span>In Review</span>
                                    @elseif($orders->status == 1)
                                        <span>Sent for shipping.</span>

                                    @elseif($orders->status == 2)
                                        <span>Delivered </span>

                                    @elseif($orders->status == 3)
                                        <span>Canceled </span>
                                    @else
                                        <span>order #  is Invalid </span>            
                                    @endif

                            </div>
                            <div class="form-group col-md-6">
                                <strong>Created_at: </strong>{{ $orders->created_at }}
                            </div>
                            <div class="form-group col-md-6">
                                <strong>Updated_at: </strong>{{ $orders->updated_at }}
                            </div>
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
@endsection
