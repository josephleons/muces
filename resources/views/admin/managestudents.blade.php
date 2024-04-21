@extends('layouts.admin')
@section('content')
 {{-- course list title --}}
<div class="row align-items-center ml-5">
    <div class="col-auto">
        <i class="bi bi-three-dots-vertical textColor"></i>
    </div>
    <div class="col">
        <span class="textColor">
            <a class="nav-link text-muted text-capitalize fs-5 " href="{{ url('#') }}">Manage Students</a>
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
                                        <i class="bi bi-plus-circle-dotted fs-5 mr-2 text-danger"></i>Add student</a>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-6 col-xm-12 ">
                            <table id="example" class="display table table-bordereless" style="width:100%">
                                <thead class="table-muted">
                                    <tr class="text-muted" style="text-transform: capitalize;font-size:14px;">
                                        <th>S/N</th>
                                        <th>Full Name</th>
                                        <th>Registration_No</th>
                                        <th>Program</th>
                                        <th>Accademic year</th>
                                        <th>Semister</th>
                                        <th>Gender</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="text-capitalize">
                                    @if($students-> isEmpty())
                                        <small>No students Data Available </small>
                                    @else
                                    @foreach($students as $index => $student)
                                    <tr>
                                        <td>{{$index + 1}}</td>
                                        <td>{{$student->fullname}}</td>
                                        <td class="text-info">{{$student->registration_no}}</td>
                                        <td>{{$student->program->program}}</td>
                                        <td>{{$student->accademic_year}}</td>
                                        <td>{{$student->semister}}</td>
                                        <td>{{$student->gender}}</td>
                                        <td>
                                            <span>
                                                <div class="btn-group">
                                                    <button class="text-white btn btn-default" type="button" style="background-color:#FD876D">
                                                        View
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a class="dropdown-item" href="{{'/evaluators/index'.$student->id}}" type="button" data-toggle="modal" data-target="#exampleModal02" ><i class="bi bi-check2-circle text-muted fs-6 m-3"></i>View Department</a>
                                                        </li>
                                                    </ul>
                                                </div>
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
                <h5 class="text-dark modal-title" id="exampleModalLabel">Add New Student</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {!! Form::open(['Action' => 'UserController@store','Method' =>'POST']) !!}
                @csrf
                <div class="row">
                  <div class="col-md-6">
                    {{Form::label('email','Email Address')}}
                    <div class="form-group">
                      {{Form::email('email','',['class'=>'form-control','placeholder'=>'Email Address'])}}
                    </div>
                    @error('email')
                    <div class="mt-2 alert alert-danger">{{ $message }}</div>
                     @enderror
                  </div>
                  <div class="col-6">
                    {{ Form::label('Usertype', 'User Role') }}
                    <select name="usertype" class="form-select" aria-label="User Type">
                        <option value="" disabled selected>User Type</option>
                        <option value="Student">Student</option>
                    </select>
                    @error('usertype')
                        <div class="mt-2 alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    {{Form::label('Username','Username')}}
                    <div class="form-group">
                      {{Form::text('username','',['class'=>'form-control','placeholder'=>'Username'])}}
                    </div>
                    @error('username')
                        <div class="mt-2 alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="col-md-6">
                    {{Form::label('Contact','Contact')}}
                    <div class="form-group">
                      {{Form::text('contact','',['class'=>'form-control','placeholder'=>'Contact'])}}
                    </div>
                    @error('contact')
                     <div class="mt-2 alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    {{Form::label('password','Password')}}
                    <div class="form-group">
                      {{Form::password('password',['class'=>'form-control','placeholder'=>'New Password'])}}
                    </div>
                        @error('password')
                        <div class="mt-2 alert alert-danger">{{ $message }}</div>
                     @enderror
                  </div>
                  <div class="col-md-6">
                    {{Form::label('confirmPassword','confirm Password')}}
                    <div class="form-group">
                      {{Form::password('confirmPassword',['class'=>'form-control','placeholder'=>'Confirm Password'])}}
                    </div>
                    @error('confirmPassword')
                    <div class="mt-2 alert alert-danger">{{ $message }}</div>
                     @enderror
                  </div>
                </div>
                <div class="row">
                <div class="modal-footer col-md-12 justify-content-center ">
                  {{Form::submit('Save',['class'=>'cus text-white btn btn-default form-control','style' => 'background-color:#FD876D'])}}
                </div>
                {!! Form::close() !!}
              </div>
            </div>
        </div>
    </div>
</div>

@endsection
