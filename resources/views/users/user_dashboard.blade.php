@extends('layouts.admin')
@section('content')
<div class="container">
  <div class="row mb-3">
    <div class="col-md-6 d-flex justify-content-start ml-5">

      <ul class="nav nav-tabs">
        <li class="nav-item" role="presentation">
          <p style="font-family:sans-serif">Click here to view posts!</p>
          <a data-toggle="collapse" data-target="#post" href="#" style="text-decoration:none">
            <i class="bi bi-mailbox" style="color:#F56565;"></i> Posts </a>
        </li>
      </ul>
    </div>
    <!-- Button trigger modal -->
    <div class="d-flex justify-content-end ml-5">
      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
        <i class="bi bi-plus-circle-dotted" style="font-size:1em;"></i>Post
      </button>
    </div>
  </div>
  {{-- table content --}}

  <div id="post">
    <div class="row ml-3">
      <div class="col-lg-12 col-sm-6 col-xm-12 ">
        <div class="table-responsive">
          <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead class="table-light">
              <tr>
                <th>ID</th>
                <th>company Name</th>
                <th>Job Title</th>
                <th>Location</th>
                <th>Maximum Applicant</th>
                <th>UserId</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @if(count($posts)> 0)
              @foreach($posts as $post)
              <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->company_name}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->location}}</td>
                <td>{{$post->max_applicant}}</td>
                <td>{{$post->user_id}}</td>
                <td>
                  <span>
                    <a onclick="return confirm('Are you sure you wnat to delete this entry?')"
                      href="{{url('delete/'.$post->id)}}"><em class="bi bi-trash" style="color:#F56565;"></em>Delete
                    </a>
                  </span>
                  <span>
                    <a href="{{url('edit/'.$post->id)}}"><em class="bi bi-alarm" style="color:#F56565;"></em>Edit
                    </a>
                  </span>
                </td>
              </tr>
              @endforeach
              @else
              <p>no user data found</p>
              @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  {{-- end content --}}
  {{-- <div class="row">
    <div class="d-flex justify-content-start col-md-12"> --}}
      {{-- <ul class="nav nav-tabs">
        <li class="nav-item" role="presentation">
          <a href="#addpost" class="btn btn-default text-light" style="background-color:#F56565;" id="addpost-tab"
            data-toggle="model" type="button" data-target="#exampleModal" role="tab" aria-selected="true"
            aria-controls="addpost">
            <i class="bi bi-plus" style="font-size:1em;"></i>Add</a> --}}
          <!-- Button trigger modal
              
          </li>
        </ul>       
        </div>
      </div>-->
          {{-- end-top-post-table --}}
          <div class="row m-5">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="d-flex justify-content-start col-md-12">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                  Add Post
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New Post</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                      </div> --}}
                      <div class="modal-body">
                        {!! Form::open(['Action' => 'PostsController@store','Method'
                        =>'POST','enctype'=>'multipart/form-data']);!!}
                        <div class="col-md-12 m-2">
                          <div class="form-group">
                            {{Form::label('title','Job Title')}}
                            {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
                          </div>
                        </div>
                        <div class="col-md-12 m-2">
                          <div class="form-group">
                            {{Form::label('location','Job Location')}}
                            {{Form::text('location','',['class'=>'form-control','placeholder'=>'Job Location'])}}
                          </div>
                        </div>
                        <div class="col-md-12 m-2">
                          <div class="form-group">
                            {{Form::label('body','DUTIES/DESCRIPTION')}}
                            {{Form::textarea('body','',['id'=>'ckeditor','class'=>'form-group','placeholder'=>'Body'])}}
                          </div>
                        </div>
                        <div class="col-md-6 m-2">
                          <div class="form-group">
                            {{Form::label('max_applicant','Maximum applicant')}}
                            {{Form::number('max_applicant','',['class'=>'form-control','placeholder'=>'Maximum
                            applicants'])}}
                          </div>
                        </div>
                        <div class="col-md-12 m-2">
                          <div class="form-group">
                            {{Form::label('company_name','Company Name')}}
                            {{Form::text('company_name','',['class'=>'form-control'])}}
                          </div>
                        </div>
                        <div class="col-md-6 m-2">
                          <div class="form-group">
                            {{Form::label('company_logo','Company Logo')}}</br>
                            {{Form::file ('company_logo')}}
                          </div>
                        </div>
                        <div class="col-md-12 m-2">
                          <div class="form-group">
                            <div class="card-header" style="color:#F56565">
                              <span class="lead"><strong>price<strong></span>
                              <span class="lead" style="float: right ;color:#F56565"><strong>$389</strong></span>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer col-md-12 justify-content-center ">
                          {{Form::submit('Submit',['class'=>'cus btn btn-danger form-control'])}}
                          <span class="d-flex rounded-pill badge bg-secondary" type="button"
                            data-dismiss="modal">X</span>
                        </div>
                        {!! Form::close() !!}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
  </div>


  @endsection