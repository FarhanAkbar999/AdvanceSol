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
                                    <a href="{{ route ('faqs.index') }}" class="btn btn-primary btn-sm">Back</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                        	<form method="POST" action="{{ route ('faqs.update', $faqs->id ) }}" accept-charset="UTF-8">
                        		@method('PUT')
                        		@csrf
                                <div class="row">
								    <div class="col-sm-4">
								        <div class="form-group">
					                        <label for="filterId">Category</label>
								            <select id="filterId" class="form-control" name="filterId">
								            	<option value="" selected="selected">--Select--</option>
								            	@foreach($faqsFilters as $row)
								            		<option value="{{ $row->id }}" <?php if($faqs->filterId == $row->id){ echo "selected";} ?>>		{{ $row->name }}
							            			</option>
								            	@endforeach
								            </select>
								        </div>
								    </div>
								    <div class="col-sm-12">
								        <div class="form-group">
								            <label for="question">Question</label>
								            <textarea id="question" class="form-control" name="question" cols="50" rows="5">{{ $faqs->question }} </textarea>
					                    </div>
								    </div>
								    <div class="col-sm-12">
								        <div class="form-group">
								            <label for="answer">Answer</label>
								            <textarea id="answer" class="form-control" name="answer" cols="50" rows="5">{{ $faqs->answer }}</textarea>
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

