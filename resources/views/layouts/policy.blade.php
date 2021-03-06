<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title', 'Hooked')</title>
  <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ secure_asset('css/all.css') }}">
  <link rel="stylesheet" href="{{ secure_asset('css/codetn.css') }}">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
</head>

<body>
  @include('includes.nav_bar')

  @yield('content')

 

  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>