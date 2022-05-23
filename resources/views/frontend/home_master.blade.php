<!doctype html>
<html lang="en">
<head>
<title>@yield('title') - Dispute Eraser </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="@yield('description')">
<meta name="author" content="Dispute">
<meta name="keywords" content="@yield('keywords')">
<link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('frontend/ajax/libs/toastr.js/latest/toastr.min.css')}}">
<link rel="stylesheet" href="{{asset('frontend/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}" />
<link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}" />
<link rel="shortcut icon" href="{{asset('frontend/assets/images/logo.png')}}">
    <style>
       .error{ color: crimson;}
        </style>
  </head>
<body>
        {{-- header         --}}
        @include('frontend.body.header')
        {{-- header   --}}

        {{-- body content  --}}
        @yield('content')
        {{-- body content  --}}

        {{-- footer  --}}
        @include('frontend.body.footer')
        {{-- footer   --}}

<script src="{{asset('frontend/assets/js/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('frontend/ajax/libs/toastr.js/latest/js/toastr.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/custom.js')}}"></script>
  
<script>
  
  
  
  </script>
</body>

</html>
