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
      <a class="nav-link text-muted text-capitalize fs-5 " href="{{ url('#') }}">Manage User</a>
    </span>
  </div>
  <hr class="ml-5 mt-2 textColor">
</div>
{{-- user list --}}
<div id="user" class="ml-5">
  <div class="tab-content  mt-5">
    <div class="tab-pane active" id="user" role="tabpanel" aria-labelledby="user-tab">
      <div class="card">
        <div class="card-header" style="background-color:#002E3B">
          <div class="row m-0">
            <div class="col-md-12 d-flex justify-content-end">
              <ul class="nav nav-tabs">
                <li class="nav-item" role="presentation">
                  <a href="#adduser" class="nav-link" type="button" data-toggle="modal" data-target="#exampleModal03">
                    <i class="bi bi-plus-circle-dotted mr-1 text-danger"></i>User</a>
                </li>
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
                    <th>Username</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Roles</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @if($users-> isEmpty())
                  <small>No users Data Available </small>
                  @else
                  @foreach($users as $index => $user)
                  <tr>
                    <td>{{$index + 1}}</td>
                    <td>{{$user->username}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->contact}}</td>
                    <td>{{$user->usertype}}</td>
                    <td>
                      <span>
                        <a onclick="return confirm('Are you sure you wnat to delete this entry?')"
                          href="{{url('delete/'.$user->id)}}" style="background-color:#FD876D"
                          class="text-white btn btn-default">Delete
                        </a>
                      </span>
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
{{-- Progress Model --}}
<div class="modal fade" id="exampleModal03" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="text-dark modal-title" id="exampleModalLabel">Add New User</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        {!! Form::open(['route' => 'listEvaluator', 'method' => 'POST']) !!}
        @csrf
        <div class="row">
          <div class="col-md-6">
            {{Form::label('email','Email Address')}}
            <div class="form-group">
              {{Form::email('email','',['class'=>'form-control','placeholder'=>'Email Address'])}}
            </div>
          </div>
          <div class="col-6">
            {{ Form::label('Usertype', 'User Role') }}
            <select name="usertype" class="form-select" aria-label="User Type">
              <option value="" disabled selected>User Type</option>
              <option value="Q_assurance">Quality Assurance</option>
              <option value="Dean">Dean of Faculties</option>
              <option value="Student">Student</option>
            </select>
            @error('question')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            {{Form::label('Username','Username')}}
            <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username" id="validationCustom01"
                  name="username" required>
                  @error('username')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="col-md-6">
            <input type="text" class="form-control" placeholder="Contact" id="validationCustom01"
                  name="contact" required>
                  @error('contact')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            {{Form::label('password','Password')}}
            <div class="form-group">
              {{Form::password('password',['class'=>'form-control','placeholder'=>'New Password'])}}
            </div>
          </div>
          <div class="col-md-6">
            {{Form::label('confirmPassword','confirm Password')}}
            <div class="form-group">
              {{Form::password('confirmPassword',['class'=>'form-control','placeholder'=>'Confirm Password'])}}
            </div>
          </div>
        </div>
        <div class="row">
          <div class="modal-footer col-md-12 justify-content-center ">
            {{Form::submit('save',['class'=>'cus text-white btn btn-default form-control','style' =>
            'background-color:#FD876D'])}}
          </div>
        </div>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
</div>
@endsection