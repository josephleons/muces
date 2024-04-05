@extends('layouts.dean')
@section('content')
{{-- Departments list title --}}
<div class="row align-items-center ml-5">
    <div class="col-auto">
        <i class="bi bi-three-dots-vertical textColor"></i>
    </div>
    <div class="col">
        <span class="textColor">
            <a class="nav-link text-muted fs-5 " href="{{ url('#') }}">Department List</a>
        </span>
    </div>
    <hr class="ml-5 mt-2 textColor">
</div>
<div id="user" class="ml-5">
    <div class="tab-content  mt-5">
        <div class="tab-pane active" id="user" role="tabpanel" aria-labelledby="user-tab">
            <div class="card">
                <div class="card-header" style="background-color:#002E3B">
                </div>
                <div class="card-body">
                    <div class="row m-2">
                        <div class="col-md-12 d-flex justify-content-end">
                            <ul class="nav nav-tabs">
                                <li class="nav-item" role="presentation">
                                    <a href="#adduser" type="button" data-toggle="modal" data-target="#exampleModal04">
                                        <i class="bi bi-plus-circle-dotted fs-5 mr-2 text-danger"></i>Add Department</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-6 col-xm-12 ">
                            <table id="example" class="display table table-bordered" style="width:100%">
                                <thead class="table-muted">
                                    <tr class="text-muted" style="text-transform: capitalize;font-size:14px;">
                                        <th>S/N</th>
                                        <th>Faculty</th>
                                        <th>Department</th>
                                        <th>Description</th>
                                        <th>Email</th>
                                        <th>Contact</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($faculties as $faculty)
                                    @foreach($faculty->departments as $department)
                                    <tr>
                                        <td>{{ $faculty->id }}</td>
                                        <td>{{ $faculty->name}}</td>
                                        <td>{{ $department->name ?: 'No data found' }}</td>
                                        <td class="text-info">{{ $department->description ?: 'No data found' }}</td>
                                        <td class="text-info">{{ $department->email ?: 'No data found' }}</td>
                                        <td class="text-info">{{ $department->contact ?: 'No data found' }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="text-white btn btn-default edit-department-btn" data-department-id="{{ $department->id }}" type="button" style="background-color:#FD876D">
                                                    Action
                                                </button>
                                                <button type="button" class="btn btn-sm btn-default dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false" style="background-color:#FD876D">
                                                    <span class="visually-hidden">Toggle Dropdown</span>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="{{ url('departments/show/'.$department->id) }}" type="button">
                                                            <i class="bi bi-view-list text-muted fs-6 m-3"></i>View
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endforeach
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
<div class="modal fade" id="exampleModal04" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="text-dark modal-title" id="exampleModalLabel">Add New Department</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {!! Form::open(['Action' => 'DepartmentController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                @csrf
                <div class="col-md-12 m-2">
                    <div class="form-group">
                        {{Form::label('Faculty','Faculty Name')}}
                        <select name="faculty" class="form-select" aria-label="Select your Faculty">
                            <option value="" disabled selected>Select Faculty</option>
                            @foreach($faculties as $faculty)
                            <option value="{{$faculty->id}}">{{$faculty->name}}</option>
                            @endforeach
                        </select>
                        {{-- <input type="hidden" name="faculty_name" value="{{ old('faculty_name') ?? '' }}"> --}}
                    </div>
                </div>
                <div class="col-md-12 m-2">
                    <div class="form-group">
                        {{Form::label('','Department Name:')}}
                        {{Form::text('name','',['class'=>'form-control','placeholder'=>'Department Name
                        '])}}
                    </div>
                </div>
                <div class="col-md-12 m-2">
                    <div class="form-group">
                        {{Form::label('email','Email Address')}}
                        {{Form::text('email','',['class'=>'form-control','placeholder'=>'Email
                        '])}}
                    </div>
                </div>
                <div class="col-md-12 m-2">
                    <div class="form-group">
                        {{Form::label('contact','Contact')}}</br>
                        {{Form::text('contact','',['class'=>'form-control','placeholder'=>'Contact'])}}
                    </div>
                </div>
                <div class="col-md-12 m-2">
                    <div class="form-group">
                        {{Form::label('Description','Description')}}
                        {{Form::textarea('description', '',['id'=>'ckeditor','class'=>'form-control','placeholder'=>'Description'])}}
                    </div>
                </div>
                <div class="modal-footer col-md-12 justify-con tent-center">
                    {{Form::submit('save',['class'=>'btn btn-default text-white fs-6 form-control','style' => 'background-color:#FD876D'])}}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection

