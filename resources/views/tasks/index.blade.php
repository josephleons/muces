@extends('layouts.student')
@section('content')
{{-- course list title --}}
<div class="row align-items-center ml-5">
    <div class="col-auto">
        <i class="bi bi-three-dots-vertical textColor"></i>
    </div>
    <div class="col">
        <span class="textColor">
            <a class="nav-link text-muted fs-5 " href="{{ url('#') }}">Task List</a>
        </span>
    </div>
    <hr class="ml-5 mt-2 textColor">
</div>
{{-- course list title --}}
{{-- course list title --}}
<div id="user" class="ml-5">
    <div class="tab-content  mt-5">
        <div class="tab-pane active" id="user" role="tabpanel" aria-labelledby="user-tab">
            <div class="card">
                <div class="card-header" style="background-color:#002E3B">
                </div>
                <div class="card-body">
                    {{-- <div class="row m-2">
                        <div class="col-md-12 d-flex justify-content-end">
                            <ul class="nav nav-tabs">
                                <li class="nav-item" role="presentation">
                                    <a href="#adduser" type="button" data-toggle="modal" data-target="#exampleModal">
                                        <i class="bi bi-plus-circle-dotted fs-5 mr-2 text-danger"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div> --}}
                    <div class="row">
                        <div class="col-md-12 col-sm-6 col-xm-12 ">
                            <table id="example" class="display table table-bordered" style="width:100%">
                                <thead class="table-muted">
                                    <tr class="text-muted" style="text-transform: capitalize;font-size:14px;">
                                        <th>S/N</th>
                                        <th>Task</th>
                                        <th>Due Date</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td class="text-info">panding</td>
                                        <td>
                                            <span>
                                                <div class="btn-group">
                                                    <button class="text-white btn btn-default" type="button" style="background-color:#FD876D">
                                                        Action
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-default dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false" style="background-color:#FD876D">
                                                        <span class="visually-hidden">Toggle Dropdown</span>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a class="dropdown-item" href="#adduser" type="button" data-toggle="modal" data-target="#exampleModal"><i class="bi bi-check2-circle text-muted fs-6 m-3"></i>View
                                                                Task</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#addusers" type="button" data-toggle="modal" data-target="#exampleModal03"><i class="bi bi-check2-circle text-muted fs-6 m-3"></i>View
                                                                Progress</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#addusers" type="button" data-toggle="modal" data-target="#exampleModal02"><i class="bi bi-check2-circle text-muted fs-6 m-3"></i>New
                                                                Progress</a>
                                                        </li>
                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>
                                                    </ul>
                                                </div>
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- taskview model --}}
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="text-dark modal-title" id="exampleModalLabel">Task/Questioner</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Task Name</h5>
                            <small>3 days ago</small>
                        </div>
                        <p class="mb-1">Some placeholder content in a paragraph.</p>
                        <small>And some small print.</small>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Assigned To</h5>
                            <small class="text-muted">3 days ago</small>
                        </div>
                        <p class="mb-1">Some placeholder content in a paragraph.</p>
                        <small class="text-muted">And some muted small print.</small>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Due Date</h5>
                            <small class="text-muted">3 days ago</small>
                        </div>
                        <p class="mb-1">Some placeholder content in a paragraph.</p>
                        <small class="text-muted">And some muted small print.</small>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Description </h5>
                            <small class="text-muted">3 days ago</small>
                        </div>
                        <p class="mb-1">Some placeholder content in a paragraph.</p>
                        <small class="text-muted">And some muted small print.</small>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Status </h5>
                            <small class="text-muted">3 days ago</small>
                        </div>
                        <p class="mb-1">Some placeholder content in a paragraph.</p>
                        <small class="text-muted">And some muted small print.</small>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>
{{-- View Progress  --}}
<div class="modal fade" id="exampleModal03" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="text-dark modal-title" id="exampleModalLabel">View Progress</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="list-group list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto text-muted">
                            <div class="fw-bold"> <i class="bi bi-person-circle mx-3 fs-3 mt-2 "></i>Student Name
                            </div>
                            <small class="ml-5  text-muted"><i class="bi bi-calendar-check mx-2 "></i>Due Date</small>
                            <div class="fw-light">
                                <h5 class="fs-6 mx-2">Progress Description</h5>
                                <p class="fs-6 mx-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum
                                    voluptatum debitis rerum totam provident architecto sapiente nulla alias
                                    veniam accusantium reiciendis, praesentium sed maxime commodi, aliquid illum aut
                                    nostrum placeat.</p>
                            </div>
                            <hr class="w-100 mt-2 textColor">
                        </div>
                        <i class="bi bi-three-dots-vertical"></i>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
{{-- Progress Model  --}}
<div class="modal fade" id="exampleModal02" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="text-dark modal-title" id="exampleModalLabel">Add New Progress</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {!! Form::open(['Action' => 'TaskController@store', 'Method' => 'POST']) !!}
                @csrf
                <div class="row">
                    <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Task Name</h5>
                        </div>
                        <p class="mb-1" style="color: #FD876D">Provide statement how lecture respond on question ?
                        </p>
                        <small>Please add progress for Task/Questioner Above</small>
                    </a>
                </div>
                <div class="row mt-5">
                    <div class="col-md-12">
                        <div class="form-group">
                            {{ Form::label('Description', 'Progress Description') }}
                            {{ Form::textarea('desc', '', ['id' => 'ckeditor', 'class' => 'form-control', 'placeholder' => 'Progress Description']) }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="modal-footer col-md-12 justify-content-center ">
                        {{ Form::submit('submit', [
                                'class' => 'cus text-white btn btn-default form-control',
                                'style' => 'background-color:#FD876D',
                            ]) }}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

