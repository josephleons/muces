@extends('layouts.student')
@section('content')
<div class="row align-items-center ml-5">
    <div class="col-auto">
        <i class="bi bi-three-dots-vertical textColor"></i>
    </div>
    <hr class="ml-5 mt-2 textColor">
</div>
<div class="card p-1" style="margin-left:10px">
<div class="row lead align-items-center ml-5">
            <div class="col-12 col-sm-12 col-xm-12 ">
                <table id="example" class="display table table-bordereless" style="width:100%">
                    <thead class="table-muted">
                        <tr class="text-muted text-capitalize fs-6">
                            <th>Registration Number</th>
                            <th>Student Name</th>
                            <th>Program</th>
                            <th>Semister</th>
                            <th>Accademic year</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-capitalize">
                        @foreach ($studentprogram as $students)
                        <tr class="text-muted fs-5">
                            <td>{{$students->registration_no}}</td>
                            <td>{{$students->fullname}}</td>
                            <td>{{$students->program}}</td>
                          {{-- @foreach ($programs as $program)
                            <td>{{$program->program}}</td>
                          @endforeach --}}
                            <td>{{$students->semister}}</td>
                            <td>{{$students->accademic_year}}</td>
                           
                            <td>
                                <span>
                                    <div class="btn-group">
                                        <button class="text-white btn btn-default" type="button" style="background-color:#FD876D">
                                            Action
                                        </button>
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
@endsection
