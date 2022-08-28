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
                            <form method="POST" action="{{ route ('product.update',  $products->slug ) }}" accept-charset="UTF-8" enctype="multipart/form-data">
                            	@method('PUT')
                        		@csrf
                                <div class="row">
								    <div class="col-sm-4">
								        <div class="form-group">
								            <label for="category_id">Category</label>
								            <select id="category_id" class="form-control" name="category_id">
								            	<option disabled="" selected="">--Select Category--</option>
								            	@foreach($productCategory as $row) 
									            	<option value="{{ $row->id }}" <?php if($products->category_id == $row->id){ echo "selected";} ?>>{{ $row->name }}
									            	</option>
								            	@endforeach
								            </select>
					                    </div>
								    </div>
								    <div class="col-sm-4">
								        <div class="form-group">
								            <label for="sub_category_id">Subcategory</label>
								            <select id="sub_category_id" class="form-control" name="sub_category_id">
								            	<option disabled="" selected="">--Select Category--</option>
								            	@foreach($productSubcategory as $row) 
									            	<option value="{{ $row->id }}" <?php if($products->sub_category_id == $row->id){ echo "selected";} ?>>{{ $row->pscName }}
									            	</option>
								            	@endforeach
								            </select>
					                    </div>
								    </div>
								    <div class="col-sm-4">
								        <div class="form-group">
								            <label for="accessories_id">Accessories </label>
								            <select id="accessories_id" class="form-control" name="accessories_id">
								            	<option disabled="" selected="">--Select Category--</option>
								            	@foreach($productAccessories as $row) 
									            	<option value="{{ $row->id }}" <?php if($products->accessories_id == $row->id){ echo "selected";} ?>>{{ $row->name }}
									            	</option>
								            	@endforeach
								            </select>
					                    </div>
								    </div>
								    <div class="col-sm-6">
								        <div class="form-group">
								            <label for="name">Name</label>
								            <input id="name" class="form-control" name="name" value="{{ $products->name }}" type="text">
					                    </div>
								    </div>
								    <div class="col-sm-6">
								        <div class="form-group">
								            <label for="price">Unit Price</label>
								            <input id="price" class="form-control" name="price" value="${{ $products->price }}" type="number" min="0">
					                    </div>
								    </div>
								    <div class="col-sm-6">
								        <div class="form-group">
								            <label for="short_description">Short Description</label>
								            <textarea id="short_description" class="form-control" name="short_description" cols="50" rows="3">{{ $products->short_description }}</textarea>
					                    </div>
								    </div>
								    <div class="col-sm-6">
								        <div class="form-group">
								            <label for="description">Description</label>
								            <textarea id="description" class="form-control" name="description" cols="50" rows="3">{{ $products->description }}</textarea>
					                    </div>
								    </div>
								    <div class="col-sm-6">
								        
								        <img style="width:50%" src="{{ asset ('uploads/products/'. $products->image) }}">
								        <div class="form-group">
								            <label for="image ">Upload New Image</label>
								            <input id="image " class="form-control fileinput" name="image " type="file">
					                    </div>
								        
								        <input type="hidden" name="old_image" value="{{ $products->image }}" class="form-control" >
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