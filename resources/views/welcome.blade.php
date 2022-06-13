<!DOCTYPE html>
<html>
    <head>
    <link href='https://fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet'>
        <title>TeDucate Primary</title>
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <style>
            
            html {
            scroll-behavior: smooth;
            }

            #section1 {
            height: 400px;
            background-image:
            url('https://lh3.googleusercontent.com/i1CAZWSrp2yV4kCtRpqLFZ5u2zobqWSZ49dOLXh9h19AHId2mx98lhYdGeUB8vt0s_PXUl9VIO8laVpDyfpjt_3KOTcM3GNu05-ZnK5-9Em3UpVBSUO6tqLgZ_82-i-6A_cHiLW9fsXsokTLJ0Wm8Gg23xF11eQMoyGn5-9ZLxzeq4bQFG9eebkr6fLu4GUd-1sUnMUUdIzDx9l-jbI40d5Kj3XYCjMxMpZOnjcoh3Fb7-QiOEMNgpML0Rcd_IHz16r7gGlDuxTC_se7UVW0CM-hh6pqm5mQnwcqQlD_GvrXUWrmi3J28d7j9pT8u8gOp4W9ztGpcBMOFixu-Pxzxwq4tuy3QuOaaJ2NE9_Fg4qOenID7rFBeF2BKrmLIYB5GvssGC-5rxL-2XJIyBrkBElEckzv7cFZO7m2xk_R8X1P8Yy34e21w1-l-YapbJAuvNW8Q4JUehNQ6f1e08144v6KVUO2UKKXVCSVe0b_hzJdsS94y5cPe5vjgI4HJBn7331PYxe7qzSXC0axiadekxRL7KMaHFEA1eO9LHUGxTSTz24Kk13nw1eXbswCEWUXo08qCJZKVl6u28IZ1cGJWqEhe5rQRSyMPUU-iTyyRoJxRF-VnHkqQDhtunBMPHcYCxIlUsFD-4UcRX67EdPKBA4xCXz3iGrGM3sIuMIb-tUY1qMUIwmRwzQn-9cBmHNXf4gHVfQWjHx3lFqui5WgxPWw9DDJOrTpe43-AlHnfsat22T1hChjqL3KKIeBzXfgkFXf3lsLN1OoA3G2_6KAq9fAa3cdERGRQ9hsFrx-0aSXResQEaZh2gIJq2mAzxQi4bc6AXlYnPemeKy-IlNgnMSMaJp6OgEPKl3vr5xk1rFj=w1500-h400-no?authuser=0');
            }

            #section2 {
            height: 230px;
            }

            #section3 {
                height: 1000px;
                background-image:
                url('https://i.pinimg.com/originals/f7/1a/af/f71aaf6925ab5b8700f9b959cd1e2a23.jpg');
                background-size: 100%;
                margin-top: 50px;
            }
        </style>
        <style>
            body {
            background-color: white;
            }
        
            .hero {
                width: 100%;
                height: 100vh;
                position: relative;
                padding: 0 5%;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            
            .back-video{
                position: absolute;
                right: 0;
                bottom: 0;
                z-index: -1;
                justify-content: center;
                align-items: center;
                width: 100%;
                height: 100vh;
                display: flex;
                object-fit: fill;
            }
            .main {
                text-align: center;
            }
            .main h1 {
                font-size: 60px;
                font-weight:400;
                color: black;
                text-shadow: 2px 2px 4px grey;
                font-family: Lucida Handwriting;
            }

            .main h3 {
                font-size: 60px;
                font-family: 'Architects Daughter';
                position: relative;
                left: -550px;
                top: 450px;
            }

            .content a{
                text-decoration: none;
                display: inline-block;
                color: white;
                font-size: 24px;
                border: 2px solid white;
                padding: 14px 50px;
                border-radius: 50px;
                margin-top: 10px;
                background-image: linear-gradient(to right, silver , grey);
            }

            .menu {
                font-size: 15px;
                font-family: calibri;
                font-weight: bold;
                margin-top: 20px;
                margin-bottom: 20px;
            }

            .nav {
                border: 2px solid grey;
                padding: 5px 20px;
                border-radius: 50px;
                background-image: linear-gradient(to right, silver , white);
            }

        </style>
        
        <style>
            .container {
                position: relative;
                width: 45%;
                top: -100px;
                right: -800px;
            }

            #img1 {
                position: relative;
                width: 45%;
                right: -800px;
                top: -80px;
            }

            #img2 {
                position: relative;
                width: 45%;
                right: -800px;
                top: -60px;
            }

            #img3 {
                position: relative;
                width: 45%;
                right: -800px;
                top: -40px;
            }

            .image {
                opacity: 1;
                display: block;
                width: 100%;
                height: auto;
                transition: .5s ease;
                backface-visibility: hidden;
            }

            .middle {
                transition: .5s ease;
                opacity: 0;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                text-align: center;
            }

            .container:hover .image {
                opacity: 0.3;
            }

            .container:hover .middle {
                opacity: 1;
            }

            .text {
                background-color: silver;
                color: black;
                font-size: 16px;
                padding: 16px 32px;
            }
        </style>
    </head>    
    <body class="antialiased">
        <div class="menu">
            @if (Route::has('login'))
                <div>
                    @auth
                        <a href="{{ url('/home') }}" class="nav">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="nav">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="nav">Register</a>
                        @endif
                    @endauth
                    <a href="/about" class="nav">About</a>
                </div>
            @endif
        </div>
        <div class="main" id="section1">
            
        </div>

        <div class="main" id="section2">
            <video id="background-video" autoplay loop muted plays-inline class="back-video">
                <source src="https://previews.customer.envatousercontent.com/files/3a6e02dc-2769-456d-a9d7-248ffe6d4005/video_preview_h264.mp4" type="video/mp4">
            </video>
            <h1>-TeDucate Primary-</h1>
            <h2>A platform that embeds the <a href="/curriculum">Computing Curriculum</a> into primary school education.</h2>
            <div class="content">
                <a href="#section3">Explore</a>
        </div>

        <div class="main" id="section3">
            <h3>-Our Mission-</h3>

            <div class="container">
                <img src="https://media.getwalkabouts.com/media/tcppel1f/1teacher-benefits-using-technology-in-the-classroom.jpg?anchor=center&mode=crop&width=360&height=220&rnd=132052452031630000" alt="ipads" class="image" style="width:50%">
                <div class="middle">
                    <div class="text">Train Primary School Teachers on Technical Skills</div>
                </div>
            </div>

            <div class="container" id="img1">
                <img src="https://elementaryuk.com/wp-content/uploads/2019/07/ipads-QR-code.jpg" alt="ipads" class="image" style="width:50%">
                <div class="middle">
                    <div class="text">Equip Primary School Students with Technology</div>
                </div>
            </div>

            <div class="container" id="img2">
                <img src="https://graemeptann.files.wordpress.com/2015/05/technology-for-primary-schools.jpg" alt="ipads" class="image" style="width:50%">
                <div class="middle">
                    <div class="text">Multimedia Exposure</div>
                </div>
            </div>

            <div class="container" id="img3">
                <img src="https://s7280.pcdn.co/wp-content/uploads/2020/03/customer_feedback_agile_mainframe_approach-_1400x700-810x405.jpg.optimal.jpg" alt="ipads" class="image" style="width:50%">
                <div class="middle">
                    <div class="text">Build a platform designed for YOU!</div>
                </div>
            </div>

    </body>
</html>