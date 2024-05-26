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
                        <h3 class="card-title">View Details</h3>
                        <div class="ms-auto pageheader-btn">
                            <a href="{{ route('vehicle.index') }}" class="btn btn-success btn-icon text-white">
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
                                    <h5 class="mb-3">Agmt No.</h5>
                                    <h6 class="text-dark mb-1">{{@$vehicle->agmt_no}}</h6>
                                </div>
                                <div class="col-sm-4">
                                    <h5 class="mb-3">App ID</h5>
                                    <h6 class="text-dark mb-1">{{@$vehicle->app_id}}</h6>
                                </div>
                                <div class="col-sm-4">
                                    <h5 class="mb-3">Customer Name</h5>
                                    <h6 class="text-dark mb-1">{{@$vehicle->customer_name}}</h6>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-sm-4">
                                    <h5 class="mb-3">BKT</h5>
                                    <h6 class="text-dark mb-1">{{@$vehicle->bkt}}</h6>
                                </div>
                                <div class="col-sm-4">
                                    <h5 class="mb-3">POS</h5>
                                    <h6 class="text-dark mb-1">{{@$vehicle->pos}}</h6>
                                </div>
                                <div class="col-sm-4">
                                    <h5 class="mb-3">TOS</h5>
                                    <h6 class="text-dark mb-1">{{@$vehicle->tos}}</h6>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-sm-4">
                                    <h5 class="mb-3">Registration Number</h5>
                                    <h6 class="text-dark mb-1">{{@$vehicle->reg_number}}</h6>
                                </div>
                                <div class="col-sm-4">
                                    <h5 class="mb-3">Chassis No.</h5>
                                    <h6 class="text-dark mb-1">{{@$vehicle->chassis_no}}</h6>
                                </div>
                                <div class="col-sm-4">
                                    <h5 class="mb-3">Engine No.</h5>
                                    <h6 class="text-dark mb-1">{{@$vehicle->engine_no}}</h6>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-sm-4">
                                    <h5 class="mb-3">Model</h5>
                                    <h6 class="text-dark mb-1">{{@$vehicle->model}}</h6>
                                </div>
                                <div class="col-sm-4">
                                    <h5 class="mb-3">Product</h5>
                                    <h6 class="text-dark mb-1">{{@$vehicle->product}}</h6>
                                </div>
                                <div class="col-sm-4">
                                    <h5 class="mb-3">File name</h5>
                                    <h6 class="text-dark mb-1">{{@$vehicle->file_name}}</h6>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-sm-4">
                                    <h5 class="mb-3">Branch</h5>
                                    <h6 class="text-dark mb-1">{{@$vehicle->branch}}</h6>
                                </div>
                                <div class="col-sm-4">
                                    <h5 class="mb-3">Customer Mobile No</h5>
                                    <h6 class="text-dark mb-1">{{@$vehicle->customer_mobile_no}}</h6>
                                </div>
                                <!-- <div class="col-sm-4">
                                    <h5 class="mb-3">File name</h5>
                                    <h6 class="text-dark mb-1">{{@$vehicle->aadhar_number}}</h6>
                                </div -->
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