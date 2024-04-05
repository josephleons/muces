@extends('layouts.student')
@section('content')
<div class="col-6 lead">
    <div class="row">
        <div class="col-3">
            Semister I :
        </div>
        <div class="col-9">
            <form method="POST" action="{{ route('enroll.store') }}">
            @csrf
            <ul class="list-group list-group-numbered">
                @foreach($courses as $course)
                 <li class="list-group-item d-flex justify-content-between">
                    <label >{{$course->course}} </label>
                    <span><input class="form-check-input me-1" name="courses[]" value="{{ $course->id }}" type="checkbox"></span>
                  </li>
                  @endforeach
              </ul>
              <button type="submit" class="mt-5 btn btn-default text-white fs-6 form-control" style = 'background-color:#FD876D'>Enroll</button>
        </div>
    </div>
</div>
@endsection