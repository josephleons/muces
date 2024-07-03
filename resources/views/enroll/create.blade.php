@extends('layouts.student')
@section('content')
<div class="col-6 lead">
    <div class="row mb-5">
        <div>
            <h4 class="lead text-muted">Semister:Course Enroll</h4>
        </div>
    </div>
</div>
<table id="example" class="display table table-bordereless" style="width:100%" style="margin-left:10px">
    <form method="POST" action="{{ route('enroll.store') }}">
    @csrf
    <thead class="text-muted">
        <th>Course name</th>
        <th>Course code</th>
        <th>Course type</th>
        <th>Lecture name</th>
        <th>Credit</th>
        <th>CheckBox</th>
        <th>Action</th>
    </thead>
    <tbody>
        @if($courses->isEmpty())
        <small>No course Avilable data</small>
        @else
        @foreach($courses as $course)
        <tr>
            <td>{{$course->course_name}} </td>
            <td>{{$course->course_code}} </td>
            <td>{{$course->course_type}} </td>
            <td>{{$course->lecturer}} </td>
            <td>{{$course->credit}} </td>
            <td> <span><input class="form-check-input me-1" name="courses[]" value="{{ $course->id }}" type="checkbox"></span></td>
            <td>
                <button type="submit" class="btn btn-default text-white fs-6 form-control" style = 'background-color:#FD876D'>Enroll</button>
            </td>
        </tr>
        @endforeach
        @endif
    </tbody>
</table>
@endsection