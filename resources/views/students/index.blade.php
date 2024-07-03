@extends('layouts.student')
@section('content')
@if ($student)
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="text-capitalize text-muted fs-5"><strong>Student Details</strong></h2>
        </div>
    </div>
    <div class="card p-4" >
        <div class="row text-muted justify-contect-center d-flex" style="color:#002E3B">
            <div class="col-md-4 text-uppercase">
                <h2 class="lead fs-4 "><strong>full name</strong></h2>
                <a class="lead textColor2" href="#"><strong>{{ $student->fullname }} </strong></a>
            </div>
            <div class="col-md-4 text-uppercase">
                <h2 class="lead fs-4"><strong>program</strong></h2>
                <a class="lead textColor2" href="#"><strong> {{ $student->program }}</strong></a>
            </div>
        </div>
    </div>
    <div class="pt-5"></div>
   <div class="card p-4">
        <h3 class="lead text-muted"><strong>Other Info</strong></h3>
        <div class="row text-capitalize text-muted">
            <div class="col-md-4">
                <h2 class="lead fs-4 "><strong>nin</strong></h2>
                {{$student->nida}}
                <hr><i class="fas fa-edit"></i>
            </div>
            <div class="col-md-4">
                <h2 class="lead fs-4"><strong>Gender</strong></h2>
                {{$student->gender}}
                <hr>
            </div>
            <div class="col-md-4">
                <h2 class="lead fs-4"><strong>Birth Date</strong></h2>
                {{$student->dob}}
                <hr>
            </div>
        </div>
    </div>
</div>
@endif
@endsection