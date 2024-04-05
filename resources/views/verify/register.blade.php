<!DOCTYPE html>
<html lang="{{ 'confi-langate' }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('bootstrap-icons/font/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ url('bootstrap-icons/bootstrap-icons.svg') }}">
    {{-- Boot v5 --}}
    {{--
  <link rel="stylesheet" href="{{url('assets/css/bootstrap.css')}}"> --}}
    <link rel="stylesheet" href="{{ url('bootstrap/dist/js/bootstrap.min.js') }}">
    {{-- icons --}}
    <link rel="stylesheet" href="{{ url('assets/css/all.css') }}">

    {{-- custom style cssclear --}}
    <link rel="stylesheet" href="{{ url('assets/side.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/css/custom.css') }}">
    {{-- Bootstrap 4 --}}
    <link rel="stylesheet" href="{{ url('bootstrap/dist/css/bootstrap.min.css') }}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" type="text/css"
        rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css" type="text/css" rel="stylesheet">
    <title>{{ config('app.name', 'TTMS') }}</title>
</head>

<body>
    {{-- navigation --}}
    @include('inc.navbar')
    <div class="conatiner">
        <div class="row">
            <div class="col-md-6 col-sm-10 col-xs-8 m-auto">
                @include('inc.messages')
                <div class="ca card mt-5">
                    <div class="card-header">
                        <h4 class="title" style="text-align:center; color:#2D3748">
                            <img style="width:50px" class="shadow rounded-circle m-3"
                                src="{{ url('assets/images/ttms.jpg') }}">
                            Teacher Registration Form
                        </h4>
                    </div>
                    <div class="card-body">
                        {!! Form::open([
                            'Action' => 'RegisterController@register',
                            'Method' => 'POST',
                            'enctype' => 'multipart/form-data',
                        ]) !!}
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                {{ Form::label('email', 'Email Address') }}
                                <div class="form-group">
                                    {{ Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Email Address']) }}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                {{ Form::label('contact', 'Contact') }}
                                <div class="form-group">
                                    {{ Form::text('contact', '', ['class' => 'form-control', 'placeholder' => '+255']) }}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                {{ Form::label('username', 'Username') }}
                                <div class="form-group">
                                    {{ Form::text('username', '', ['class' => 'form-control', 'placeholder' => 'Username']) }}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                {{ Form::label('password', 'Password') }}
                                <div class="form-group">
                                    {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    {{ Form::label('confirmPassword', 'Confirm Password') }}
                                    {{ Form::password('confirmPassword', ['class' => 'form-control', 'placeholder' => 'confirmPassword']) }}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="btn col-md-12 ml-2" style='float:center; color:#85149E'>
                                {{ Form::submit('Create an Account', ['class' => 'text-white login btn btn-default form-control','style'=>'background-color:#85149E']) }}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('inc.footer')
    </div>
    {{-- endform --}}
    {{-- <footer></footer> --}}
</body>

</html>
<script src="{{ url('assets/js/jquery-3.4.1.slim.min.js') }}"></script>
<script src="{{ url('/assets/js/popper.min.js') }}"></script>
<script src="{{ url('assets/js/bootstrap.min.js') }}"></script>
