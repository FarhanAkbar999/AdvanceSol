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
                                    <h3 class="card-title">Product Size</h3>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <a href="{{ route ('product-sizes.create') }}" class="btn btn-primary btn-sm">Add New Product Size</a>
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
	                                    <th>Action</th>
	                                </tr>
                                </thead>
                                <tbody>
                                	@foreach($productSize as $row)
                                	<tr>
	                                    <td>{{ $row->name  }}</td>
	                                    <td>{{ $row->details }}</td>
	                                    <td><a href="{{ route ('product-sizes.edit', $row->slug  ) }}" class="btn btn-sm btn-link">
											    <i class="fa fa-edit"></i>
											</a>
											<!-- <a href="{{ route ('product-sizes.show', 		$row->slug )}}" class="btn btn-sm btn-link">
											    <i class="fa fa-eye"></i>
											</a> -->
											<form class="d-inline" method="POST" action="{{ route ('product-sizes.destroy', $row->slug  ) }}" accept-charset="UTF-8">
                                                @method('DELETE')
                                                @csrf
    											
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


