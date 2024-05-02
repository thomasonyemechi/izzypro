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
                        Clients Project
                        <span class="fs-5 text-muted">( {{ $total_projects }} )</span>
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
    
            <div class="card mb-4">
             
                <div class="table-responsive border-0">
                    <table class="table mb-0">
                        <!-- Table head -->
                        <thead class="table-light">
                            <tr>
                                <th scope="col" class="border-0">Title</th>
                                <th scope="col" class="border-0">Description</th>
                                <th scope="col" class="border-0">Budget</th>
                                <th scope="col" class="border-0">Client</th>
                                <th scope="col" class="border-0">Date   </th>
                                <th scope="col" class="border-0"></th>
                            </tr>
                        </thead>
                        <!-- Table body -->
                        <tbody>
                            @foreach ($projects as $project)
                                <tr>
                                    <td class="">
                                        <a href="/admin/project/{{$project->id}}">
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
                                        <div class="small fw-bold " >
                                            {{ $project->payment_status }}
                                        </div>
                                    </td>
                                    <td class="align-middle border-top-0 small fw-bold">{{ $project->user->name }}</td>
                                    <td class="align-middle border-top-0">{{ date('F j, Y', strtotime($project->created_at)) }}</td>


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
        
                                                @if ( $project->payment_status == 'success')
                                                            <a class="dropdown-item" href="#"><i
                                                        class="fe fe-trash dropdown-item-icon"></i>Mark as Processing</a>
                                                @endif
                                        
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


        </div>
    </div>
@endsection
