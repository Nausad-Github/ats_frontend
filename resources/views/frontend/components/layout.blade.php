@php
$career_basic = get_career_basic(1);
$theme = $career_basic->theme;
switch ($theme) {
  case "theme-text-color1,theme-main-color2,theme-background-color3":
    $theme_selected = "bold";
  break;
  case "theme-text-color4,theme-main-color5,theme-background-color6":
    $theme_selected = "style";
  break;
  case "theme-text-color7,theme-main-color8,theme-background-color9":
    $theme_selected = "calm";
  break;
  case "theme-text-color10,theme-main-color11,theme-background-color12":
    $theme_selected = "woody";
  break;
  case "theme-text-color13,theme-main-color14,theme-background-color15":
    $theme_selected = "tangy";
  break;
  case "theme-text-color16,theme-main-color17,theme-background-color18":
    $theme_selected = "fresh";
  break;
  default:
    $theme_selected = "style";
}

@endphp
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <meta name="description" content="Index page">
    <meta name="keywords" content="index, page">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/template/favicon.svg">
    <link href="{{ url('/') }}/frontends/css/{{ $theme_selected }}.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('/') }}/frontends/css/custom.css">
    <link rel="stylesheet" href="http://localhost:5000/assets/css/snackbar.min.css">
    <script src="http://localhost:5000/assets/js/snackbar.min.js"></script>
    <title>Career Portal - Talent in Cloud</title>
  </head>
  <body>
    <!-- header start   --> 
    @include('frontend/components/header')
    <!-- mobile header end  -->
    <!-- header end -->
    <!-- inner body  -->
    @yield('main')
    <!-- inner body end -->
    <!-- footer start  --> 
    @include('frontend/components/footer') 
    <!-- footer end -->
    <script src="{{ url('/') }}/frontends/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="{{ url('/') }}/frontends/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="{{ url('/') }}/frontends/js/vendor/wow.js"></script>
    <script src="{{ url('/') }}/frontends/js/vendor/perfect-scrollbar.min.js"></script>
    <script src="{{ url('/') }}/frontends/js/vendor/select2.min.js"></script>
    <script src="{{ url('/') }}/frontends/js/vendor/scrollup.js"></script>
    <script src="{{ url('/') }}/frontends/js/main.js"></script>
  </body>
</html>