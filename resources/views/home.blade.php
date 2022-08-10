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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script>
        //This function controlls the tabs and reveals the correct content under each tab on user click [reference 1]
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
<!-- This extends the content section defined in the homeview page -->

    <!-- This extends the banner section with the logo and relavent tablinks -->
    <div class="header">
        <div class ="logo">
            <a href="{{ url('/') }}" class="logo">
                <img src="https://i.ibb.co/HP9xhP8/logo-banner.jpg" width="90" height="50"> Empowering You
            </a>
        </div>
        <div class="header-right" style="font-weight:bold">
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

    <!-- This extends the profile page content section, devided into two columns (col-md-4 and col-md-6) -->                
    <div class="container emp-profile">
        <div class="row">
            <div class="col-md-4">
                <form action="{{route('home')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="profile-img">
                        <img src="{{asset('/storage/images/'.Auth::user()->image)}}" alt=""/>
                        <div class="file btn btn-lg btn-primary">
                            <input type="submit" value="Submit" style="width: 220px">Update</input>
                        </div>
                        <input style="margin-left: 55px" type="file" value="File Upload" name="image"/>
                </div>
                    </form>

                <div class="profile-work">
                    <p>Computing Curriculum Links</p>
                    <a href="/curriculum">Curriculum Explained</a><br/>
                    <a href="/survey">Curriculum Survey</a><br/>
                    <a href="/certificate">Certificates of Completion</a><br/>
                    <!-- This section lists some additinal resources for teachers, with an explanation of each link provided as a hover text box (reference 2) -->
                    <p>Additional Resources</p>
                    <span class="hovertext" data-hover="The fastest way to transform Google Drive presentations into classroom conversations through student engagement.">
                        <img src="https://lh3.googleusercontent.com/-Y-67Zo3LRZk/XcCGCmV7wqI/AAAAAAAAAAM/bRORc48aq9YnEz1Xxety_iZPUPyxAvB_wCLcBGAsYHQ/s400/icon_square_128x128.png" width="20" height="20"/> <a href="https://www.peardeck.com/googleslides">Pear Deck</a><br/>
                    </span>
                    <span class="hovertext" data-hover="A fantastic computing curriculum designed for students in reception through Year 5, which includes students 5-11 years old!">
                        <img src="https://code.org/images/logo.svg" width="20" height="20"/> <a href="https://code.org/educate/curriculum/csf">Code.org Student Courses</a><br/>
                    </span>
                    <span class="hovertext" data-hover="Great computing resources which include lesson plans, slides, activity sheets, homework, and assessments. Teacher guide by Year Group is also provided!">
                        <img src="https://pbs.twimg.com/profile_images/1200401131131813888/qnFl7BTD_400x400.jpg" width="20" height="20"/> <a href="https://teachcomputing.org/curriculum">Teach Computing</a><br/>
                    </span>
                    <span class="hovertext" data-hover="Created by teachers and backed by research, Barefoot is tailored to the national curriculum in England, Scotland, Wales and Northern Ireland">
                        <img src="https://media-exp1.licdn.com/dms/image/C4D0BAQHcfEgd6cjXLQ/company-logo_200_200/0/1590673372414?e=2147483647&v=beta&t=qKog8BRrWo6IGwli_H1SwqGezwZKvbZetDlLDnfjNKg" width="20" height="20"/> <a href="https://www.barefootcomputing.org/curriculum">Barefoot Computing</a><br/>
                    </span>
                    <span class="hovertext" data-hover="Computing Curriculum planning templates for each year group, populated with the age-appropriate progression statements and assessments!">
                        <img src="https://res.cloudinary.com/crunchbase-production/image/upload/c_lpad,h_170,w_170,f_auto,b_white,q_auto:eco,dpr_1/hvdbkhja4kca3ip5hwzr" width="20" height="20"/> <a href="https://theictservice.org.uk/primary-computing-curriculum/class-teacher-hub/">The ICT Service</a><br/>
                    </span>    
                </div>
            </div>
    
            <div class="col-md-6">
                <div class="profile-head">
                    <header>{{Auth::user()->name}}</header>
                    <header> 
                        <span>Primary TeDucator</span>
                    </header>
                    <br><br>
                    
                    <div class="surveycontainer">
                        <a href="/survey" class="btn" style="font-weight:bold">Take the Curriculum Survey to get started!</a>
                    </div>
                    <br>
                    <!-- This starts the tabs section -->                
                    <button class="tablink" onclick="openPage('Results', this, 'grey')">Training Programs</button>
                    <button class="tablink" onclick="openPage('Courses', this, 'grey')" id="defaultOpen">Progress</button>
                    <button class="tablink" onclick="openPage('Community', this, 'grey')">Community Page</button>
                        
                    <div id="Results" class="tabcontent">
                    <h3>Below are your courses!</h3>
                    <div id="newshead">
                        <p>
                            <span class="gold">Key Stage 1</span><span class="blue">Key Stage 2</span>
                        </p>
                    </div>
                        <!-- This section defines and provides links for each of the training courses for ks1 and ks2 -->
                        <div class="flex-container">
                            <div class="flex-child magenta">
                                <h4 class="toprow"> Algorithms </h4>
                                <p class="coursebody"> In this course, you will learn what algorithms are, how they are implemented as programs on digital devices, and that programs execute by following precise and unambiguous instructions</p>
                                <button class="course" 
                                    onclick="window.location.href = '/ks1course/Algorithms';">
                                        Start Course
                                </button>
                            </div>
                            
                            <div class="flex-child green">
                                <h4 class="toprow2"> Debugging </h4>
                                <p class="coursebody"> In this course, you will learn how to design, write and debug programs that accomplish specific goals, including controlling or simulating physical systems; solve problems by decomposing them into smaller parts</p>
                                <button class="course" 
                                    onclick="window.location.href = '/ks2course/Debugging';">
                                        Start Course
                                </button>
                            </div>
                        </div>
                        <br>
                        <div class="flex-container">
                            <div class="flex-child magenta">
                                <h4 class="toprow"> Programs </h4>
                                <p class="coursebody"> In this course, you will learn how to create and debug simple programs</p>
                                <button class="course" 
                                    onclick="window.location.href = '/ks1course/Programs';">
                                        Start Course
                                </button>
                            </div>

                            <div class="flex-child green">
                                <h4 class="toprow2"> Variables </h4>
                                <p class="coursebody"> In this course, you will learn how to use sequence, selection, and repetition in programs; work with variables and various forms of input and output </p>
                                <button class="course" 
                                    onclick="window.location.href = '/ks2course/Variables';">
                                        Start Course
                                </button>
                            </div>
                        </div>
                        <br>
                        <div class="flex-container">
                            <div class="flex-child magenta">
                                <h4 class="toprow"> Logic </h4>
                                <p class="coursebody"> In this course, you will learn how to use logical reasoning to predict the behaviour of simple programs </p>
                                <button class="course" 
                                    onclick="window.location.href = '/ks1course/Logic';">
                                        Start Course
                                </button>
                            </div>

                            <div class="flex-child green">
                                <h4 class="toprow2"> Reasoning </h4>
                                <p class="coursebody"> In this course, you will learn how to use logical reasoning to explain how some simple algorithms work and to detect and correct errors in algorithms and programs  </p>
                                <button class="course" 
                                    onclick="window.location.href = '/ks2course/Reasoning';">
                                        Start Course
                                </button>
                            </div>
                        </div>
                        <br>
                        <div class="flex-container">
                            <div class="flex-child magenta">
                                <h4 class="toprow"> Purpose </h4>
                                <p class="coursebody"> In this course, you will learn how to use technology purposefully to create, organise, store, manipulate and retrieve digital content </p>
                                <button class="course" 
                                    onclick="window.location.href = '/ks1course/Purpose';">
                                        Start Course
                                </button>
                            </div>

                            <div class="flex-child green">
                                <h4 class="toprow2"> Networks </h4>
                                <p class="coursebody"> In this course, you will learn about computer networks including the internet; how they can provide multiple services, such as the world wide web; and the opportunities they offer for communication and collaboration  </p>
                                <button class="course" 
                                    onclick="window.location.href = '/ks2course/Networks';">
                                        Start Course
                                </button>
                            </div>
                        </div>
                        <br>
                        <div class="flex-container">
                            <div class="flex-child magenta">
                                <h4 class="toprow"> Information </h4>
                                <p class="coursebody"> In this course, you will learn how to recognise common uses of information technology beyond school </p>
                                <button class="course" 
                                    onclick="window.location.href = '/ks2course/Information';">
                                        Start Course
                                </button>
                            </div>

                            <div class="flex-child green">
                                <h4 class="toprow2"> Search </h4>
                                <p class="coursebody"> In this course, you will learn how to use search technologies effectively, appreciate how results are selected and ranked, and be discerning in evaluating digital content</p>
                                <button class="course" 
                                    onclick="window.location.href = '/ks1course/Search';">
                                        Start Course
                                </button>
                            </div>
                        </div>
                        <br>
                        <div class="flex-container">
                            <div class="flex-child magenta">
                                <h4 class="toprow"> Safety </h4>
                                <p class="coursebody"> In this course, you will learn how to use technology safely and respectfully, keeping personal information private; identify where to go for help and support when they have concerns about content or contact on the internet or other online technologies. </p>
                                <button class="course" 
                                    onclick="window.location.href = '/ks2course/Safety';">
                                        Start Course
                                </button>
                            </div>

                            <div class="flex-child green">
                                <h4 class="toprow2"> Variety </h4>
                                <p class="coursebody"> In this course, you will learn how to select, use and combine a variety of software (including internet services) on a range of digital devices to design and create a range of programs, systems and content that accomplish given goals, including collecting, analysing, evaluating  and presenting data and information</p>
                                <button class="course" 
                                    onclick="window.location.href = '/ks1course/Variety';">
                                        Start Course
                                </button>
                            </div>
                        </div>
                        <br>
                        <div class="flex-container">
                            <div class="flex-child magenta" id="complete">
                                <h4 class="toprow3"> You Made It! </h4>
                                <p class="coursebody"> Congratulations on completing your training courses! Challenge yourself to further by taking the Key Stage 1 or Key Stage 2 Computing Quizes to earn your <br>Certificate of Completion!</p>
                                <button class="course"
                                    onclick="window.location.href = '/ks1quiz';">
                                        KS1 Computing Quiz
                                </button>
                                <br><br>
                                <button class="course" 
                                    onclick="window.location.href = '/ks2quiz';">
                                        KS2 Computing Quiz
                                </button>
                            </div>

                            <div class="flex-child green">
                                <h4 class="toprow2"> Responsible </h4>
                                <p class="coursebody"> In this course, you will learn how to use technology safely, respectfully, and responsibly; recognise acceptable/unacceptable behaviour; identify a range of ways to report concerns about content and contact.</p>
                                <button class="course" 
                                    onclick="window.location.href = '/ks2course/Responsible';">
                                        Start Course
                                </button>
                            </div>
                        </div>
                    </div>

                    <div id="Courses" class="tabcontent">
                    
                    <h3>Below is the progress you've made in each of your training programs!</h3>

                    <!-- This table holds dummy data which will be implemented in future work -->                
                    <table class="styled-table" style="width:100%">
                        <thead>
                            <tr>
                                <td style="width:50%">KS1 Training Program</td>
                                <td>Progress</td>
                            </tr>
                        <thead>
                        <tbody>
                            <tr>
                                <td>KS1 Algorithms</td>
                                <td><img src="https://i.ibb.co/9GByMWT/bar1.jpg" style="width: 50%; margin-left: 50px"></td>
                            </tr>
                                <td>KS1 Programs</td>
                                <td><img src="https://i.ibb.co/8zTpLqd/bar2.jpg" style="width: 50%; margin-left: 50px"></td>
                            </tr>
                                <td>KS1 Logic</td>
                                <td><img src="https://i.ibb.co/9GByMWT/bar1.jpg" style="width: 50%; margin-left: 50px"></td>
                            </tr>
                            <tr>
                                <td>KS1 Purpose</td>
                                <td><img src="https://i.ibb.co/N9yw5Y9/bar3.jpg" style="width: 50%; margin-left: 50px"></td>
                            </tr>
                                <td>KS1 Information</td>
                                <td><img src="https://i.ibb.co/9GByMWT/bar1.jpg" style="width: 50%; margin-left: 50px"></td>
                            </tr>
                                <td>KS1 Saftey</td>
                                <td><img src="https://i.ibb.co/8zTpLqd/bar2.jpg" style="width: 50%; margin-left: 50px"></td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <td style="width:50%">KS2 Training Program</td>
                                <td>Progress</td>
                            </tr>
                        <thead>
                        <tbody>
                            <tr>
                                <td>KS2 Debugging</td>
                                <td><img src="https://i.ibb.co/8zTpLqd/bar2.jpg" style="width: 50%; margin-left: 50px"></td>
                            </tr>
                                <td>KS2 Variables</td>
                                <td><img src="https://i.ibb.co/N9yw5Y9/bar3.jpg" style="width: 50%; margin-left: 50px"></td>
                            </tr>
                                <td>KS2 Reasoning</td>
                                <td><img src="https://i.ibb.co/9GByMWT/bar1.jpg" style="width: 50%; margin-left: 50px"></td>
                            </tr>
                            </tr>
                                <td>KS2 Networks</td>
                                <td><img src="https://i.ibb.co/9GByMWT/bar1.jpg" style="width: 50%; margin-left: 50px"></td>
                            </tr>
                            </tr>
                                <td>KS2 Search</td>
                                <td><img src="https://i.ibb.co/N9yw5Y9/bar3.jpg" style="width: 50%; margin-left: 50px"></td>
                            </tr>
                            </tr>
                                <td>KS2 Variety</td>
                                <td><img src="https://i.ibb.co/8zTpLqd/bar2.jpg" style="width: 50%; margin-left: 50px"></td>
                            </tr>
                            </tr>
                                <td>KS2 Responsible</td>
                                <td><img src="https://i.ibb.co/9GByMWT/bar1.jpg" style="width: 50%; margin-left: 50px"></td>
                            </tr>
                        </tbody>
                    </table>
                    
                    </div>

                     <!-- This section has an embedded twitter feed for the TeDucate Primary account which users can interact with [reference 3] -->
                    <div id="Community" class="tabcontent">
                    <h3>Community Page</h3>
                    <p>Keep up to date with everything TeDucate Primary has to offer by following our Tweets!</p>
                        <a class="twitter-timeline" data-width="470" data-height="600" href="https://twitter.com/SarahAz21203704?ref_src=twsrc%5Etfw">Tweet Your Experiences to TeDucate!</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    <br><br>
                    <h3>Share Your Experiences!</h3>
                    <p>Use the <strong>#teducateprimary</strong> hashtag in your tweet to share your experiences with our community of TeDucators!</p>
                        <div class="taggbox" style="width:100%;height:100%; background-color:white" data-widget-id="104206" data-tags="false"></div><script src="https://widget.taggbox.com/embed-lite.min.js" type="text/javascript"></script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>