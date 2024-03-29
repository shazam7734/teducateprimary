<!DOCTYPE html>
<html>
    <head>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Styles -->
        <link href="/css/training.css" rel="stylesheet">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet'>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

        <script>
            //This function will update the training level depending on how the user scored that topic on the curriculum survey [reference 4]
            window.onload = function(){  
                if ({{$Score}} > 1 && {{$Score}} < 3) {
                    training_level = document.getElementById("training_level");
                    training_level.innerHTML = training_level.innerHTML+" Easy";
                }
                else if ({{$Score}} > 2 && {{$Score}} < 6) {
                    training_level = document.getElementById("training_level");
                    training_level.innerHTML = training_level.innerHTML+" Intermediate";

                }
                else {
                    training_level = document.getElementById("training_level");
                    training_level.innerHTML = training_level.innerHTML+" Advanced";

                }
            }
                        
            //This function will create the dymanic training course depending on the year group the user clicks on from the dropdown menu
            function get_Details_By_Year() {
                year_value= document.getElementById("ks2group").value;
                var tutorials = document.getElementById("tutorials");
                var instructions = document.getElementById("instructions");
                var lesson_plan = document.getElementById("lesson_plan");

                //deleteChilds(tutorials);
                //deleteChilds(instructions);
                //deleteChilds(lesson_plan);
                tutorials.innerHTML = "Tutorials";
                instructions.innerHTML="Instructions";
                lesson_plan.innerHTML="Lesson Plan";
                var resources = @json($resources);
                if (resources != null) {
                    for (var resource in resources[0]) {
                        if (resources[0][resource]["year"] == year_value) {
                        
                            if(resources[0][resource]["tutorial1"]!=""){
                                tutorials.appendChild(document.createElement("hr")) ;
                                var a = createLink("Tutorial1", resources[0][resource]["tutorial1"]);
                                tutorials.appendChild(a);
                                tutorials.appendChild(document.createElement("hr")) ;
                            }
                            if(resources[0][resource]["tutorial2"]!=""){
                                var a = createLink("Tutorial2", resources[0][resource]["tutorial2"]);
                                tutorials.appendChild(a);
                                tutorials.appendChild(document.createElement("hr")) ;
                                }
                            if(resources[0][resource]["tutorial3"]!=""){
                                var a = createLink("Tutorial3", resources[0][resource]["tutorial3"]);
                                tutorials.appendChild(a);
                                tutorials.appendChild(document.createElement("hr"));
                            }
                            if(resources[0][resource]["primary_instructions"]!=""){
                                var a = createLink("Primary Instructions", resources[0][resource]["primary_instructions"]);
                                instructions.appendChild(document.createElement("hr"));
                                instructions.appendChild(a);
                                instructions.appendChild(document.createElement("hr"));
                            }
                            if(resources[0][resource]["secondary_instructions"]!=""){
                                var a = createLink("Secondary Instructions", resources[0][resource]["secondary_instructions"]);
                                instructions.appendChild(a);
                            }
                            if(resources[0][resource]["lesson"]!=""){
                                var a = createLink("Lesson Plan", resources[0][resource]["lesson"]);
                                lesson_plan.appendChild(document.createElement("hr"));
                                lesson_plan.appendChild(a);
                            }                    
                        
                        }
                    }

                }
            }
            function createLink(text, link) {
                var a = document.createElement('a');
                var innerText = document.createTextNode(text);
                a.appendChild(innerText);
                a.title = text;
                a.href = link;
                a.target = "_blank";
                return a;
            }

            //Function to clear the training course page to keep it dynamic for each user
            function deleteChilds(node) {

                var child = node.lastElementChild;
                while(child){
                    tutorials.removeChild(child);
                    child= tutorials.lastElementChild;
                }
            }
        </script>
    </head>

    <body>
        
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

        <div class="video-container" id="section1">
            <video autoplay muted loop>
                <source src="https://media.istockphoto.com/videos/connected-line-and-dots-on-white-background-video-id1323613388" type="video/mp4" />
            </video>
            <div class="main">
                <br><br>
                <h1>Training Course: {{ $topic_name }}</h1><br>
                <p style="margin-right: 30px">Welcome to your personalised training course! Here you will find video tutorials, lesson plan instructions, and, 
                    of course, interactive lesson plans that are geared for you and your students at your personalised training level 
                    for this course. The difficulty level is set according to the number you gave this topic on the computing curriculum 
                    survey. If you find that this level is not suitable, feel free to re-take the survey at any time to generate a new 
                    training course!</p>
                    <p style="font-weight: bold; font-size: x-large">Please select your year group to get started:</p>
            </div>
                <div class="row">
                    <div class="column">
                        <h2 class="decor"> Survey Score: {{ $Score }}</h2>
                    </div>
                    
                    <div class="column">
                        <h2 name="Training_level" id="training_level" class="decor"> Training Level:</h2>
                    </div>

                    <div class="column">
        
                        <label for="ks2group"></label>
                        <select id="ks2group" name="ygroup" class="decor">
                            <option value="ygroup">Year Group</option>
                            <option value="3">Year 3</option>
                            <option value="4">Year 4</option>
                            <option value="5">Year 5</option>
                            <option value="6">Year 6</option>
                        </select>
                        <input type="submit" onclick="get_Details_By_Year();">
                    </div>
                 </div>
        </div>

        <div id="section2">

            <div class="row">
                <div class="secondcolumn">
                    <h3 class="align" style="margin-left: 250px">Getting Started</h3>
                    <hr class="line" style="margin-left: 218px">
                    <p class="palign" style="margin-left: 250px">Use the following links as an <br>introduction to this topic!</p>
                    <hr class="line2" style="margin-left: 250px">
                    <h3 id="tutorials" class="palign" style="margin-left: 250px">Please select a year group</h3>
                </div>
                
                <div class="secondcolumn">
                    <h3 class="align">Teaching Instructions</h3>
                    <hr class="line">
                    <p class="palign">Use the following links to access <br> some lesson plan instructions!</p>
                    <hr class="line2">
                    <h3 id="instructions" class="palign">Please select a year group</h3>
                </div>

                <div class="secondcolumn">
                    <h3 class="align" style="margin-right: 250px">Lesson Plans</h3>
                    <hr class="line" style="margin-left: -35px">
                    <p class="palign" style="margin-right: 250px">Use the following links to access relevant lesson plans!</p>
                    <hr class="line2" style="margin-right: 250px">
                    <h3 id="lesson_plan" class="palign" style="margin-right: 250px">Please select a year group</h3>
                </div>     
            </div>
            <div class="share">
                <p class="sharetitle" style="color:white">Share Your Experience</p>
                <hr class="line">
                <p>Share your experiences on Twitter using the <a href="https://twitter.com/login">#teducateprimary</a> hashtag for your chance to win!</P>
                <hr class="line2">
                <P>Visit the Community Page from <br> your <a href="http://127.0.0.1:8000/home">Profile</a> to learn more</p>
            </div>
        </div>
        <div class="video-container">
            <video autoplay muted loop>
                <source src="https://player.vimeo.com/external/372335193.sd.mp4?s=80151fa22b2eba81883c8641f2c9e493762c7357&profile_id=164&oauth2_token_id=57447761" type="video/mp4" />
            </video>
    </body>
</html>
    
    
    