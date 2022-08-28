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
                                    <h3 class="card-title">Product SubCategory</h3>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <a href="{{ route ('product-subcategories.create') }}" class="btn btn-primary btn-sm">Create New Product SubCategory</a>
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
	                                    <th>Category</th>
	                                    <th>Distributer</th>
	                                    <th>Action</th> 
	                                </tr>
                                </thead>
                                <tbody>
                                	@foreach($subcategories as $row)
                                	<tr>
	                                    <td>{{ $row->pscName }}</td>
	                                    <td>{{ $row->pscDetails }}</td>
	                                    <td>{{ $row->name }}</td>
	                                    <td>{{ $row->distributer_name }}</td>
	                                    <!-- <th>Status</th> -->
	                                    <td><a href="{{ route ('product-subcategories.edit', 	$row->pscSlug ) }}" class="btn btn-sm btn-link">
											    <i class="fa fa-edit"></i>
											</a>
											<!-- <a href="{{ route ('product-subcategories.show', 		$row->pscSlug)}}" class="btn btn-sm btn-link">
											    <i class="fa fa-eye"></i>
											</a> -->
											<form class="d-inline" method="POST" action="{{ route ('product-subcategories.destroy', $row->pscSlug ) }}" accept-charset="UTF-8">
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


