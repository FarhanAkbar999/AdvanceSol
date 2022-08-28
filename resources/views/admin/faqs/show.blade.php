@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header"></section>
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
                        	<div class="form-group">
                                <strong>Category: </strong>{{ $faqs->name }}
                            </div>
                            <div class="form-group">
                                <strong>Question: </strong>{{ $faqs->question }}
                            </div>
                            <div class="form-group">
                                <strong>Answer: </strong>{{ $faqs->answer }}
                            </div>
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
