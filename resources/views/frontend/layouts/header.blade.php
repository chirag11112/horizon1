<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', app_name())</title>
        <meta name="description" content="@yield('meta_description', 'IndiaSearch 360')">
        <meta name="author" content="@yield('meta_author', 'Anthony Rappa')">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Raleway" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/fonts/ionicons/css/ionicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/fonts/fontawesome/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    </head>
    <body>
<header role="banner">
     
      <nav class="navbar navbar-expand-md navbar-dark bg-light">
        <div class="container">
          <a class="navbar-brand" href="{{route('frontend.index')}}">Indiasearch 360</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
              <li class="nav-item">
                <a class="nav-link active" href="{{route('frontend.index')}}">Home</a>
              </li>
              <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="destination.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Destination</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="destination.html">Places</a>
                  <a class="dropdown-item" href="destination.html">Hotels</a>
                  <a class="dropdown-item" href="destination.html">Restaurants</a>
                </div>

              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="{{route('frontend.category')}}">Category</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('frontend.about')}}">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('frontend.contact')}}">Contact</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->