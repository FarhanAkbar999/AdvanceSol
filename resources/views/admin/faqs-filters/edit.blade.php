@extends('layouts.admin')

@section('content')
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
                                    <a href="{{ route ('faqs-filters.index') }}" class="btn btn-primary btn-sm">Back</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form method="POST" action="{{ route ('faqs-filters.update',  $faqsFilters->slug ) }}" accept-charset="UTF-8" enctype="multipart/form-data">
                            	@method('PUT')
                        		@csrf
                                <div class="row">
								    <div class="col-sm-4">
								        <div class="form-group">
								            <label for="name">Name</label>
								            <input id="name" class="form-control" name="name" type="text" value="{{ $faqsFilters->name }}">
					                    </div>
					                </div>

					                <div class="col-sm-12">
								        <div class="form-group">
								            <button type="submit" class="btn btn-success">Save</button>
								        </div>
								    </div>
								</div>
                            </form>
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