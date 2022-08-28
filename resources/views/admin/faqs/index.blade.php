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
                                    <h3 class="card-title">Faqs</h3>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <a href="{{ route ('faqs.create') }}" class="btn btn-primary btn-sm">Create New Product Category</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="dataTable" class="table table-bordered table-hover">
                                <thead>
	                                <tr>
	                                    <th>Category</th>
	                                    <th>Question</th>
	                                    <th>Answer</th>
	                                    <th>Action</th>
	                                </tr>
                                </thead>
                                <tbody>
                                	@foreach($faqs as $row)
                                	<tr>
	                                    <td>{{ $row->name }}</td>
	                                    <td>{{ $row->question }}</td>
	                                    <td>{{ $row->answer }}</td>
	                                    <!-- <th>Status</th> -->
	                                    <td><a href="{{ route ('faqs.edit', 			$row->id ) }}" class="btn btn-sm btn-link">
											    <i class="fa fa-edit"></i>
											</a>
											<a href="{{ route ('faqs.show', 		$row->id)}}" class="btn btn-sm btn-link">
											    <i class="fa fa-eye"></i>
											</a>
                                            <form class="d-inline" method="POST" action="{{ route ('faqs.destroy', $row->id ) }}" accept-charset="UTF-8">
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


