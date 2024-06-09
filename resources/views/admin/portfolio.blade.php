@extends('layout.admin')

@section('page_title')
    Manage Web Portfolio
@endsection


@section('page_content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <div class="border-bottom pb-4 mb-4 d-flex justify-content-between align-items-center">
                <div class="mb-2 mb-lg-0">
                    <h1 class="mb-1 h2 fw-bold">
                        Web Portfolio
                        <span class="fs-5 text-muted">( )</span>
                    </h1>
                    <!-- Breadcrumb  -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="admin-dashboard.html">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Portfolio
                            </li>
                        </ol>
                    </nav>
                </div>

                <div>
                    <button class="btn btn-primary add_btn"> <i class="fa fa-plus-circle"></i> Create New Portfolio</button>
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
                                <th scope="col" class="border-0"></th>
                                <th scope="col" class="border-0">Note</th>
                                <th scope="col" class="border-0">Category</th>
                                <th scope="col" class="border-0">Tags</th>
                                <th scope="col" class="border-0">Description</th>
                                <th scope="col" class="border-0">Date </th>
                                <th scope="col" class="border-0"></th>
                            </tr>
                        </thead>
                        <!-- Table body -->
                        <tbody>
                            @foreach ($projects as $project)
                                <tr>
                                    <td class="">
                                        <a href="javascript:;">
                                            <div class="d-lg-flex align-items-center">
                                                <h5 class="mb-0  fw-bold text-primary-hover text-primary ">
                                                    {{ $project->title }}
                                                </h5>
                                            </div>
                                        </a>
                                    </td>
                                    <td>
                                        <img src="{{ asset($project->image) }}" class="rounded"
                                        style="width: 80px; height: 50px; object-fit: cover;"
                                        alt="">
                                    </td>
                                    <td class="align-middle border-top-0">{{ $project->note }}</td>
                                    <td class="align-middle border-top-0">{{ $project->cateogry }}</td>
                                    <td class="align-middle border-top-0">{{ $project->tags }}</td>

                                    <td class="align-middle border-top-0">{{ $project->description }}</td>
                      
                                    <td class="align-middle border-top-0 small fw-bold"> {{ date('j F Y',strtotime($project->created_at)) }} </td>


                                    <td class="text-muted align-middle border-top-0">
                                        <span class="dropdown dropstart">
                                            <a class="text-muted text-decoration-none" href="#" role="button"
                                                id="courseDropdown1" data-bs-toggle="dropdown" data-bs-offset="-20,20"
                                                aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <span class="dropdown-menu" aria-labelledby="courseDropdown1">
                                                <span class="dropdown-header">Setting </span>

                                                <a class="dropdown-item edit_port " href="#"><i
                                                        class="fe fe-edit dropdown-item-icon" data-data="{{ json_encode($project) }}" ></i>Edit Portfolio</a>

                                                    <a class="dropdown-item" href="#"><i
                                                            class="fe fe-trash dropdown-item-icon"></i>Delete</a>

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


    <!-- Modal -->
    <div class="modal fade" id="porttfolio" tabindex="-1" role="dialog" aria-labelledby="newCatgoryLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title mb-0" id="newCatgoryLabel">
                        Create New Porttfolio
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fe fe-x-circle"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" enctype="multipart/form-data" action="/admin/portfolio">@csrf
                        <div class="mb-3 mb-2">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="form-label" for="title">Title<span class="text-danger">*</span></label>
                                    <input type="text" name="title" class="form-control"
                                        placeholder="Write a portfolio title" required>

                                    @error('title')
                                        <small class="text-danger">{{ $message }} </small>
                                    @enderror
                                </div>
                                <div class="col-md-8">
                                    <label class="form-label" for="title">Project Caption<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="note"
                                        placeholder="Write a portfolio caption" required>
                                    @error('note')
                                        <small class="text-danger">{{ $message }} </small>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <div class="mb-3 mb-2">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label">Category</label>
                                    <select class="form-control" name="category" data-width="100%">
                                        <option>Design</option>
                                        <option>Technology</option>
                                        <option>Motion Graphics</option>
                                    </select>
                                    @error('category')
                                        <small class="text-danger">{{ $message }} </small>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Portfolio tags</label>
                                    <input type="text " name="tags" class="form-control">
                                    @error('tags')
                                        <small class="text-danger">{{ $message }} </small>
                                    @enderror
                                </div>
                            </div>
                        </div>


                        <div class="mb-3 mb-2">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label">Display Image</label>
                                    <input type="file" name="image" class="form-control">
                                    @error('image')
                                        <small class="text-danger">{{ $message }} </small>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Portfolio Images</label>
                                    <input type="file" name="files[]" class="form-control" multiple>
                                    @error('files')
                                        <small class="text-danger">{{ $message }} </small>
                                    @enderror
                                </div>
                            </div>
                        </div>


                        <div class="mb-3 mb-3">
                            <label class="form-label">Description</label>
                            <textarea name="description" class="form-control" cols="5"></textarea>
                            @error('description')
                            <small class="text-danger" >{{ $message }} </small>
                        @enderror
                        </div>

                        <div>
                            <button type="submit" class="btn btn-primary">Create Portfolio</button>
                            <button type="button" class="btn btn-outline-white" data-bs-dismiss="modal">
                                Close
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <div class="modal fade" id="edit_porttfolio" tabindex="-1" role="dialog" aria-labelledby="newCatgoryLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title mb-0" id="newCatgoryLabel">
                    Update New Porttfolio
                </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fe fe-x-circle"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data" action="/admin/portfolio_update">@csrf
                    <div class="mb-3 mb-2">
                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label" for="title">Title<span class="text-danger">*</span></label>
                                <input type="text" name="title" class="form-control"
                                    placeholder="Write a portfolio title" required>

                                @error('title')
                                    <small class="text-danger">{{ $message }} </small>
                                @enderror
                            </div>
                            <div class="col-md-8">
                                <label class="form-label" for="title">Project Caption<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="note"
                                    placeholder="Write a portfolio caption" required>
                                @error('note')
                                    <small class="text-danger">{{ $message }} </small>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <div class="mb-3 mb-2">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label">Category</label>
                                <select class="form-control" name="category" data-width="100%">
                                    <option>Design</option>
                                    <option>Technology</option>
                                    <option>Motion Graphics</option>
                                </select>
                                @error('category')
                                    <small class="text-danger">{{ $message }} </small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Portfolio tags</label>
                                <input type="text " name="tags" class="form-control">
                                @error('tags')
                                    <small class="text-danger">{{ $message }} </small>
                                @enderror
                            </div>
                        </div>
                    </div>


                    <div class="mb-3 mb-2">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label">Display Image</label>
                                <input type="file" name="image" class="form-control">
                                @error('image')
                                    <small class="text-danger">{{ $message }} </small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Portfolio Images</label>
                                <input type="file" name="files[]" class="form-control" multiple>
                                @error('files')
                                    <small class="text-danger">{{ $message }} </small>
                                @enderror
                            </div>
                        </div>
                    </div>


                    <div class="mb-3 mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="description" class="form-control" cols="5"></textarea>
                        @error('description')
                        <small class="text-danger" >{{ $message }} </small>
                    @enderror
                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary">Create Portfolio</button>
                        <button type="button" class="btn btn-outline-white" data-bs-dismiss="modal">
                            Close
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script>
        $(function() {
            // $('#porttfolio').modal('show');


            $('.add_btn').on('click', function() {
                $('#porttfolio').modal('show');
            })


            $('body').on('click', '.edit_port', function() {
                data = $(this).data('data');
                modal = $('#edit_porttfolio')
                modal.modal('show');

                modal.find('input[name="port_id"]').val(`${data.id}`)
                modal.find('input[name="title"]').val(`${data.title}`)
                modal.find('input[name="tags"]').val(`${data.tags}`)
                modal.find('input[name="note"]').val(`${data.note}`)
                modal.find('textarea[name="description"]').html(`${data.description}`)


            })
        })
    </script>
@endpush
