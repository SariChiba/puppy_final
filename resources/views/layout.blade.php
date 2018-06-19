<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> @yield('title') </title>
      {{-- <link rel="stylesheet" href="/css/bootstrap.min.css"> --}}
      <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Do+Hyeon" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Gaegu" rel="stylesheet">
      {{-- <link rel="stylesheet" href="/css/styles.css"> --}}
      <link rel="stylesheet"href="{{ asset('css/styles.css') }}">
</head>

<body>
     @include ('header')

    <div class="container">
      @yield('content')
    </div>

     @include ('footer')

      <!-- Jquery -->
      <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
      <!--bootstrap  -->
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
