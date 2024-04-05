@extends('layouts.student')
@section('content')
@if ($student)
<div class="container-flex">
    <div class="row justify-contect-center d-flex">
        <div class="col-12"style="margin-left:120px">
            <h2 class="text-capitalize text-muted fs-5 my-4"><strong>Student details</strong></h2>
        </div>
    </div>
    <div class="card p-4"  style="margin-left:120px">
    <div class="row text-muted justify-contect-center d-flex" style="color:#002E3B">
            <div class="col-md-4 text-uppercase">
                <h2 class="lead fs-4 "><strong>full name</strong></h2>
                <a class="lead textColor2" href="#"><strong>{{ $student->firstname }} {{ $student->lastname }} {{ $student->surname }}</strong></a>
            </div>
            <div class="col-md-4 text-uppercase">
                <h2 class="lead fs-4"><strong>program</strong></h2>
                <a class="lead textColor2" href="#"><strong>{{ $student->program }}</strong></a>
            </div>
            <div class="col-md-4 text-uppercase">
                <h2 class="lead fs-4"><strong>semister</strong></h2>
                <a class="lead textColor2" href="#"><strong>{{ $student->semister }}</strong></a>
            </div>
        </div>
</div>
@else
<div class="row text-muted justify-content-center d-flex w-100 border-info" style="color:#002E3B">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <h2 class="lead fs-4 text-center text-uppercase p-4"style="color:coral"><i class="bi bi-person fs-2"></i></h2>
                </div>
                <div class="row text-center">
                    <small class="lead fs-5 text-capitalize" style="color: coral">No record for this year </small>
                </div>
            </div>
        </div>
    </div>
    </div></div>
@endif
@endsection