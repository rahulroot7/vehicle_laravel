@extends('layouts.master')

@section('content')


<div class="app-content">
    <div class="side-app">

        <!-- PAGE-HEADER -->
        <div class="page-header">
            <!-- Row -->

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Applicant Details</h3>
                        <div class="ms-auto pageheader-btn">
                            <a href="{{ route('users.index') }}" class="btn btn-success btn-icon text-white">
                                <span>
                                    <i class="fe fe-log-in"></i>
                                </span> Back
                            </a>
                        </div>
                    </div>

                    <div class="card">

                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-sm-4">
                                    <h5 class="mb-3">User Name</h5>
                                    <h6 class="text-dark mb-1">{{@$user->name}}</h6>
                                </div>
                                <div class="col-sm-4">
                                    <h5 class="mb-3">Email</h5>
                                    <h6 class="text-dark mb-1">{{@$user->email}}</h6>
                                </div>
                                <div class="col-sm-4">
                                    <h5 class="mb-3">Mobile Number</h5>
                                    <h6 class="text-dark mb-1">{{@$user->phone}}</h6>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-sm-4">
                                    <h5 class="mb-3">Full Name</h5>
                                    <h6 class="text-dark mb-1">{{@$user->full_name}}</h6>
                                </div>
                                <div class="col-sm-4">
                                    <h5 class="mb-3">Father Name</h5>
                                    <h6 class="text-dark mb-1">{{@$user->father_name}}</h6>
                                </div>
                                <div class="col-sm-4">
                                    <h5 class="mb-3">Aadhar Number</h5>
                                    <h6 class="text-dark mb-1">{{@$user->aadhar_number}}</h6>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-sm-4">
                                    <h5 class="mb-3">Address</h5>
                                    <h6 class="text-dark mb-1">{{@$user->address}}</h6>
                                </div>
                                <div class="col-sm-4">
                                    <h5 class="mb-3">Area</h5>
                                    <h6 class="text-dark mb-1">{{@$user->area}}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- End Row -->
        </div>
        <!-- PAGE-HEADER END -->
    </div>
</div>

@endsection