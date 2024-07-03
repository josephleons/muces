@extends('layouts.admin')
@section('content')
 {{-- course list title --}}
 <div class="container">
<div class="row align-items-center ml-5">
    <div class="col-auto">
        <i class="bi bi-three-dots-vertical textColor"></i>
    </div>
    <div class="col">
        <span class="textColor">
            <a class="nav-link text-muted text-capitalize fs-5 " href="{{ url('#') }}">Manage Quality Assuarance</a>
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
                     {{-- <div class="row m-2">
                        <div class="col-md-12 d-flex justify-content-end">
                            <ul class="nav nav-tabs">
                                <li class="nav-item" role="presentation">
                                    <a href="#adduser" type="button" data-toggle="modal" data-target="#exampleModal03">
                                        <i class="bi bi-plus-circle-dotted fs-5 mr-2 text-danger"></i>Add Evaluator</a>
                                </li>
                            </ul>
                        </div>
                    </div> --}}
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
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($q_assuarances-> isEmpty())
                                        <small>No Q_assuarances Data Available </small>
                                    @else
                                    @foreach($q_assuarances as $index => $q_assuarance)
                                    <tr>
                                        <td>{{$index + 1}}</td>
                                        <td>{{$q_assuarance->username}}</td>
                                        <td>{{$q_assuarance->email}}</td>
                                        <td>{{$q_assuarance->contact}}</td>
                                        <td>{{$q_assuarance->usertype}}</td>
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
                                                            <a class="dropdown-item" href="{{'/evaluators/index'.$q_assuarance->id}}" type="button" data-toggle="modal" data-target="#exampleModal02" ><i class="bi bi-check2-circle text-muted fs-6 m-3"></i>View Questionnaire</a>
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
 </div>
{{-- Progress Model  --}}

@endsection
