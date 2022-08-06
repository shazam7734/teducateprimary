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
                //Laravel method to pass the array stored in the resources variable to this view template (Reference 6)
                var resources = @json($resources);
                //The resources table will have some null values depending on the training level, so this statement will only display the cells which are not empty
                if (resources != null) {
                    for (var resource in resources[0]) {
                        //comparing the user input value with the value stored in the resources database
                        if (resources[0][resource]["year"] == year_value) {
                            //Create an element to start appending the training course links to, separated with a horizontal line "hr" (Reference )
                            tutorials.appendChild(document.createElement("hr")) ;
                            //Create a variable to start appending all the links for the training course
                            var a = createLink("Tutorial1", resources[0][resource]["tutorial1"]);
                            tutorials.appendChild(a);
                            tutorials.appendChild(document.createElement("hr")) ;
                            a = createLink("Tutorial2", resources[0][resource]["tutorial2"]);
                            tutorials.appendChild(a);
                            tutorials.appendChild(document.createElement("hr")) ;
                            a = createLink("Tutorial3", resources[0][resource]["tutorial3"]);
                            tutorials.appendChild(a);
                            tutorials.appendChild(document.createElement("hr"));
                            a = createLink("Primary Instructions", resources[0][resource]["primary_instructions"]);
                            instructions.appendChild(document.createElement("hr"));
                            instructions.appendChild(a);
                            instructions.appendChild(document.createElement("hr"));
                            a = createLink("Secondary Instructions", resources[0][resource]["secondary_instructions"]);
                            instructions.appendChild(a);
                            a = createLink("Lesson Plan", resources[0][resource]["lesson"]);
                            lesson_plan.appendChild(document.createElement("hr"));
                            lesson_plan.appendChild(a);
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

        <div class="header" style="margin-left:2px">
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

        <div class="video-container" id="section1">
            <video autoplay muted loop>
                <source src="https://media.istockphoto.com/videos/connected-line-and-dots-on-white-background-video-id1323613388" type="video/mp4" />
            </video>
            <div class="main">
                <br><br>
                <h1>Training Course: {{ $topic_name }}</h1><br>
                <p>Welcome to your personalised training course! Please select your year group to get started:</p>
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
        </div>

    </body>
</html>
    
    
    