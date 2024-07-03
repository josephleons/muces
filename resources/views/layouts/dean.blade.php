<!DOCTYPE html>
<html lang="{{'confi-langate'}}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {{-- Bootstrap icon --}}
        <link rel="stylesheet" href="{{url('bootstrap-icons/font/bootstrap-icons.css')}}">
        <link rel="stylesheet" href="{{url('bootstrap-icons/bootstrap-icons.svg')}}">
        {{-- Boot v5 --}}
      
        <link rel="stylesheet" href="{{url('assets/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{url('bootstrap/dist/js/bootstrap.min.js')}}">
        {{-- Fontawesome icons --}}
        <link rel="stylesheet" href="{{url('assets/css/all.css')}}">
      
        {{-- custom style cssclear --}}
        <link rel="stylesheet" href="{{url('assets/side.css')}}" />
        <link rel="stylesheet" href="{{url('assets/css/custom.css')}}">
        {{-- Bootstrap 4 --}}
        <link rel="stylesheet" href="{{url('bootstrap/dist/css/bootstrap.min.css')}}">
      
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" type="text/css"
          rel="stylesheet">
        <link href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css" type="text/css" rel="stylesheet">
      
        <title>{{config('app.name','MUCES')}}</title>
        <link rel="shortcut icon" style="width:50px" class="shadow rounded-circle m-3"
          href="{{url('assets/images/mucems.jpg')}}">
      </head>

<body class="bodyColor">
    @include('inc.dean_navbar')
    <div class="container">
        @yield('content')
       
    </div>
   
    <div class="shadow-sm row" style="padding-top:100%">
        @include('inc.footer')
    </div>

    {{-- composer require unisharp/laravel-ckeditor --}}
    <script src="{{url('ckeditor4/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace('ckeditor');
    </script>


    <script src="{{url('jquery/dist/jquery.slim.min.js')}}"></script>
    <script src="{{url('assets/js/popper.min.js')}}"></script>
    <script src="{{url('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{url('assets/js/custom.js')}}"></script>
    <!-- Bootstrap Bundle with Popper.js (optional, for Bootstrap JS components) -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
        $('#example').DataTable();
      } );
    </script>

<script>
    // Open edit modal when edit button is clicked
    $('.edit-department-btn').click(function() {
        var departmentId = $(this).data('department-id');
        $.get('/departments/' + departmentId + '/edit', function(data) {
            $('#editDepartmentModal .modal-content').html(data);
            $('#editDepartmentModal').show();
        });
    });
</script>
</body>

</html>