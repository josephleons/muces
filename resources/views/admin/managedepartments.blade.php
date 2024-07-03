@extends('layouts.admin')
@section('content')
 {{-- course list title --}}
 <div class="container-fluid">
<div class="row align-items-center ml-5">
    <div class="col-auto">
        <i class="bi bi-three-dots-vertical textColor"></i>
    </div>
    <div class="col">
        <span class="textColor">
            <a class="nav-link text-muted text-capitalize fs-5 " href="{{ url('#') }}">Manage Departments</a>
        </span>
    </div>
    <hr class="ml-5 mt-2 textColor">
</div>
{{-- course list title --}}
<div id="user" class="ml-5">
    <div class="tab-content  mt-5">
        <div class="tab-pane active" id="user" role="tabpanel" aria-labelledby="user-tab">
            <div class="card">
                <div class="card-header"style="background-color:#002E3B">
                     <div class="row m-2">
                        <div class="col-md-12 d-flex justify-content-end">
                            <ul class="nav nav-tabs">
                                {{-- <li class="nav-item" role="presentation">
                                    <a href="#adduser" type="button" data-toggle="modal" data-target="#exampleModal03">
                                        <i class="bi bi-plus-circle-dotted fs-5 mr-2 text-danger"></i>Add Department</a>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-6 col-xm-12 ">
                            <table id="example" class="display table table-bordered" style="width:100%">
                                <thead class="table-muted">
                                    <tr class="text-muted" style="text-transform: capitalize;font-size:14px;">
                                        <th>S/N</th>
                                        <th>Department</th>
                                        <th>Description</th>
                                        <th>Email</th>
                                        <th>Contact</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($departments-> isEmpty())
                                        <small>No departments Data Available </small>
                                    @else
                                    @foreach($departments as $index => $department)
                                    <tr>
                                        <td>{{$index + 1}}</td>
                                        <td>{{$department->department}}</td>
                                        <td>{{$department->description}}</td>
                                        <td>{{$department->email}}</td>
                                        <td>{{$department->contact}}</td>
                                        <td>
                                            <span>
                                                <div class="btn-group">
                                                    <button class="text-white btn btn-default" type="button" style="background-color:#FD876D">
                                                        View
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a class="dropdown-item" href="{{'#'}}" type="button" data-toggle="modal" data-target="#exampleModal02" ><i class="bi bi-check2-circle text-muted fs-6 m-3"></i>View Department</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </span>
                                            <span>
                                                <a onclick="return confirm('Are you sure you wnat to delete this entry?')"
                                                  href="{{'#'}}"
                                                   style="background-color:#FD876D" class="text-white btn btn-default">Delete
                                                </a>
                                              </span>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Progress Model  --}}
<div class="modal fade" id="exampleModal03" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="text-dark modal-title" id="exampleModalLabel">Add New Departments</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               
            </div>
        </div>
    </div>
</div>
 </div>
@endsection
