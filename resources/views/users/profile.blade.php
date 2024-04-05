@extends('layouts.admin')
@section('content')

{{-- <div class="container"> --}}
    <div class="row text-center ml-5 pt-2">
        <div class="col-md-12">
            <div class="px-2">
                <div class="text-capitalize">
                    <i class="bi bi-person-circle fs-1"></i>
                </div>
                <div class="card-body">
                    <p class="text-black">JOSEPH LEONARD MASAWE</p><hr style="color:#2D3748;">
                </div>
                {{-- <div class="card" style="background-color:#2D3748;font-family:serif">

                </div> --}}
            </div>
        </div>
    </div>
    {{-- profile_at_top --}}
    <div class="row ml-5">
        <div class="col-md-12 col-md-offset-2">
            <ul class="nav nav-tabs justify-content-left" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active " id="home-tab" data-toggle="tab" href="{{url('/profile')}}" role="tab"
                        aria-controls="home" aria-selected="true">
                        <i class="bi bi-person-check-fill"></i> Accounts Details </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="posts/index.php" role="tab"
                        aria-controls="posts" aria-selected="true">
                        <i class="bi bi-lock"></i> Change Password</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#" role="tab" aria-controls="contact"
                        aria-selected="false">
                        <i class="bi bi-gear"></i> Settings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#" role="tab" aria-controls="contact"
                        aria-selected="false"> Preference</a>
                </li>
            </ul>

        </div>
    </div>
    {{-- end top <nav></nav> --}}
    <div class="row m-3">
        <div class="col-md-12 d-flex justify-content-end ml-5">
            <a class="login btn btn-dafault" data-toggle="modal" data-target="#edit" href="{{url('edit')}}"
                style="color: white">edit</a>
        </div>
    </div>
    <div class="row ml-5 bg-dark">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Client Name :</h5>
                    <p class="card-text"> </p>
                </div>
                <ul class="p-5 card-body list-group list-group-flush">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                {{Form::label('Fullname','FullName')}}
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <input class='list-group-item' value="<?php echo 'First Name'; ?>">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <input class='list-group-item' value="<?php echo 'Middle Name'; ?>">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <input class='list-group-item' value="<?php echo 'Last Name'; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                {{Form::label('email','Email Address')}}
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <input class='list-group-item' value="<?php echo 'Email address'; ?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input class='list-group-item' value="<?php echo 'Physical address'; ?>">
                            </div>
                        </div>
                    </div>
                    . <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                {{Form::label('Username')}}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input class='list-group-item' value="<?php echo 'Username'; ?>">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <input class='list-group-item' value="<?php echo 'Physical address'; ?>">
                            </div>
                        </div>
                    </div>
                    {{--end row--}}
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                {{Form::label('Gender')}}
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <input class='list-group-item' value="<?php echo 'Gender'; ?>">
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}
            </div>
        </div>

    </div>

    {{-- <hr> --}}

    <div class="row" style="padding-top:100%">
        @include("inc.footer")
    </div>

    {{--
</div> --}}














@endsection