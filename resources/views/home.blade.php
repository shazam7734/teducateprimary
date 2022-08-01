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
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
                    <div class="file btn btn-lg btn-primary">
                        Change Photo
                        <input type="file" name="file"/>
                    </div>
                </div>

                <div class="profile-work">
                    <p>Computing Curriculum Links</p>
                    <a href="/curriculum">Curriculum Explained</a><br/>
                    <a href="/survey" style="color: red">Curriculum Survey</a><br/>
                    <p>Additional Resources</p>
                    <img src="https://lh3.googleusercontent.com/-Y-67Zo3LRZk/XcCGCmV7wqI/AAAAAAAAAAM/bRORc48aq9YnEz1Xxety_iZPUPyxAvB_wCLcBGAsYHQ/s400/icon_square_128x128.png" width="20" height="20"/> <a href="https://www.peardeck.com/googleslides">Pear Deck</a><br/>
                    <img src="https://code.org/images/logo.svg" width="20" height="20"/> <a href="https://code.org/educate/curriculum/csf">Code.org Student Courses</a><br/>
                    <img src="https://pbs.twimg.com/profile_images/1200401131131813888/qnFl7BTD_400x400.jpg" width="20" height="20"/> <a href="https://teachcomputing.org/curriculum">Teach Computing</a><br/>
                    <img src="https://media-exp1.licdn.com/dms/image/C4D0BAQHcfEgd6cjXLQ/company-logo_200_200/0/1590673372414?e=2147483647&v=beta&t=qKog8BRrWo6IGwli_H1SwqGezwZKvbZetDlLDnfjNKg" width="20" height="20"/> <a href="https://www.barefootcomputing.org/curriculum">Barefoot Computing</a><br/>
                    <img src="https://res.cloudinary.com/crunchbase-production/image/upload/c_lpad,h_170,w_170,f_auto,b_white,q_auto:eco,dpr_1/hvdbkhja4kca3ip5hwzr" width="20" height="20"/> <a href="https://theictservice.org.uk/primary-computing-curriculum/class-teacher-hub/">The ICT Service</a><br/>
                </div>
            </div>
    
            <div class="col-md-6">
                <div class="profile-head">
                    <header>Meghan</header> 
                    <header> 
                        <span>Primary TeDucator</span>
                    </header>
                    <br>
                    <div class="h9">Take the Curriculum Survey to get started!</div>
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
                            @foreach ($surveys as $survey)
                            <tr>
                                <td>{{ $survey->name }}</td>
                                <td>{{ $survey->value }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        </tbody>
                    </table>
                    </div>

                    <div id="News" class="tabcontent">
                    <h3>Below are your courses!</h3>
                    <div id="newshead"> &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp  Key Stage 1 &nbsp &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  Key Stage 2</div> <br>
                        <div class="flex-container">
                            <div class="flex-child magenta">
                                <h4> Algorithms </h4>
                                <p> In this course, you will learn what algorithms are, how they are implemented as programs on digital devices, and that programs execute by following precise and unambiguous instructions</p>
                                <p style="color: gold"> Key Stage 1 </p>
                                <button class="course" 
                                    onclick="window.location.href = '#';">
                                        Start Course
                                </button>
                            </div>
                            
                            <div class="flex-child green">
                                <h4> Debugging </h4>
                                <p> In this course, you will learn how to design, write and debug programs that accomplish specific goals, including controlling or simulating physical systems; solve problems by decomposing them into smaller parts</p>
                                <p style="color: gold"> Key Stage 2 </p>
                                <button class="course" 
                                    onclick="window.location.href = '#';">
                                        Start Course
                                </button>
                            </div>
                        </div>
                        <br>
                        <div class="flex-container">
                            <div class="flex-child magenta">
                                <h4> Programs </h4>
                                <p> In this course, you will learn how to create and debug simple programs</p>
                                <p style="color: gold"> Key Stage 1 </p>
                                <button class="course" 
                                    onclick="window.location.href = '#';">
                                        Start Course
                                </button>
                            </div>

                            <div class="flex-child green">
                                <h4> Variables </h4>
                                <p> In this course, you will learn how to use sequence, selection, and repetition in programs; work with variables and various forms of input and output </p>
                                <p style="color: gold"> Key Stage 2 </p>
                                <button class="course" 
                                    onclick="window.location.href = '#';">
                                        Start Course
                                </button>
                            </div>
                        </div>
                        <br>
                        <div class="flex-container">
                            <div class="flex-child magenta">
                                <h4> Logic </h4>
                                <p> In this course, you will learn how to use logical reasoning to predict the behaviour of simple programs </p>
                                <p style="color: gold"> Key Stage 1 </p>
                                <button class="course" 
                                    onclick="window.location.href = '#';">
                                        Start Course
                                </button>
                            </div>

                            <div class="flex-child green">
                                <h4> Reasoning </h4>
                                <p> In this course, you will learn how to use logical reasoning to explain how some simple algorithms work and to detect and correct errors in algorithms and programs  </p>
                                <p style="color: gold"> Key Stage 2 </p>
                                <button class="course" 
                                    onclick="window.location.href = '#';">
                                        Start Course
                                </button>
                            </div>
                        </div>
                        <br>
                        <div class="flex-container">
                            <div class="flex-child magenta">
                                <h4> Purpose </h4>
                                <p> In this course, you will learn how to use technology purposefully to create, organise, store, manipulate and retrieve digital content </p>
                                <p style="color: gold"> Key Stage 1 </p>
                                <button class="course" 
                                    onclick="window.location.href = '#';">
                                        Start Course
                                </button>
                            </div>

                            <div class="flex-child green">
                                <h4> Networks </h4>
                                <p> In this course, you will learn about computer networks including the internet; how they can provide multiple services, such as the world wide web; and the opportunities they offer for communication and collaboration  </p>
                                <p style="color: gold"> Key Stage 2 </p>
                                <button class="course" 
                                    onclick="window.location.href = '#';">
                                        Start Course
                                </button>
                            </div>
                        </div>
                        <br>
                        <div class="flex-container">
                            <div class="flex-child magenta">
                                <h4> Information </h4>
                                <p> In this course, you will learn how to recognise common uses of information technology beyond school </p>
                                <p style="color: gold"> Key Stage 1 </p>
                                <button class="course" 
                                    onclick="window.location.href = '#';">
                                        Start Course
                                </button>
                            </div>

                            <div class="flex-child green">
                                <h4> Search </h4>
                                <p> In this course, you will learn how to use search technologies effectively, appreciate how results are selected and ranked, and be discerning in evaluating digital content</p>
                                <p style="color: gold"> Key Stage 2 </p>
                                <button class="course" 
                                    onclick="window.location.href = '#';">
                                        Start Course
                                </button>
                            </div>
                        </div>
                        <br>
                        <div class="flex-container">
                            <div class="flex-child magenta">
                                <h4> Safety </h4>
                                <p> In this course, you will learn how to use technology safely and respectfully, keeping personal information private; identify where to go for help and support when they have concerns about content or contact on the internet or other online technologies. </p>
                                <p style="color: gold"> Key Stage 1 </p>
                                <button class="course" 
                                    onclick="window.location.href = '#';">
                                        Start Course
                                </button>
                            </div>

                            <div class="flex-child green">
                                <h4> Variety </h4>
                                <p> In this course, you will learn how to select, use and combine a variety of software (including internet services) on a range of digital devices to design and create a range of programs, systems and content that accomplish given goals, including collecting, analysing, evaluating  and presenting data and information</p>
                                <p style="color: gold"> Key Stage 2 </p>
                                <button class="course" 
                                    onclick="window.location.href = '#';">
                                        Start Course
                                </button>
                            </div>
                        </div>
                        <br>
                        <div class="flex-container">
                            <div class="flex-child magenta" style="background: gold">
                                <h4> You Made It! </h4>
                                <p> Congratulations on completing your training courses!</p>
                            </div>

                            <div class="flex-child green">
                                <h4> Responsible </h4>
                                <p> In this course, you will learn how to use technology safely, respectfully, and responsibly; recognise acceptable/unacceptable behaviour; identify a range of ways to report concerns about content and contact.</p>
                                <p style="color: gold"> Key Stage 2 </p>
                                <button class="course" 
                                    onclick="window.location.href = '#';">
                                        Start Course
                            </div>
                        </div>
                    </div>
                        
                    <div id="Contact" class="tabcontent">
                    <h3>Community Page</h3>
                    <p>Share your experiences!</p>
                    <a href="https://www.linkedin.com/login">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f8/LinkedIn_icon_circle.svg/2048px-LinkedIn_icon_circle.svg.png" width="80" height="80">
                    </a>
                    
                    <a href="https://www.facebook.com/login/">
                        <img src="https://icon-library.com/images/facebook-f-icon/facebook-f-icon-26.jpg" width="80" height="80">
                    </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>