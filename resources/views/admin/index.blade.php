@extends('layout.admin')

@section('page_title')
    Account Overview
@endsection


@section('page_content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-12">
        <div class="border-bottom pb-4 mb-4 d-md-flex justify-content-between align-items-center">
            <div class="mb-3 mb-md-0">
                <h1 class="mb-0 h2 fw-bold">Dashboard</h1>
            </div>
            <div class="d-flex">
                <div class="input-group me-3  ">
                    <input class="form-control flatpickr" type="text" placeholder="Select Date"
                        aria-describedby="basic-addon2">

                    <span class="input-group-text text-muted" id="basic-addon2"><i
                            class="fe fe-calendar"></i></span>

                </div>
                <a href="#" class="btn btn-primary">Setting</a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-3 col-lg-6 col-md-12 col-12">
        <!-- Card -->
        <div class="card mb-4">
            <!-- Card body -->
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                    <div>
                        <span class="fs-6 text-uppercase fw-semi-bold">Sales</span>
                    </div>
                    <div>
                        <span class="fe fe-shopping-bag fs-3 text-primary"></span>
                    </div>
                </div>
                <h2 class="fw-bold mb-1">
                    $10,800
                </h2>
                <span class="text-success fw-semi-bold"><i
                        class="fe fe-trending-up me-1"></i>+20.9$</span>
                <span class="ms-1 fw-medium">Number of sales</span>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-12 col-12">
        <!-- Card -->
        <div class="card mb-4">
            <!-- Card body -->
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                    <div>
                        <span class="fs-6 text-uppercase fw-semi-bold">Courses</span>
                    </div>
                    <div>
                        <span class=" fe fe-book-open fs-3 text-primary"></span>
                    </div>
                </div>
                <h2 class="fw-bold mb-1">
                    2,456
                </h2>
                <span class="text-danger fw-semi-bold">120+</span>
                <span class="ms-1 fw-medium">Number of pending</span>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-12 col-12">
        <!-- Card -->
        <div class="card mb-4">
            <!-- Card body -->
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                    <div>
                        <span class="fs-6 text-uppercase fw-semi-bold">Students</span>
                    </div>
                    <div>
                        <span class=" fe fe-users fs-3 text-primary"></span>
                    </div>
                </div>
                <h2 class="fw-bold mb-1">
                    1,22,456
                </h2>
                <span class="text-success fw-semi-bold"><i
                        class="fe fe-trending-up me-1"></i>+1200</span>
                <span class="ms-1 fw-medium">Students</span>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-12 col-12">
        <!-- Card -->
        <div class="card mb-4">
            <!-- Card body -->
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                    <div>
                        <span class="fs-6 text-uppercase fw-semi-bold">Instructor</span>
                    </div>
                    <div>
                        <span class=" fe fe-user-check fs-3 text-primary"></span>
                    </div>
                </div>
                <h2 class="fw-bold mb-1">
                    22,786
                </h2>
                <span class="text-success fw-semi-bold"><i
                        class="fe fe-trending-up me-1"></i>+200</span>
                <span class="ms-1 fw-medium">Instructor</span>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-8 col-lg-12 col-md-12 col-12">
        <!-- Card -->
        <div class="card mb-4">
            <!-- Card header -->
            <div
                class="card-header align-items-center card-header-height d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="mb-0">Earnings</h4>
                </div>
                <div>
                    <div class="dropdown dropstart">
                        <a class="text-muted text-decoration-none" href="#" role="button"
                            id="courseDropdown1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fe fe-more-vertical"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="courseDropdown1">
                            <span class="dropdown-header">Settings</span>
                            <a class="dropdown-item" href="#"><i
                                    class="fe fe-external-link dropdown-item-icon "></i>Export</a>
                            <a class="dropdown-item" href="#"><i
                                    class="fe fe-mail dropdown-item-icon "></i>Email
                                Report</a>
                            <a class="dropdown-item" href="#"><i
                                    class="fe fe-download dropdown-item-icon "></i>Download</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card body -->
            <div class="card-body">
                <!-- Earning chart -->
                <div id="earning" class="apex-charts"></div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-12 col-md-12 col-12">
        <!-- Card -->
        <div class="card mb-4">
            <!-- Card header -->
            <div
                class="card-header align-items-center card-header-height  d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="mb-0">Traffic</h4>
                </div>
                <div>
                    <div class="dropdown dropstart">
                        <a class="text-muted text-decoration-none" href="#" role="button"
                            id="courseDropdown2" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fe fe-more-vertical"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="courseDropdown2">
                            <span class="dropdown-header">Settings</span>
                            <a class="dropdown-item" href="#"><i
                                    class="fe fe-external-link dropdown-item-icon "></i>Export</a>
                            <a class="dropdown-item" href="#"><i
                                    class="fe fe-mail dropdown-item-icon "></i>Email
                                Report</a>
                            <a class="dropdown-item" href="#"><i
                                    class="fe fe-download dropdown-item-icon "></i>Download</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card body -->
            <div class="card-body">
                <div id="traffic" class="apex-charts d-flex justify-content-center"></div>
            </div>
        </div>
    </div>
</div>

@endsection
