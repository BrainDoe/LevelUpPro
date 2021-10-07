<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Title -->
  <title>Levelup| Welcome to Levelup</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- Favicon -->
  <link rel="shortcut icon" href="https://htmlstream.com/preview/nova-v1.2.2/favicon.ico">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,700;1,300&display=swap" rel="stylesheet">
  <link href="{{ asset('backend/assets/vendor/nova-icons/nova-icons.css') }}" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <!-- CSS Implementing Libraries -->
  <link rel="stylesheet" href="{{ asset('backend/assets/vendor/animate.css/animate.min.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/assets/vendor/select2/dist/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/assets/vendor/chartist/dist/chartist.min.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/assets/vendor/chartist-plugin-tooltip/dist/chartist-plugin-tooltip.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/assets/vendor/jquery-shorten/src/jquery.shorten.css') }}">

  <!-- CSS Nova Template -->
  <link rel="stylesheet" href="{{ asset('backend/assets/css/theme.css') }}">
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
</head>

<body class="has-sidebar has-fixed-sidebar-and-header bg-primary">
        <!-- Header -->
        @include('layouts.dashboard.header')
        {{-- Main Section --}}
    <main class="main">
        <!-- Sidebar Nav -->
        @include('layouts.dashboard.sidebar')
        <div class="content">
            <div class="container">
                @yield('content')
            </div>
        </div>
        <!-- Footer -->
    </main>
    @include('layouts.footer')
    @include('layouts.dashboard.script')
</body>
</html>
