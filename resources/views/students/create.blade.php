@extends('layouts.student')
@section('content')
<div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="text-dark modal-title" id="exampleModalLabel">New Response</h5>
                <a class="text-danger" type="button" href="{{url('students/questionnaire')}}">Cancel</a>
            </div>
            <div class="modal-body">
                {!! Form::open(['Action' => 'ResponseController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                @csrf
                <div class="row">
                    <div class="col-md-4">
                       <div class="row">
                            <div class="col-12 mt-3">
                                <div class="form-group">
                                   <h2 class="lead">Questionnaire Type</h2>
                                    <p class="fs-6 textColor">{{$question->question}}</p>
                                </div>
                            </div>
                            {{-- Hidden Id store to Response table  --}}
                            <input type="hidden"class="fs-6 textColor" name="question_id" value="{{$question->id}}">
                            <div class="col-12 mt-3">
                                <h2 class="lead">Course Name</h2>
                                <div class="form-group">
                                    <p class="fs-6 textColor">{{$question->course}}</p>
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <h2 class="lead">Status</h2>
                                <div class="form-group">
                                    <label class="text-primary">Task Complete</label>
                                    <span>
                                        <input class="form-check-input ml-5" name="status" value="Complete" type="checkbox">
                                    </span>
                                    @error('status')
                                    <div>{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                            <small class="mt-3">Double-check if asked question completed and submit</small>
                       </div>
                    </div>
                    <div class="col-8">
                        <div class="form-group">
                            {{Form::label('Responses','Progress Description')}}
                            {{Form::textarea('response','',['id'=>'ckeditor','class'=>'form-control','placeholder'=>'Responses'])}}
                        </div>
                        @error('response')
                        <div>{{ $message }}</div>
                    @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="modal-footer col-md-12 justify-content-center ">
                        {{Form::submit('submit',['class'=>'cus text-white btn btn-default','style' =>
                        'background-color:#FD876D'])}}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection