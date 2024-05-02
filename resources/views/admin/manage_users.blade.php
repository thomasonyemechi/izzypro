@extends('layout.admin')

@section('page_title')
    Manage Client
@endsection


@section('page_content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <div class="border-bottom pb-4 mb-4 d-flex justify-content-between align-items-center">
                <div class="mb-2 mb-lg-0">
                    <h1 class="mb-1 h2 fw-bold">
                        Clients
                        <span class="fs-5 text-muted">( {{ $total_client }} )</span>
                    </h1>
                    <!-- Breadcrumb  -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="admin-dashboard.html">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Clients
                            </li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <!-- Tab -->
            <div class="tab-content">
                <!-- Tab pane -->
                <div class="tab-pane fade active show" id="tabPaneGrid" role="tabpanel" aria-labelledby="tabPaneGrid">
                    <div class="mb-4">
                        <input type="search" class="form-control"
                            placeholder="Search client by name, email, phone or address">
                    </div>
                    <div class="row">

                        @foreach ($users as $user)
                            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                                <!-- Card -->
                                <div class="card mb-4">
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <div class="text-center">
                                            <img src="{{ Avatar::create($user->name ?? $user->email)->toBase64() }}"
                                                class="rounded-circle avatar-lg mb-3" alt="">
                                            <h4 class="mb-0">{{ $user->name ?? $user->phone }}</h4>
                                            <p class="mb-0"> {{ $user->email }} </p>
                                        </div>
                                        <div class="d-flex justify-content-between border-bottom py-2 mt-4">
                                            <span>Phone</span>
                                            <span class="text-dark">50,274</span>
                                        </div>
                                        <div class="d-flex justify-content-between border-bottom py-2">
                                            <span>Birthday</span>
                                            <span class="text-warning">
                                                {{ $user->dob ?? 'Null' }} 
                                            </span>
                                        </div>
                                   
                                        <div>
                                            <a href="/admin/user/{{$user->id}}" class="btn btn-block btn-xs mt-2 btn-outline-primary" style="width: 100%"> Profile </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
