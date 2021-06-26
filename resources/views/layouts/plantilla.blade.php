<!DOCTYPE html>
<html>
<head>
  <title></title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


    <link href="https://getbootstrap.com/docs/5.0/examples/dashboard/dashboard.css" rel="stylesheet">

    {{-- <link rel="stylesheet"  href="{{ asset('bootstrap/css/bootstrap.min.css')}}">--}}
</head>
<body>
@guest
   	<div style="margin-left: 300px; margin-right: 300px; margin-top: 15px; margin-bottom: 20px;">
    @yield("contenido")
    </div>
@else
	@include("layouts.cabecera")

    @include("layouts.sidebarmenu")

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      
    @include("layouts.subcabecera")   
   
    @yield("contenido")
@endguest   
</div>

<script src="{{asset('jquery/jquery.min.js')}}" type="text/javascript"></script>{{--
<script src="{{asset('popper/popper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>--}}

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

 <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="https://getbootstrap.com/docs/5.0/examples/dashboard/dashboard.js"></script>
 @yield("script")
</body>
</html>