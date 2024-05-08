<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ !empty($header_title) ? $header_title : '' }} - Image Upload Dainamic</title>
  <!-- Css/Bootstrap Cdn -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{  asset('assets/css/bootstrap.min.css') }}">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
<div class="wrapper">
  @yield('content')


  


</div>
<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<link rel="{{ asset('assets/js/bootstrap.bundle.min.js') }}">
@yield('script')
</body>
</html>
