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
                                    <h3 class="card-title">Product</h3>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <a href="{{ route ('product.index') }}" class="btn btn-primary btn-sm">Back</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form method="POST" action="{{ route ('product.store') }}" accept-charset="UTF-8" enctype="multipart/form-data">
                        		@csrf
                                <div class="row">
								    <div class="col-sm-4">
								        <div class="form-group">
								            <label for="category_id">Category</label>
								            <select id="category_id" class="form-control" name="category_id">
								            	<option disabled="" selected="">--Select Category--</option>
								            	@foreach($productCategory as $row) 
									            <option value="{{ $row->id }}">	{{ $row->name }}
									            </option>
								            	@endforeach
								            </select>
					                    </div>
								    </div>
								    <div class="col-sm-4">
								        <div class="form-group">
								            <label for="sub_category_id">Subcategory</label>
								            <select id="sub_category_id" class="form-control" name="sub_category_id">
								            	<option disabled="" selected="">--Select Subcategory--</option>
								            	@foreach($productSubcategory as $row) 
									            <option value="{{ $row->id }}">{{ 		$row->pscName }}
									            </option>
								            	@endforeach
								            </select>
					                    </div>
								    </div>
								    <div class="col-sm-4">
								        <div class="form-group">
								            <label for="accessories_id">Accessories </label>
								            <select id="accessories_id" class="form-control" name="accessories_id">
								            	<option disabled="" selected="">--Select Accessories--</option>
								            	@foreach($productAccessories as $row) 
									            <option value="{{ $row->id }}">{{ 		$row->name }}
									            </option>
								            	@endforeach
								            </select>
					                    </div>
								    </div>
								    <div class="col-sm-6">
								        <div class="form-group">
								            <label for="name">Name</label>
								            <input id="name" class="form-control" name="name" value="" type="text">
					                    </div>
								    </div>
								    <div class="col-sm-6">
								        <div class="form-group">
								            <label for="price">Unit Price</label>
								            <input id="price" class="form-control" name="price" value="" type="number" min="0">
					                    </div>
								    </div>
								    <div class="col-sm-6">
								        <div class="form-group">
								            <label for="short_description">Short Description</label>
								            <textarea id="short_description" class="form-control" name="short_description" cols="50" rows="3"></textarea>
					                    </div>
								    </div>
								    <div class="col-sm-6">
								        <div class="form-group">
								            <label for="description">Description</label>
								            <textarea id="description" class="form-control" name="description" cols="50" rows="3"></textarea>
					                    </div>
								    </div>
								    <div class="col-sm-6">
								        <div class="form-group">
								            <label for="image ">Upload Product Image</label>
								            <input id="image" class="form-control fileinput" name="image" type="file">
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