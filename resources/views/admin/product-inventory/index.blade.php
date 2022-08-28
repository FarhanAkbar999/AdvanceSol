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
                                    <h3 class="card-title">Products Inventory</h3>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <a href="{{ route ('product-inventory.create') }}" class="btn btn-primary btn-sm">Add Inventory</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="dataTable" class="table table-bordered table-hover">
                                <thead>
	                                <tr>
	                                    <th>Product Id</th>
	                                    <th>color_id</th>
	                                    <th>size_id</th>
	                                    <th>quantity</th>
                                        <th>totalSold</th>
                                        <th>totalRemaining</th>
	                                    <th>purchase_price</th>
                                        <th>sell_price</th>
                                        <th>notes</th>
                                        <th>createdBy</th>
                                        <th>Action</th>
	                                </tr>
                                </thead>
                                <tbody>
                                	
                                	<tr>
	                                    <td>Product Id</td>
	                                    <td>color_id</td>
	                                    <td>size_id</td>
	                                    <td>quantity</td>
                                        <td>totalSold</td>
                                        <td>totalRemaining</td>
	                                    <td>purchase_price</td>
                                        <td>sell_price</td>
                                        <td>notes</td>
                                        <td>createdBy</td>

                                        
	                                    <td><a href="{{ route ('product-inventory.index') }}" class="btn btn-sm btn-link">
											    <i class="fa fa-edit"></i>
											</a>
											<!-- <a href="{{ route ('product-inventory.index')}}" class="btn btn-sm btn-link">
											    <i class="fa fa-eye"></i>
											</a> -->
                                            <form class="d-inline" method="POST" action="{{ route ('product-inventory.index' ) }}" accept-charset="UTF-8">
                                                @method('DELETE')
                                                @csrf
    											
                                                <button type="submit" class="btn btn-sm btn-link"><span class="fa fa-trash"></span> </button>
                                            </form>
										</td>
									</tr>
	                                
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