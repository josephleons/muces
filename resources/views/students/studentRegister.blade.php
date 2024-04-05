@extends('layouts.student')
@section('content')
{{-- profile user --}}
<div class="row mx-5">
    <ul class="nav nav-tabs">
        <li class="nav-item" role="presentation">
            <a href="#student" class="nav-link active" id="student-tab" data-toggle="tab" type="button" role="tab"
                aria-controls="person" aria-selected="true">Student Details</a>
        </li>
        <li class="nav-item" role="presentation">
            <a href="#program" class="nav-link" id="program-tab" data-toggle="tab" type="button" role="tab"
                aria-controls="final" aria-selected="false">Program Register</a>
        </li>

        <li class="nav-item" role="presentation">
            <a href="#final" class="nav-link" id="final-tab" data-toggle="tab" type="button" role="tab"
                aria-controls="final" aria-selected="false">Finalize</a>
        </li>
    </ul>
</div>
{{-- personal details --}}
<div class="tab-content  mt-5">
    <div class="tab-pane fade show active" id="student" role="tabpanel" aria-labelledby="student-tab">
        <div class="row mx-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="d-flex card-header" style="background-color:#002E3B">
                        <div class="card-title text-capitalize">
                            <i class="fs-5 bi bi-person-lines-fill m-2 " style="color:#F56565"></i>
                        </div>
                        <h2 class="fs-5 text-white">Student Details</h2>
                    </div>
                    {{-- FORM DATA --}}
                    {!! Form::open(['Action' => 'StudentController@store', 'Method' => 'POST', 'enctype' =>
                    'multipart/form-data']) !!}
                    <div class="row m-3 ">
                    </div>
                    <div class="row m-3">
                        <div class="col-md-4">
                            <label for="validationCustom01" class="form-label">First name</label>
                            <input type="text" class="form-control" placeholder="First Name" id="validationCustom01"
                                name="firstname" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">Last Name</label>
                            <input type="text" class="form-control" placeholder="Last Name" id="validationCustom02"
                                name="lastname" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">Surname</label>
                            <input type="text" class="form-control" placeholder="Surname" id="validationCustom02"
                                name="surname" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="row m-3">
                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">Email</label>
                            <input type="text" class="form-control" placeholder="Email Address" id="validationCustom02"
                                name="email" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom05" class="form-label">Contact</label>
                            <input type="text" class="form-control" placeholder="Contact" id="validationCustom02"
                                name="contact" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please provide a valid District.
                            </div>
                        </div>
                        <div class="row mt-3 border-info">
                            <div class="col-md-4">
                                <label for="validationCustom04" class="form-label">Gender</label>
                                <select name="gender" class="form-select" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a Gender.
                                </div>
                            </div>
                            <div class="ml-1 col-md-5">
                                <label for="validationCustom05" class="form-label">NIDA</label>
                                <input type="text" class="form-control" placeholder="National Identity Number"
                                    id="validationCustom02" name="nida" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide a NIDA.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Working Information --}}
<div class="tab-content  mt-5">
    <div class="tab-pane fade" id="program" role="tabpanel" aria-labelledby="program-tab">
        <div class="row mx-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="d-flex card-header" style="background-color:#002E3B">
                        <div class="card-title text-capitalize">
                            <i class="fs-5 bi bi-person-lines-fill m-2 " style="color:#F56565"></i>
                        </div>
                        <h2 class="fs-5 text-white">Program Registration</h2>
                    </div>
                    <div class="row m-3">
                        <div class="col-md-4">
                            <label for="validationCustom04" class="form-label">Select Your Program</label>
                            <select name="program" class="form-select" required>
                                <option selected disabled value="">Choose...</option>
                                @foreach($programs as $program)
                                     <option value="{{$program->id}}">{{$program->name}}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                                Please select a choose program.
                            </div>
                        </div>
                        <div class="col-8">
                            <small class="text-warning lead">After choose your program kindly Go to your course to
                                enrolled in your courses</small>
                        </div>
                    </div>
                    <div class="row m-3 border-info">
                        <div class="col-md-4">
                            <label for="validationCustom04" class="form-label">Choose Semister</label>
                            <select name="semister" class="form-select" required>
                                <option selected disabled value="">Choose semister...</option>
                                <option value="one">One</option>
                                <option value="two">Two</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a choose program.
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationCustom05" class="form-label">Year Of Studies</label>
                            <input type="number" class="form-control" placeholder="Year Of Studies"
                                id="validationCustom02" name="yearOfstudy" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please provide a valid ward.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- //end tabs one --}}
<div class="tab-pane fade" id="final" role="tabpanel" aria-labelledby="final-tab">
    <div class="row m-3">
        <div class="col-md-12">
            <div class="card">
                <div class="d-flex card-header" style="background-color:#002E3B">
                    <div class="fs-5 card-title text-capitalize">
                        <i class="bi bi-save-fill m-2" style="color:#F56565"></i>
                    </div>
                    <h3 class="fs-5 text-white"> Finalizing Steps</h3>
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                            Agree to terms and conditions
                        </label>
                        <div class="invalid-feedback">
                            You must agree before submitting.
                        </div>
                    </div>
                    <div class="col-12 m-3">
                        {{ Form::submit('submit', [
                        'class' => 'cus text-white btn btn-default',
                        'style' => 'background-color:#FD876D',
                        ]) }}
                        {!! Form::close() !!}
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
@endsection