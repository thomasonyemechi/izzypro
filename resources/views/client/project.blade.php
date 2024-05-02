@extends('client.client_layout')
@section('page_title')
    {{ $project->title }}
@endsection
@section('page_content')
    <div class="card border-0">
        <!-- Card header -->
        <div class="card-header d-lg-flex justify-content-between align-items-center">
            <div class="mb-3 mb-lg-0">
                <h3 class="mb-0">Project</h3>
                <p class="mb-0">
                    {{ $project->title }}
                </p>
            </div>
            <div>

                @if ($project->payment_status == 'pending')
                    <a href="" class="btn btn-outline-primary btn-sm">Edit</a>

                    <a href="" class="btn btn-outline-success btn-sm">Change Budget</a>

                    <a href="" class="btn btn-outline-danger btn-sm" onclick="return confirm('This project will be totally deleted')" > <i class="fa fa-trash"></i> Delete </a>
                @endif


            </div>
        </div>
        <!-- Card body -->
        <div class="card-body">
            <div class="border-bottom pt-0 pb-5">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 mb-2 mb-lg-0">
                        <span class="fs-6">Project Description</span>
                        <h6 class="mb-0"> {{ $project->description }} </h6>
                    </div>
                </div>
            </div>
            <div class="border-bottom pt-5 pb-5">
                <div class="row mb-4">
                    <div class="col mb-2 mb-lg-0">
                        <span class="d-block">
                            <span class="h4">Budget Information</span>



                            <span
                                class="badge {{ $project->payment_status == 'pending' ? 'bg-danger' : 'bg-success' }} ms-2">
                                {{ $project->payment_status }}</span></span>
                        <p class="mb-0 fs-6">
                            Project ID: {{ md5($project->id) }}
                        </p>
                    </div>
                    <div class="col-auto">
                        @if ($project->payment_status == 'success')
                            <a href="#" class="btn btn-success text-white btn-sm disabled">Payment Confirmed</a>
                        @else
                            <a href="#" class="btn btn-warning text-white btn-sm">Retry Payment</a>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                        <span class="fs-6">Submited On</span>
                        <h6 class="mb-0"> {{ date('F, j, Y', strtotime($project->created_at)) }} </h6>
                    </div>
                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                        <span class="fs-6">Budget</span>
                        <h6 class="mb-0"> {{ money($project->budget) }} </h6>
                    </div>
                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                        <span class="fs-6">Category</span>
                        <h6 class="mb-0"> {{ $project->category ?? 'null' }} </h6>
                    </div>
                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                        <span class="fs-6">Delivery Date</span>
                        <h6 class="mb-0"> {{ $project->deadline }} </h6>
                    </div>
                </div>
            </div>

            <div class="pt-5">
                <div class="row mb-4">
                    <div class="col mb-2 mb-lg-0">
                        <span class="d-block">
                            <span class="h4">Uploaded Files</span>
                        </span>
                        <p class="mb-0 fs-6">
                            Total Files: {{ '0' }}
                        </p>
                    </div>
                    <div class="col-auto">
                        <a href="#" class="btn btn-secondary text-white btn-sm "> <i class="fa fa-upload"></i> Upload
                            Files</a>
                    </div>
                </div>
                <div class="row">
                    <div class="alert alert-warning">
                        No files was uploaded while creating this project
                        <br>
                        Would you like to upload files ? click upload button
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
