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
                                <h3 class="card-title">Contact Us</h3>
                            </div>
                            <div class="col-sm-6 text-right">
                                <a href="{{ route ('contact-us.index') }}" class="btn btn-primary btn-sm">Back</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                        <div class="card-body">
                        	<div class="form-group">
                                <strong>Name: </strong>{{ $contactUs->name }}
                            </div>
                            <div class="form-group">
                                <strong>Email: </strong>{{ $contactUs->email }}
                            </div>
                            <div class="form-group">
                                <strong>Zip Code: </strong>{{ $contactUs->zipcode }}
                            </div>
                            <div class="form-group">
                                <strong>Subject: </strong>{{ $contactUs->subject }}
                            </div>
                            <div class="form-group">
                                <strong>Message: </strong>{{ $contactUs->message }}
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
