@extends('layouts.dean')
@section('content')
{{-- course list title --}}
<div class="row align-items-center ml-5">
    <div class="col-auto">
        <i class="bi bi-three-dots-vertical textColor"></i>
    </div>
    <div class="col">
        <span class="textColor">
            <a class="nav-link text-muted fs-5 " href="{{ url('#') }}">Dean Dashboard</a>
        </span>
    </div>
    <hr class="ml-5 mt-2 textColor">
</div>
@endsection