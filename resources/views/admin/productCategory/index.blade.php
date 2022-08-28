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
                                    <h3 class="card-title">Product Categories</h3>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <a href="{{ route ('product-categories.create') }}" class="btn btn-primary btn-sm">Create New Product Category</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="dataTable" class="table table-bordered table-hover">
                                <thead>
	                                <tr>
	                                    <th>Name</th>
	                                    <th>Details</th>
	                                    <th>Created</th>
	                                    <!-- <th>Status</th> -->
	                                    <th>Action</th>
	                                </tr>
                                </thead>
                                <tbody>
                                	@foreach($categories as $row)
                                	<tr>
	                                    <td>{{ $row->name }}</td>
	                                    <td>{{ $row->details }}</td>
	                                    <td>{{ $row->created_at }}</td>
	                                    <!-- <th>Status</th> -->
	                                    <td><a href="{{ route ('product-categories.edit', 			$row->slug ) }}" class="btn btn-sm btn-link">
											    <i class="fa fa-edit"></i>
											</a>
											<a href="{{ route ('product-categories.show', 		$row->slug)}}" class="btn btn-sm btn-link">
											    <i class="fa fa-eye"></i>
											</a>
                                            <form class="d-inline" method="POST" action="{{ route ('product-categories.destroy', $row->slug ) }}" accept-charset="UTF-8">
                                                @method('DELETE')
                                                @csrf
    											<!-- <a class="btn btn-sm btn-link" href="{{ route 			('product-categories.destroy',$row->slug)}}" 		onclick= " return confirm('Are you sure you want to delete')"><span class="fa fa-trash">		</span> 
    											</a> -->
                                                <button type="submit" class="btn btn-sm btn-link"><span class="fa fa-trash"></span> </button>
                                            </form>
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


