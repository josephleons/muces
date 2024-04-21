@extends('layouts.admin')
@section('content')
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="textColor modal-title m-2" id="exampleModalLabel">Student: Evaluation Form</h5>
        </div>
        <div class="modal-body m-5">
            <form method="POST" action="{{ route('evaluators.store') }}">
            {{-- {!! Form::open(['Action' => 'EvaluatorController@create','Method' =>'GET']) !!} --}}
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {{ Form::label('question', 'Questionnaire Type') }}
                        <select name="question" class="form-select" aria-label="Questionnaire Type">
                            <option value="" disabled selected>Questionnaire Type</option>
                            <option value="Teaching Methodology">Teaching Methodology</option>
                            <option value="Course Understanding">Course Understanding</option>
                        </select>
                        @error('question')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {{ Form::label('course', 'Course') }}
                        <select name="course" class="form-select" aria-label="Course">
                            @if($courses->isEmpty())
                                <option value="" disabled selected>No Course available</option>
                            @else
                                <option value="" disabled selected>Course</option>
                                @foreach($courses as $course)
                                    <option value="{{ $course->id }}">{{ $course->course }}</option>
                                @endforeach
                            @endif
                        </select>
                        @error('course')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {{Form::label('student','Dedicate Student')}}
                        <select name="student" class="form-select" aria-label="Student">
                            @if($students->isEmpty())
                                <option value="" disabled selected>No students available</option>
                            @else
                                <option value="" disabled selected>Select a student</option>
                                @foreach($students as $student)
                                    <option value="{{ $student->id }}">{{ $student->fullname }}</option>
                                @endforeach
                            @endif
                        </select>
                        @error('student')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {{Form::label('due_date','Due Date')}}
                        {{ Form::date('due_date', \Carbon\Carbon::now(), ['class' => 'form-control']) }}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        {{Form::label('Description','Description')}} <br>
                        <smal class="fs-6 text-muted text-capitalize">Provide short description about what You need to capture From student</smal>
                        {{Form::textarea('description','',['id'=>'ckeditor','class'=>'form-control mt-2','placeholder'=>'Provide short description about what You need to capture'])}}
                    </div>
                    @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
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
@endsection