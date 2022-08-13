<!DOCTYPE html>
<html>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Styles -->
    <link href="/css/style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    
</head>
<body>
<!-- This extends the content section defined in the homeview page -->

    <!-- This extends the banner section with the logo and relavent tablinks -->
    <div class="header">
        <div class ="logo">
            <a href="{{ url('/') }}" class="logo">
                <img src="https://i.ibb.co/HP9xhP8/logo-banner.jpg" width="90" height="50"> Empowering You
            </a>
        </div>
        <div class="header-right" style="font-weight:bold">
            <a href="http://127.0.0.1:8000/home">Profile - </a>
            <a href="http://127.0.0.1:8000/#section3">Our Mission - </a>
            <a href="http://127.0.0.1:8000/#section4">Why TeDucate - </a>
            <a href="http://127.0.0.1:8000/#section5">Getting Started -</a>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> {{ __('Logout') }}</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>

        </div>
    </div>

    <h1>This page will display information about the idea behind the website, how it started as an MSc Project, and list some of the acknowledgements.</h1>

    <img src="https://www.aventis.edu.sg/wp-content/uploads/2021/01/roehampton-logo.jpg" width="500" height="300" style="margin-left:70px">
    <img src="https://educationalliancefinland.com/sites/default/files/news/why_use_edtech_in_classroom_1.png" width="560" height="300" style="margin-left:900px; margin-top:-80px">

    




