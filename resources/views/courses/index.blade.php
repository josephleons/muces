@extends('layouts.student')
@section('content')
{{-- course list title --}}
<div class="row align-items-center ml-5">
    <div class="col-auto">
        <i class="bi bi-three-dots-vertical textColor"></i>
    </div>
    <div class="col">
        <span class="textColor">
            <a class="nav-link text-muted fs-5 " href="{{ url('#') }}">Course List</a>
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
                                        <th>Course</th>
                                        <th>Code</th>
                                        <th>Type</th>
                                        <th>Lecturer</th>
                                        <th>Credit</th>
                                        <th>Registered by</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Development Perspectives</td>
                                        <td>DST 100</td>
                                        <td>None Core</td>
                                        <td>Elihaika Kengalo Joseph</td>
                                        <td class="text-info">12.00</td>
                                        <td>Department</td>
                                        <td>
                                            <span>
                                                <div class="btn-group">
                                                    <button class="text-white btn btn-default" type="button" style="background-color:#FD876D">
                                                        Action
                                                    </button>
                                                    <button type="button"
                                                        class="btn btn-sm btn-default dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-expanded="false" style="background-color:#FD876D">
                                                        <span class="visually-hidden">Toggle Dropdown</span>
                                                    </button>
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
                <h5 class="text-dark modal-title" id="exampleModalLabel">Add New User</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {!! Form::open(['Action' => 'UserController@index','Method' =>'POST']) !!}
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        {{Form::label('email','Email Address')}}
                        <div class="form-group">
                            {{Form::email('email','',['class'=>'form-control'])}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        {{Form::label('Username','Username')}}
                        <div class="form-group">
                            {{Form::text('username','',['class'=>'form-control'])}}
                        </div>
                    </div>
                    <div class="col-md-6">
                        {{Form::label('Phone','Contact')}}
                        <div class="form-group">
                            {{Form::text('contact','',['class'=>'form-control'])}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        {{Form::label('password','Password')}}
                        <div class="form-group">
                            {{Form::password('password',['class'=>'form-control'])}}
                        </div>
                    </div>
                    <div class="col-md-6">
                        {{Form::label('confirmPassword','confirm Password')}}
                        <div class="form-group">
                            {{Form::password('confirmPassword',['class'=>'form-control'])}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="modal-footer col-md-12 justify-content-center ">
                        {{Form::submit('Save',['class'=>'cus text-white btn btn-default form-control','style' =>
                        'background-color:#FD876D'])}}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Progress Model  --}}
<div class="modal fade" id="exampleModal02" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="text-dark modal-title" id="exampleModalLabel">Student:Progress</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {!! Form::open(['Action' => 'UserController@index','Method' =>'POST']) !!}
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        {{Form::label('Task','Task')}}
                        <div class="form-group">
                            {{Form::text('task','',['class'=>'form-control','placeholder'=>'Task Name'])}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            {{Form::label('Description','Description')}}
                            {{Form::textarea('desc','',['id'=>'ckeditor','class'=>'form-control','placeholder'=>'Description'])}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="modal-footer col-md-12 justify-content-center ">
                        {{Form::submit('Save',['class'=>'cus text-white btn btn-default form-control','style' =>
                        'background-color:#FD876D'])}}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection