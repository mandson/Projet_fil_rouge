<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel 7 & MySQL CRUD Tutorial</title>
  <link rel="stylesheet" href="{{ asset('admin/css/fullcalendar.css') }}">
  <link href="{{ asset('admin/css/widgets.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/css/style-responsive.css') }}" rel="stylesheet" />
  <link href="{{ asset('admin/css/xcharts.min.css') }}" rel=" stylesheet">
  <link href="{{ asset('admin/css/jquery-ui-1.10.4.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('users/css/style.css')}}">
</head>
<body>
  <div class="container">
    @yield('main')
  </div>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>
