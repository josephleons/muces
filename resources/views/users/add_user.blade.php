@extends('layouts.admin')
@section('content')
<div class="container">
{{-- user --}}
<div class="row ml-3" style="margin-left: 20px">
    <div class="col-md-12 col-md-offset-2">
        <ul class="nav nav-tabs justify-content-left" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Users Details </a>
                <li class="nav-item">
                <a class="nav-link" id="contact-tab" href="/other" role="tab" aria-controls="contact" aria-selected="false">Other Info</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active " id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Add user</a>
            </li>
                <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#" role="tab" aria-controls="contact" aria-selected="false">edit Info</a>
            </li>
          </ul>
     </div>
  </div>
  <!-- {{-- end top <nav></nav> --}} -->
</div>






@endsection