@extends('layouts.evaluator')
@section('content')
{{-- course list title --}}
<div class="container">
    <div class="row align-items-center">
        <div class="col-auto">
            <i class="bi bi-three-dots-vertical textColor"></i>
        </div>
        <div class="col">
            <span class="textColor">
                <a class="nav-link text-muted fs-5 " href="{{ url('#') }}">Student: Responses List </a>
            </span>
        </div>
        <hr class="ml-5 mt-2 textColor">
    </div>
    {{-- Response list title --}}
    <div id="user">
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
                                        <tr class="text-muted text-capitalize"
                                            style="text-transform: capitalize;font-size:14px;">
                                            <th>S/N</th>
                                            <th>Question</th>
                                            <th>Response</th>
                                            <th>Due Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($evaluations-> isEmpty())
                                        <small>No evalution Available </small>
                                        @else
                                        @foreach($evaluations as $evaluation)
                                        <tr>
                                            <td>{{$evaluation->id}}</td>
                                            <td>{{$evaluation->question}}</td>
                                            <td>
                                                <button class="btn btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#response{{$evaluation->id}}">view response</button>
                                            </td>
                                            <td>{{$evaluation->due_date}}</td>
                                            <td>
                                                <span>
                                                    <div class="btn-group">
                                                        <button class="text-white btn btn-default" type="button"
                                                            style="background-color:#FD876D">
                                                            Action
                                                        </button>
                                                        <button type="button"
                                                            class="btn btn-sm btn-default dropdown-toggle dropdown-toggle-split"
                                                            data-bs-toggle="dropdown" aria-expanded="false"
                                                            style="background-color:#FD876D">
                                                            <span class="visually-hidden">Toggle Dropdown</span>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a class="dropdown-item"
                                                                    href="{{'/evaluators/index'.$evaluation->id}}"
                                                                    type="button" data-toggle="modal"
                                                                    data-target="#exampleModal02"><i
                                                                        class="bi bi-check2-circle text-muted fs-6 m-3"></i>View
                                                                    Response</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </span>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="response{{$evaluation->id}}">
                                            <div class="modal-dialog modal-dialog-center modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div class="container">
                                                            <div class="row mb-3 textColor">
                                                                <div class="col-md-2">
                                                                    Response ID
                                                                </div>
                                                                <div class="col-md-8">
                                                                    Response
                                                                </div>

                                                                <div class="col-md-2">
                                                                    Status
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <hr>
                                                            </div>
                                                            @foreach($evaluation->responses as $response)
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    {{$response->id}}
                                                                </div>
                                                                <div class="col-md-8">
                                                                    {{strip_tags($response->response)}}
                                                                   
                                                                </div>
                                                                <div class="col-md-2 text-success ">
                                                                    <a class="btn btn-success">{{$response->status}}</a>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <hr>
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
</div>
@endsection