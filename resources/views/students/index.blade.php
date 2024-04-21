@extends('layouts.student')

@section('content')

@if ($student)
<div class="container-flex">
    <div class="row justify-content-center">
        <div class="col-12" style="margin-left: 120px">
            <h2 class="text-capitalize text-muted fs-5 my-4"><strong>Student Details</strong></h2>
        </div>
    </div>

    <div class="card p-4" style="margin-left: 120px">
        <div class="row text-muted justify-contect-center d-flex" style="color:#002E3B">
                <div class="col-md-4 text-uppercase">
                    <h2 class="lead fs-4 "><strong>full name</strong></h2>
                    <a class="lead textColor2" href="#"><strong>{{ $student->fullname }} </strong></a>
                  
                </div>
                
                <div class="col-md-4 text-uppercase">
                    <h2 class="lead fs-4"><strong>semister</strong></h2>
                    <a class="lead textColor2" href="#"><strong>{{ $student->semister }}</strong></a>
                </div>

                <div class="col-md-4 text-uppercase">
                    <h2 class="lead fs-4"><strong>program</strong></h2>
                    <a class="lead textColor2" href="#"><strong> {{ $student->program }}</strong></a>
                </div>
            </div>
    </div>
</div>
@endif

@endsection
