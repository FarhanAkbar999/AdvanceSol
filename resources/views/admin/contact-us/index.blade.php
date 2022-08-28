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
                                    <h3 class="card-title">Contact Us</h3>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <!-- <a href="{{ route ('contact-us.create') }}" class="btn btn-primary btn-sm">Create New Product Category</a> -->
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="dataTable" class="table table-bordered table-hover">
                                <thead>
	                                <tr>
	                                    <th>Name</th>
	                                    <th>Email</th>
	                                    <th>Zip Code</th>
	                                    <th>Subject</th>
	                                    <th>Message</th>
	                                    <th>Action</th>
	                                </tr>
                                </thead>
                                <tbody>
                                	@foreach($contactUs as $row)
                                	<tr>
	                                    <td>{{ $row->name }}</td>
	                                    <td>{{ $row->email }}</td>
	                                    <td>{{ $row->zipcode }}</td>
	                                    <td>{{ $row->subject }}</td>
	                                    <td>{{ $row->message }}</td>
	                                    <td><!-- <a href="{{ route('contact-us.edit', 		$row->id ) }}" class="btn 				btn-sm btn-link">
											    <i class="fa fa-edit"></i>
											</a> -->
											<a href="{{ route('contact-us.show', 	$row->id)}}" class="btn btn-sm 		btn-link">
											    <i class="fa fa-eye"></i>
											</a>
                                            <form class="d-inline" method="POST" action="{{ route ('contact-us.destroy', $row->id ) }}" accept-charset="UTF-8">
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


