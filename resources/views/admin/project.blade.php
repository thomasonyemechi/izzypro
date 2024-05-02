@extends('layout.admin')

@section('page_title')
    Manage Client
@endsection


@section('page_content')

@php
    $user = $project->user
@endphp
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <div class="border-bottom pb-4 mb-4 d-flex justify-content-between align-items-center">
                <div class="mb-2 mb-lg-0">
                    <h1 class="mb-1 h2 fw-bold">
                        Project Info
                    </h1>
                    <!-- Breadcrumb  -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="admin-dashboard.html">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Projects
                            </li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <div class="card border-0">
                <!-- Card header -->
                <div class="card-header d-lg-flex justify-content-between align-items-center">
                    <div class="mb-3 mb-lg-0">
                        <h3 class="mb-0">Project Details</h3>
                        <p class="mb-0">
                            {{ $project->title }}
                        </p>
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
                                    <a href="#" class="btn btn-success text-white btn-sm disabled">Payment
                                        Confirmed</a>
                                @else
                                    <a href="#" class="btn btn-warning text-white btn-sm">Pending Payment</a>
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
                            </div>
                        </div>
                        <div class="row">
                            <div class="alert alert-warning">
                                No files was uploaded while creating this project
                                <br>
                                You will be able to downloaded uploaded files here
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="card mt-3">
                <div class="card-body">
                    <div class="d-lg-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center mb-4 mb-lg-0">
                            <img src="{{ Avatar::create($user->name ?? $user->email)->toBase64() }}" id="img-uploaded"
                                class="avatar-xl rounded-circle" alt="">
                            <div class="ms-3">
                                <a href="/admin/client/{{$user->id}}"><h4 class="mb-0  fw-bold "> {{ $user->name ?? $user->email }} </h4></a>
                                <p class="mb-0">
                                    {{$user->address}}
                                </p>
                            </div>
                        </div>


                        <div>
                            <div class="ms-3">
                                <a href="/admin/client/{{$user->id}}"><h4 class="mb-0  fw-bold "> {{ $user->email }} </h4></a>
                                <p class="mb-0">
                                    {{$user->phone}}
                                </p>
                            </div>
                        </div>
        
                    </div>
           
                </div>
            </div>

        </div>
    </div>
@endsection
