<!DOCTYPE html>
<html lang="{{'confi-langate'}}">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="{{url('bootstrap-icons/font/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{url('bootstrap-icons/bootstrap-icons.svg')}}">
    {{-- Boot v5 --}}
    {{-- <link rel="stylesheet" href="{{url('assets/css/bootstrap.css')}}"> --}}
    <link rel="stylesheet" href="{{url('bootstrap/dist/js/bootstrap.min.js')}}">
    {{-- icons --}}
    <link rel="stylesheet" href="{{url('assets/css/all.css')}}">

    {{-- custom style cssclear --}}
    <link rel="stylesheet" href="{{url('assets/side.css')}}"/>
    <link rel="stylesheet" href="{{url('assets/css/custom.css')}}">
    {{-- Bootstrap 4 --}}
    <link rel="stylesheet" href="{{url('bootstrap/dist/css/bootstrap.min.css')}}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" type="text/css" rel="stylesheet" >
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css" type="text/css"  rel="stylesheet">  
    <title>{{config('app.name','MUCES')}}</title>
    <link rel="shortcut icon" style="width:50px" class="shadow rounded-circle m-3" href="{{url('assets/images/mucems.jpg')}}">
</head>
<body class="bg-light">
    <div class="conatiner">
        <div class="row mt-5">
            {{-- jumbotron --}}
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 m-auto">
                <div class="card shadow ">
                    <div class="mx-auto">
                        <img style="width:50px" class="shadow rounded-circle m-3" src="{{url('assets/images/mucems.jpg')}}">
                    </div>
                    <hr>
                    <div class="card-body">
                        {!! Form::open(['action' => 'App\Http\Controllers\LoginController@login', 'method' => 'POST']) !!}
                        @csrf
                        <div class="d-flex text-muted pt-5">
                            <h3 class="fs-5 card-title-text mx-auto" style="font-family:'Times New Roman">
                                Sign in with credentials
                            </h3>
                        </div>
                        <div class="col-md-12">
                            <div class="input-group p-2 mt-2">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="bi bi-person-plus"></i>
                                </span>
                                {{Form::text('username','',['class'=>'form-control','placeholder'=>'Username'])}}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-group  p-2 mt-4 ">
                                <span class="input-group-text" id="inputGroup-sizing-sm">
                                    <i class="bi bi-lock"></i>
                                </span>
                                {{Form::password('password', ['class' => 'form-control','placeholder'=>'Password'])}}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group  p-2 mt-4">
                                {{ Form::submit('Login', ['class' => 'text-white btn btn-default form-control', 'style' => 'background-color:#FD876D']) }}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    
    </div>
</div>