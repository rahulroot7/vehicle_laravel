@extends('layouts.master')

@section('content')


<div class="app-content">
    <div class="side-app">

        <!-- PAGE-HEADER -->
        <div class="page-header">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Edit Vehicle</h3>
                        </div>
                        <!-- show success and unsuccess message -->
                        @if (session('success'))
                        <p class="alert alert-success text-center">{{ session('success') }}</p>
                        @endif
                        @if (session('unsuccess'))
                        <p class="alert alert-danger text-center">{{ session('unsuccess') }}</p>
                        @endif
                        <!-- End show success and unsuccess message -->

                        <form method="post" action="{{route('vehicle.update', $vehicle->id)}}" id="vehicleform" enctype="multipart/form-data">
                            @csrf

                            <div class="card-body pb-2">
                                <div class="row row-sm">
                                    <div class="row row-sm">
                                        <div class="col-lg">
                                            <label class="form-label">Agmt No.</label>
                                            <input type="text" name="agmt_no" value="{{ $vehicle->agmt_no }}" class="form-control mb-4 @error('agmt_no') is-invalid @enderror" placeholder="Enter Agmt No">
                                            @if ($errors->has('agmt_no'))
                                            <span class="text-danger">{{ $errors->first('agmt_no') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-lg mg-t-10 mg-lg-t-0">
                                            <label class="form-label">App ID</label>
                                            <input type="text" name="app_id" value="{{ $vehicle->app_id }}" class="form-control mb-4 @error('app_id') is-invalid @enderror" placeholder="Enter App ID" oninput="validateInput(this)" maxlength="10">
                                            @if ($errors->has('app_id'))
                                            <span class="text-danger">{{ $errors->first('app_id') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-lg">
                                            <label class="form-label">Customer Name</label>
                                            <input type="text" name="customer_name" value="{{ $vehicle->customer_name }}" class="form-control mb-4 @error('customer_name') is-invalid @enderror"  placeholder="Enter Customer Name">
                                            @if ($errors->has('customer_name'))
                                            <span class="text-danger">{{ $errors->first('customer_name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row row-sm">
                                        <div class="col-lg">
                                            <label class="form-label">BKT</label>
                                            <input type="text" name="bkt" value="{{ $vehicle->bkt }}" class="form-control mb-4 @error('bkt') is-invalid @enderror" placeholder="Enter BKT">
                                            @if ($errors->has('bkt'))
                                            <span class="text-danger">{{ $errors->first('bkt') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-lg mg-t-10 mg-lg-t-0">
                                            <label class="form-label">POS</label>
                                            <input type="text" name="pos" value="{{ $vehicle->pos }}" class="form-control mb-4 @error('pos') is-invalid @enderror" placeholder="Enter POS">
                                            @if ($errors->has('pos'))
                                            <span class="text-danger">{{ $errors->first('pos') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-lg">
                                            <label class="form-label">TOS</label>
                                            <input type="text" name="tos" value="{{ $vehicle->tos }}" class="form-control mb-4 @error('tos') is-invalid @enderror" placeholder="Enter TOS">
                                            @if ($errors->has('tos'))
                                            <span class="text-danger">{{ $errors->first('tos') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row row-sm">
                                        <div class="col-lg">
                                            <label class="form-label">Registration Number</label>
                                            <input type="text" name="reg_number" value="{{ $vehicle->reg_number }}" class="form-control mb-4 @error('reg_number') is-invalid @enderror" placeholder="Enter Registration Number">
                                            @if ($errors->has('reg_number'))
                                            <span class="text-danger">{{ $errors->first('reg_number') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-lg mg-t-10 mg-lg-t-0">
                                            <label class="form-label">Chassis No</label>
                                            <input type="text" name="chassis_no" value="{{ $vehicle->chassis_no }}" class="form-control mb-4 @error('chassis_no') is-invalid @enderror" placeholder="Enter Chassis No">
                                            @if ($errors->has('chassis_no'))
                                            <span class="text-danger">{{ $errors->first('chassis_no') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-lg">
                                            <label class="form-label">Engine No</label>
                                            <input type="text" name="engine_no" value="{{ $vehicle->engine_no }}" class="form-control mb-4 @error('engine_no') is-invalid @enderror" placeholder="Enter Engine No">
                                            @if ($errors->has('engine_no'))
                                            <span class="text-danger">{{ $errors->first('engine_no') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row row-sm">
                                        <div class="col-lg">
                                            <label class="form-label">Model</label>
                                            <input type="text" name="model" value="{{ $vehicle->model }}" class="form-control mb-4 @error('model') is-invalid @enderror" placeholder="Enter Model">
                                            @if ($errors->has('model'))
                                            <span class="text-danger">{{ $errors->first('model') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-lg mg-t-10 mg-lg-t-0">
                                            <label class="form-label">Product</label>
                                            <input type="text" name="product" value="{{ $vehicle->product }}" class="form-control mb-4 @error('product') is-invalid @enderror" placeholder="Enter Product">
                                            @if ($errors->has('product'))
                                            <span class="text-danger">{{ $errors->first('product') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-lg">
                                            <label class="form-label">File name</label>
                                            <input type="text" name="file_name" value="{{ $vehicle->file_name }}" class="form-control mb-4 @error('file_name') is-invalid @enderror" placeholder="Enter File name">
                                            @if ($errors->has('file_name'))
                                            <span class="text-danger">{{ $errors->first('file_name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row row-sm">
                                        <div class="col-lg">
                                            <label class="form-label">Branch</label>
                                            <input type="text" name="branch" value="{{ $vehicle->branch }}" class="form-control mb-4 @error('branch') is-invalid @enderror" placeholder="Enter Branch">
                                            @if ($errors->has('branch'))
                                            <span class="text-danger">{{ $errors->first('branch') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-lg mg-t-10 mg-lg-t-0">
                                            <label class="form-label">Customer Mobile No</label>
                                            <input type="text" name="customer_mobile_no" value="{{ $vehicle->customer_mobile_no }}" class="form-control mb-4 @error('customer_mobile_no') is-invalid @enderror" placeholder="Enter Customer Mobile No" oninput="validateInput(this)" maxlength="10">
                                            @if ($errors->has('customer_mobile_no'))
                                            <span class="text-danger">{{ $errors->first('customer_mobile_no') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="mb-0 mt-4 row justify-content-end">
                                        <div class="col-md-9">
                                            <button type="submit" name="insert" value="insert" class="btn btn-primary">Save</button>
                                            <button class="btn btn-secondary"><a href="#">Cancel</a></button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- PAGE-HEADER END -->
    </div>
</div>
@endsection
@section('script')
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.validate.min.js')}}" defer></script>
<script>
    $(function() {
        $("#vehicleform").validate({
            rules: {
                agmt_no: {
                    required: true
                },
                app_id: {
                    required: true
                },
                customer_name: {
                    required: true
                },
                reg_number: {
                    required: true
                },
                chassis_no: {
                    required: true
                },
                engine_no: {
                    required: true
                },
                model: {
                    required: true
                },
                product: {
                    required: true
                },
                branch: {
                    required: true
                },
                customer_mobile_no: {
                    required: true
                }

            },
            messages: {
                agmt_no: {
                    required: "The Name field is required."
                }
            }
        });
    });
</script>
@endsection