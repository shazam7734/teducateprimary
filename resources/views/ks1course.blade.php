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
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
@section('content')
<div class="header">
        <div class ="logo">
            <a href="{{ url('/') }}" class="logo">
                <img src="https://i.ibb.co/HP9xhP8/logo-banner.jpg" width="80" height="50"> Empowering You
            </a>
        </div>
        <div class="header-right">
            <a href="http://127.0.0.1:8000/home">Home - </a>
            <a href="{{ route('logout') }}">Logout</a>
        </div>
    </div>

    <div>
        <h2> Please select your year group</h2>
            <form action="#">
                <label for="ks1group">Year Group:</label>
                <select id="ks1group" name="ks1group">
                    <option value="ygroup">Year Group</option>
                    <option value="one">Year 1</option>
                    <option value="two">Year 2</option>
                </select>
                <input type="submit">
            </form>
        <h2> Training Course: [name] </h2>
        <h2> Survey Score: [value]</h2>
        <h2> Training Level: [Easy, Intermediate, Advanced (depending on value)]</h2>
        <p> Can this page be dynamic, depending on which course button the user clicks and based on the survey results?</p>

        <h3>Tutorials</h3>
        <p>select from db turial1, tutorial2, tutorial3 where survey result value = ? 

        <h3>Instructions</h3>
        <p>select from db primary_instructions, secondary_instructions where survey result value = ? 
        
        <h3>Lesson Plans</h3>
        <p>select from db lesson where survey result value = ?
    </div>
</body>
    
    