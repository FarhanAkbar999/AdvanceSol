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
                                    <h3 class="card-title">Product</h3>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <a href="{{ route ('product.create') }}" class="btn btn-primary btn-sm">Add New Product</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="dataTable" class="table table-bordered table-hover">
                                <thead>
	                                <tr>
	                                    <th>Name</th>
	                                    <th>Category</th>
	                                    <th>Subcategory</th>
	                                    <th>Accessories</th>
                                        <th>price</th>
                                        <th>short_description</th>
	                                    <th>description</th>
                                        <th>Created By</th>
                                        <th>Action</th>
	                                </tr>
                                </thead>
                                <tbody>
                                	@foreach($products as $row)
                                	<tr>
	                                    <td>{{ $row->name }}</td>

                                        @foreach($productCategory as $row1)      @if($row->category_id == $row1->id)
                                            <td>  {{ $row1->name }} </td>
                                        @endif
                                        @endforeach

                                        @foreach($productSubcategory as $row1)
                                            @if($row->sub_category_id == $row1->id)
                                              <td>  {{ $row1->pscName }} </td>
                                            @endif
                                        @endforeach
	                                    
	                                    <td>
                                            @foreach($productAccessories as $row1)
                                                @if($row->accessories_id == $row1->id)
                                                    {{ $row1->name }} 
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>${{ $row->price }}</td>
                                        <td>{{ $row->short_description }}</td>
                                        <td>{{ $row->description }}</td>
                                        <td>
                                            @foreach($users as $row1)
                                                @if($row->createdBy == $row1->id)
                                                    {{ $row1->name }} 
                                                @endif
                                            @endforeach
                                        </td>
	                                    <td><a href="{{ route ('product.edit', 			$row->slug ) }}" class="btn btn-sm btn-link">
											    <i class="fa fa-edit"></i>
											</a>
											<!-- <a href="{{ route ('product.show', 		$row->slug)}}" class="btn btn-sm btn-link">
											    <i class="fa fa-eye"></i>
											</a> -->
                                            <form class="d-inline" method="POST" action="{{ route ('product.destroy', $row->slug ) }}" accept-charset="UTF-8">
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


