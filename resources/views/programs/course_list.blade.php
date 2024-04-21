@extends('layouts.student')
@section('content')
<div class="col-6 lead">
    <div class="row">
        <div class="col-3">
            Semister I :
        </div>
        <div class="col-9">
            <h4 class="lead mb-5">Program: {{$program->program}}</h4>
            <ul class="list-group list-group-numbered">
                @foreach($courses as $course)
                 <li class="list-group-item d-flex justify-content-between">
                    {{$course->course}}
                    <span><input class="form-check-input me-1" type="checkbox" value="#"></span>
                  </li>
                  @endforeach
              </ul>
        </div>
    </div>
</div>
@endsection