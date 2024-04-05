@extends('layouts.dean')
@section('content')
<div class="modal-body">
    <ul class="list-group list-group">
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto text-muted pt-3">
                <div class="text-capitalize row mt-2">
                    <div class="col-4">
                        <div class="fw-bold">faculty: </div>
                    </div>
                        <div class="col-8">
                            <small class="text-muted text-info">{{ $department->faculty}}</small>
                        </div>
                </div>
                <div class="row mt-2 text-capitalize">
                    <div class="col-4">
                        <div class="fw-bold">Name</div>
                    </div>
                    <div class="col-8">
                        <small class="text-muted text-info">{{$department->name}}</small>
                    </div>
                </div>
                <div class="row mt-2 text-capitalize">
                    <div class="col-4">
                        <div class="fw-bold">Email Address</div>
                    </div>
                    <div class="col-8">
                        <small class="text-muted text-info">{{$department->email}}</small>
                    </div>
                </div>
                <div class="row mt-2 text-capitalize">
                    <div class="col-4">
                        <div class="fw-bold">Contact</div>
                    </div>
                    <div class="col-8">
                        <small class="text-muted text-info">+{{$department->contact}}</small>
                    </div>
                </div>
                <div class="row mt-2 text-capitalize">
                    <div class="col-4">
                        <div class="fw-bold">Description </div>
                    </div>
                    <div class="col-8">
                        <small class="text-muted text-info">
                          {{$department->description}}
                        </small>
                    </div>
                </div>
                <hr class="w-100 mt-2 textColor">
            </div>
            <i class="bi bi-three-dots-vertical"></i>
        </li>
    </ul>
</div>
<div class="row m-2">
    <div class="col-md-12 d-flex justify-content-end">
        <ul class="nav nav-tabs">
            <li class="nav-item" role="presentation">
                <a href="{{ url('departments/edit/'.$department->id) }}"  type="button">
                    <i class="text-muted fs-6 m-3 bi bi-pen"></i>Edit</a>
            </li>
        </ul>
    </div>
</div>
@endsection