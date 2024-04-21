@extends('layouts.evaluator')
@section('content')
 {{-- course list title --}}
<div class="row align-items-center ml-5">
    <div class="col-auto">
        <i class="bi bi-three-dots-vertical textColor"></i>
    </div>
    <div class="col">
        <span class="textColor">
            <a class="nav-link text-muted fs-5 " href="{{ url('#') }}">Evaluations</a>
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
                                <li class="nav-item" role="presentation">
                                    <a href="#adduser" type="button" data-toggle="modal" data-target="#exampleModal03">
                                        <i class="bi bi-plus-circle-dotted fs-5 mr-2 text-danger"></i>Add Evaluation</a>
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
                                        <th>Question</th>
                                        <th>Student</th>
                                        <th>Evaluator</th>
                                        <th>Perfomance Average</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($evaluators-> isEmpty())
                                        <small>No Evaluations Data Available </small>
                                    @else
                                    @foreach($evaluations as $evaluation)
                                    <tr>
                                        <td>{{$evaluation->id}}</td>
                                        <td>{{$evaluation->question}}</td>
                                        <td>{{$evaluation->student}}</td>
                                        <td>{{$evaluation->evaluator_by}}</td>
                                        <td>{{$evaluation->perfomance_aver}}</td>
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
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a class="dropdown-item" href="{{'/evaluators/index'.$evaluation->id}}" type="button" data-toggle="modal" data-target="#exampleModal02" ><i class="bi bi-check2-circle text-muted fs-6 m-3"></i>View Questionnaire</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#addusers" type="button" data-toggle="modal" data-target="#exampleModal03"><i class="bi bi-check2-circle text-muted fs-6 m-3"></i>New Progress</a>
                                                        </li>
                                                        <li>
                                                            <hr class="dropdown-divider">
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
                <h5 class="text-dark modal-title" id="exampleModalLabel">Evaluating Student</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {!! Form::open(['Action' => 'EvaluatorController@index','Method' =>'POST']) !!}
                @csrf
                <div class="row">
                    <div class="col-md-4">
                       <div class="row">
                            <div class="col-12">
                                {{Form::label('Student','Student')}}
                                <div class="form-group">
                                    {{Form::text('student','',['class'=>'form-control'])}}
                                </div>
                            </div>
                            <div class="col-12">
                                {{Form::label('Questionnare','Questionnare')}}
                                <div class="form-group">
                                    {{Form::text('question','',['class'=>'form-control'])}}
                                </div>
                            </div>
                            <div class="col-12">
                                {{Form::label('Course','Course')}}
                                <div class="form-group">
                                    {{Form::text('question','',['class'=>'form-control'])}}
                                </div>
                            </div>
                            <div class="col-12">
                                {{Form::label('Due Date','Due Date')}}
                                <div class="form-group">
                                    {{Form::text('question','',['class'=>'form-control'])}}
                                </div>
                            </div>
                            <div class="col-12">
                                {{Form::label('Status','Status')}}
                                <div class="form-group">
                                  <button class="form-control text-success">Complete</button>
                                </div>
                            </div>
                       </div>
                    </div>
                    <div class="col-8">
                        <div class="form-group">
                            {{Form::label('Description','Description')}}
                            {{Form::textarea('desc','',['id'=>'ckeditor','class'=>'form-control','placeholder'=>'Description'])}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="modal-footer col-md-12 justify-content-center ">
                        {{Form::submit('Save',['class'=>'cus text-white btn btn-default','style' =>
                        'background-color:#FD876D'])}}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection