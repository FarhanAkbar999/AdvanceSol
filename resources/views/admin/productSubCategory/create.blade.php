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
                                    <h3 class="card-title">Product SubCategory</h3>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <a href="{{ route('product-subcategories.index') }}" class="btn btn-primary btn-sm">Back</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form method="POST" action="{{ route ('product-subcategories.store') }}" accept-charset="UTF-8" enctype="multipart/form-data">
                            @csrf
                                <div class="row">
								    <div class="col-sm-6">
								        <div class="form-group">
					                        <label for="pscCategoryId">Category</label>
								            <select id="pscCategoryId" class="form-control" name="pscCategoryId">
								            	<option value="" selected="selected">--Select--</option>
								            	@foreach($categories as $row)
								            		<option value="{{ $row->id }}">{{ $row->name }}
								            	@endforeach
								            </select>
								        </div>
								    </div>
								    <div class="col-sm-6">
								        <div class="form-group">
								            <label for="pscName">SubCategory Name</label>
								            <input id="pscName" class="form-control" name="pscName" type="text">
					                    </div>
								    </div>
								    <div class="col-sm-6">
								        <div class="form-group">
								            <label for="pscPrice">starting price</label>
								            <input id="pscPrice" class="form-control" name="pscPrice" type="number" min="0">
					                    </div>
								    </div>
								    <div class="col-sm-6">
								        <div class="form-group">
					                        <label for="distributer_id">Distributer </label>
								            <select id="distributer_id" class="form-control select2" name="distributer_id">
								            	<option value="" selected="selected">--Select--</option>
								            	@foreach($distributers as $row)
								            		<option value="{{ $row->id }}">{{ $row->distributer_name  }}
								            	@endforeach
								            </select>
					                    </div>
								    </div>
								    <!-- <div class="col-sm-12">
								        <div class="form-group">
					                        <label for="tags">Tags</label>
								            <select id="tags" class="form-control select2" 		multiple 1 name="tags[]"><option value="1">		contemporary</option>
								            </select>
					                    </div>
								    </div> -->
								    <div class="col-sm-12">
								        <div class="form-group">
								            <label for="pscDetails">Details</label>
								            <textarea id="pscDetails" class="			form-control" name="pscDetails" cols="50" rows="3"></textarea>
					                    </div>
								    </div>
								    <div class="col-sm-6">
								        <div class="form-group">
								            <label for="pscImage">Image</label>
								            <input id="pscImage" class="form-control fileinput" name="pscImage" type="file">
					                    </div>								        
								    </div>
								    <div class="col-sm-6">
								        <div class="form-group">
								        	<input class="form-check-input" type="checkbox" id="pscQuickship" name="pscQuickship" value="1">
  											<label class="form-check-label" for="pscQuickship">Quickship</label>
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
    <!-- /.content -->
@endsection

