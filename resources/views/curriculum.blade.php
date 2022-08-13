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

    <h1>This page is under construction. It will display the computing curriculum points as defined by <a href="https://assets.publishing.service.gov.uk/government/uploads/system/uploads/attachment_data/file/239033/PRIMARY_national_curriculum_-_Computing.pdf">The Department of Education</a>
    with an easy to understand explanation with examples under each one. Images and videos will also be added for further clarity. Example images below:</h1>

    <img src="http://computinginprimaryschool.weebly.com/uploads/9/2/6/2/92629614/ks1-1_orig.png" width="700" height="400" style="margin-left:420px">
