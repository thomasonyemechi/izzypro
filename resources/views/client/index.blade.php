@extends('client.client_layout')
@section('page_content')
    <div class="row">
        <div class="col-lg-4 col-md-12 col-12">
            <!-- Card -->
            <div class="card mb-4">
                <div class="p-4">
                    <span class="fs-6 text-uppercase fw-semi-bold">Total Spent</span>
                    <h2 class="mt-4 fw-bold mb-1 d-flex align-items-center h1 lh-1">
                        {{ money($total_spent) }}
                    </h2>
                    <span class="d-flex justify-content-between align-items-center">
                        <span>Total Projects</span>
                        <span class="badge bg-success ms-2"> {{ number_format($success_project) }} </span>
                    </span>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-12 col-12">
            <!-- Card -->
            <div class="card mb-4">
                <div class="p-4">
                    <span class="fs-6 text-uppercase fw-semi-bold">Completed</span>
                    <h2 class="mt-4 fw-bold mb-1 d-flex align-items-center h1 lh-1">
                        {{ $success_project }}
                    </h2>
                    <span class="d-flex justify-content-between align-items-center">
                        <span>Due Today</span>
                        <span class="badge bg-info ms-2">0</span>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 col-12">
            <!-- Card -->
            <div class="card mb-4">
                <div class="p-4">
                    <span class="fs-6 text-uppercase fw-semi-bold">Pending Payment</span>
                    <h2 class="mt-4 fw-bold mb-1 d-flex align-items-center h1 lh-1">
                        {{ money($pending_payment) }}
                    </h2>
                    <span class="d-flex justify-content-between align-items-center">
                        <span>Posted Project</span>
                        <span class="badge bg-warning ms-2"> {{ $posted_project }} </span>
                    </span>
                </div>
            </div>
        </div>
    </div>


    <div class="card mb-4">
        <!-- Card header -->
        <div class="card-header border-bottom-0">
            <h3 class="h4 mb-0 fw-bold ">Posted Projects</h3>
        </div>
        <!-- Table -->
        <div class="table-responsive border-0">
            <table class="table mb-0">
                <!-- Table head -->
                <thead class="table-light">
                    <tr>
                        <th scope="col" class="border-0">Title</th>
                        <th scope="col" class="border-0">Description</th>
                        <th scope="col" class="border-0">Budget</th>
                        <th scope="col" class="border-0"></th>
                    </tr>
                </thead>
                <!-- Table body -->
                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <td class="">
                                <a href="/client/project/{{$project->id}}">
                                    <div class="d-lg-flex align-items-center">
                                        <h5 class="mb-0  fw-bold text-primary-hover text-primary ">
                                            {{ $project->title }}
                                        </h5>
                                    </div>
                                </a>
                            </td>
                            <td class="align-middle border-top-0">{{ $project->description }}</td>
                            <td class="align-middle border-top-0">
                                <div class="badge {{ $project->payment_status == 'success' ? 'bg-success' : 'bg-warning' }} "
                                    style="white-space: nowrap">
                                    {{ money($project->budget) }}
                                </div>
                            </td>
                            <td class="text-muted align-middle border-top-0">
                                <span class="dropdown dropstart">
                                    <a class="text-muted text-decoration-none" href="#" role="button"
                                        id="courseDropdown1" data-bs-toggle="dropdown" data-bs-offset="-20,20"
                                        aria-expanded="false">
                                        <i class="fe fe-more-vertical"></i>
                                    </a>
                                    <span class="dropdown-menu" aria-labelledby="courseDropdown1">
                                        <span class="dropdown-header">Setting </span>

                                        <a class="dropdown-item " href="#"><i
                                                class="fe fe-edit dropdown-item-icon"></i>Info</a>

                                        <a class="dropdown-item text-danger" href="#"><i
                                                class="fe fe-trash dropdown-item-icon"></i>Remove</a>
                                    </span>
                                </span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="nav d-flex justify-content-end">
        {{ $projects->links('pagination::bootstrap-4') }}
    </div>
@endsection
