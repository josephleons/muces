@extends('layouts.dean')
@section('content')
<div class="modal-header">
    <h5 class="text-dark modal-title" id="exampleModalLabel">Edit Department</h5>
</div>
<div class="modal-body">
    {{-- {!! Form::open(['route' => ['departments.update',$department->id], 'method' => 'PUT']) !!} --}}
    {!! Form::open(['Action' => 'DepartmentController@update', 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
    <div class="col-md-12 m-2">
        <div class="form-group">
            {{Form::label('Faculty','Faculty Name')}}
            <select name="faculty" class="form-select" aria-label="Select your Faculty">
                <option value="#">{{$department->faculty}}</option>
            </select>
        </div>
    </div>
    <div class="col-md-12 m-2">
        <div class="form-group">
            {{Form::label('','Department Name:')}}
            {{Form::text('department',$department->department,['class'=>'form-control','placeholder'=>'Department Name
                        '])}}
        </div>
    </div>
    <div class="col-md-12 m-2">
        <div class="form-group">
            {{Form::label('email','Email Address')}}
            {{Form::text('email',htmlspecialchars($department->email),['class'=>'form-control','placeholder'=>'Email
                        '])}}
        </div>
    </div>
    <div class="col-md-12 m-2">
        <div class="form-group">
            {{Form::label('contact','Contact')}}</br>
            {{Form::text('contact',$department->contact,['class'=>'form-control','placeholder'=>'Contact'])}}
        </div>
    </div>
    <div class="col-md-12 m-2">
        <div class="form-group">
            {{Form::label('Description','Description')}}
            {{Form::textarea('description', strip_tags($department->description),['id'=>'ckeditor','class'=>'form-control','placeholder'=>'Description'])}}
        </div>
    </div>
    <div class="modal-footer col-md-12 justify-con tent-center">
        {{Form::submit('Save',['class'=>'btn btn-default text-white fs-6 form-control','style' => 'background-color:#FD876D'])}}
    </div>
    {!! Form::close() !!}
</div>

@endsection
