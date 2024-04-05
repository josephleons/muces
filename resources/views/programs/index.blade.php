@extends('layouts.student')
@section('content')
<div class="row align-items-center ml-5">
    <div class="col-auto">
        <i class="bi bi-three-dots-vertical textColor"></i>
    </div>
    <hr class="ml-5 mt-2 textColor">
</div>
<div class="card p-1" style="margin-left:120px">
<div class="row lead align-items-center ml-5">
        <div class="col-2">
            <div class="form-group" style = 'color:#FD876D'>    
            @if($programs->isEmpty())
                 <p>No Program related to course</p>
             @else
            @foreach($programs as $program)
                    {{$program->description}}
                    @endforeach
                @endif
            </div>
        </div>
            <div class="col-10 col-sm-6 col-xm-12 ">
                <table id="example" class="display table table-bordereless" style="width:100%">
                    <thead class="table-muted">
                        <tr class="text-muted" style="text-transform: capitalize;font-size:14px;">
                            <th>S/N</th>
                            <th>Course</th>
                            <th>Code</th>
                            <th>Type</th>
                            <th>Lecturer</th>
                            <th>Credit</th>
                            <th>Registered by</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Development Perspectives</td>
                            <td>DST 100</td>
                            <td>None Core</td>
                            <td>Elihaika Kengalo Joseph</td>
                            <td class="text-info">12.00</td>
                            <td>Department</td>
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
                                    </div>
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
     
    </div> 


</div>
@endsection
