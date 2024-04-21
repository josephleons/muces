@extends('layouts.student')
@section('content')
<div id="user" class="ml-5">
    <div class="tab-content  mt-5">
        <div class="tab-pane active" id="user" role="tabpanel" aria-labelledby="user-tab">
            <div class="card">
                <div class="card-header" style="background-color:#002E3B">
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-6 col-xm-12 ">
                            <table id="example" class="display table table-bordered" style="width:100%">
                                <thead class="table-muted">
                                    <tr class="text-muted" style="text-transform: capitalize;font-size:14px;">
                                        <th>S/N</th>
                                        <th>AssignedTo</th>
                                        <th>Question</th>
                                        <th>Code</th>
                                        <th>Due Date</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($student->evaluationForm as $evaluation)
                                    <tr>
                                        <td>{{$evaluation->id}}</td>
                                        <td>{{$student->fullname}}</td>
                                        <td>{{$evaluation->question}}</td>
                                        <td>{{$evaluation->course}}</td>
                                        <td>{{$evaluation->due_date}}</td>
                                        <td class="text-info">{{$evaluation->status}}</td>
                                        <td>
                                            <span>
                                                <div class="btn-group">
                                                    <a class="dropdown-item" href="{{url('students/show/'.$evaluation->id)}}"" type="button">
                                                        <i class="bi bi-view-list text-muted fs-6 m-3"></i>add progress
                                                    </a>
                                                </div>
                                            </span>
                                        </td>
                                    </tr>
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
@endsection