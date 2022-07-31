@extends('layouts.homeview')
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

    <script>
        function openPage(pageName,elmnt,color) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].style.backgroundColor = "";
        }
        document.getElementById(pageName).style.display = "block";
        elmnt.style.backgroundColor = color;
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>
    
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
            <a href="http://127.0.0.1:8000/#section3">Our Mission - </a>
            <a href="http://127.0.0.1:8000/#section4">Why TeDucate - </a>
            <a href="http://127.0.0.1:8000/#section5">Getting Started -</a>
            <a href="{{ route('logout') }}">Logout</a>
        </div>
    </div>
                    
    <div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                </form>
                    <div class="col-md-6">
                        <div class="profile-head">
                            <header>Sarah Azam</header> 
                            <header> 
                                <span>Primary TeDucator</span>
                            </header>
                            <br>
                                    
                            <button class="tablink" onclick="openPage('Home', this, 'grey')">Survey Results</button>
                            <button class="tablink" onclick="openPage('News', this, 'grey')" id="defaultOpen">Training Courses</button>
                            <button class="tablink" onclick="openPage('Contact', this, 'grey')">Community Page</button>
                               
                            <div id="Home" class="tabcontent">
                            <h3>Below are you survey results!</h3>
                            <table border="1">
                                <thead>
                                    <tr>
                                        <td>Teaching Point</td>
                                        <td>Survey Result</td>
                                    </tr>
                                <thead>
                                <tbody>
                                        
                                </tbody>
                                </tbody>
                            </table>
                            </div>

                            <div id="News" class="tabcontent">
                            <h3>Below are your personolised courses, categorised by curriculum teaching point:</h3>
                                <div class="container" id="img4">
                                    <img src="https://patientengagementhit.com/images/site/article_headers/_normal/online-provider-reviews.jpg" class="image" style="width:50%">
                                    <div class="top-left">Learn More</div>
                                    <div class="middle">
                                        <div class="text">1. Take a 1 minute <br> computing curriculum survey!</div>
                                    </div>
                                </div> 
                            </div>

                            <div id="Contact" class="tabcontent">
                            <h3>Community Page</h3>
                            <p>Share your experiences!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>Computing Curriculum Links</p>
                            <a href="/curriculum">Curriculum Explained</a><br/>
                            <a href="/survey">Curriculum Survey</a><br/>
                            <p>Additional Resources</p>
                            <img src="https://lh3.googleusercontent.com/-Y-67Zo3LRZk/XcCGCmV7wqI/AAAAAAAAAAM/bRORc48aq9YnEz1Xxety_iZPUPyxAvB_wCLcBGAsYHQ/s400/icon_square_128x128.png" width="20" height="20"/> <a href="https://www.peardeck.com/googleslides">Pear Deck</a><br/>
                            <img src="https://code.org/images/logo.svg" width="20" height="20"/> <a href="https://code.org/educate/curriculum/csf">Code.org Student Courses</a><br/>
                            <img src="https://pbs.twimg.com/profile_images/1200401131131813888/qnFl7BTD_400x400.jpg" width="20" height="20"/> <a href="https://teachcomputing.org/curriculum">Teach Computing</a><br/>
                            <img src="https://media-exp1.licdn.com/dms/image/C4D0BAQHcfEgd6cjXLQ/company-logo_200_200/0/1590673372414?e=2147483647&v=beta&t=qKog8BRrWo6IGwli_H1SwqGezwZKvbZetDlLDnfjNKg" width="20" height="20"/> <a href="https://www.barefootcomputing.org/curriculum">Barefoot Computing</a><br/>
                            <img src="https://res.cloudinary.com/crunchbase-production/image/upload/c_lpad,h_170,w_170,f_auto,b_white,q_auto:eco,dpr_1/hvdbkhja4kca3ip5hwzr" width="20" height="20"/> <a href="https://theictservice.org.uk/primary-computing-curriculum/class-teacher-hub/">The ICT Service</a><br/>
                        </div>
                    </div>
                    
                </div>
                      
        </div>
</body>