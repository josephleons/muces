@extends('layouts.admin')
@section('content')
{{-- button to add user --}}
<div class="row m-2">
  <div class="col-md-12 d-flex justify-content-end">
    <ul class="nav nav-tabs">
      <li class="nav-item" role="presentation">
        <a href="#adduser" type="button" data-toggle="modal" data-target="#exampleModal">
          <i class="bi bi-plus-circle-dotted fs-5 mr-2 text-danger"></i></a>
      </li>
    </ul>
  </div>
</div>
{{-- display user and other tabs --}}
<ul class="nav nav-tabs text-capitalize">
  <li class="nav-item" role="presentation">
    <a href="#" class="nav-link" id="user-tab" data-toggle="tab" data-target="#user" type="button" role="tab"
      aria-controls="user" aria-selected="true">Registered Users</a>
  </li>
</ul>
{{-- <div id="user"> --}}
  <div class="tab-content  mt-5">
    <div class="tab-pane active" id="user" role="tabpanel" aria-labelledby="user-tab">
      <div class="card-header">
      @include('inc.messages')
      <div class="row ml-3">
        <div class="col-lg-12 col-sm-6 col-xm-12 ">
          <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
              <thead class="table-light">
                <tr class="text-dark" style="text-transform: capitalize;font-size:14px;">
                  <th>S/N</th>
                  <th>Username</th>
                  <th>Role</th>
                  <th>Created</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @if(count($users)> 0)
                @foreach($users as $user)
                <tr>
                  <td>1</td>
                  <td>{{$user->username}}</td>
                   @foreach($user->roles as $role)
                    <td>{{$role->role_type}}</td>
                  @endforeach
                  <td>{{$user->created_at}}</td>
                  <td>
                    <span>
                      <a onclick="return confirm('Are you sure you wnat to delete this entry?')"
                        href="{{url('delete/'.$user->id)}}"
                          style="color:#F56565;font-size:18px;"class="btn btn-danger text-white">Delete
                      </a>
                    </span>
                  </td>
                </tr>
                @endforeach
                @else
                <p class="alert alert-success text-muted">no  available records</p>
                @endif
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  {{-- end tabs one --}}

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        @include('inc.messages')
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
          {{Form::submit('Save',['class'=>'cus text-white btn btn-default form-control','style' => 'background-color:#85149E'])}}
        </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
</div>
</div>
<div class="row" style="padding-top:100%">
  @include("inc.footer")
</div>
</div>
@endsection