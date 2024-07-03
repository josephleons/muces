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
<div class="row" style="margin-left:10%;padding-top:4%">
    <div class="col-lg-4">
        <div class="card" style="-webkit-box-shadow: 7px 9px 10px -6px rgba(57,57,58,0.98); 
            box-shadow: 7px 9px 10px -6px rgba(57,57,58,0.98);">
            <div class="card-body text-center">
                <a href="#" class="nav-link ">
                    <i class="bi bi-stickies-fill nav-icon" style="color:#F56565;font-size:36px;"></i>
                    <ul class="mx-5 nav nav-item active"
                        style="color:#2D3748; text-transform:uppercase;font-weight:bold">
                        <li class="lead fs-6">Manage Faculties</li>
                    </ul>
                </a>
            </div>
        </div>
    </div>

</div>

@endsection