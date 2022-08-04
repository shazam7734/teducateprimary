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


        window.onload = function(){  
        if ({{$Score}} >= 1 && {{$Score}} < 3) {
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
        function get_Details_By_Year() {
            var year_value= document.getElementById("ks1group").value;
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
                        
                        tutorials.appendChild(document.createElement("hr")) ;
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
                        //instructions.innerHTML += " "+ resources[0][resource]["primary_instructions"]+" "+resources[0][resource]["secondary_instructions"];
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
                <img src="https://i.ibb.co/HP9xhP8/logo-banner.jpg" width="80" height="50"> Empowering You
            </a>
        </div>
        <div class="header-right">
            <a href="http://127.0.0.1:8000/home">Home - </a>
            <a href="{{ route('logout') }}">Logout</a>
        </div>
    </div>

    <h1> Please select your year group</h1>
        
            <label for="ks1group">Year Group:</label>
            <select id="ks1group" name="ks1group">
                <option value="ygroup">Year Group</option>
                <option value="1">Year 1</option>
                <option value="2">Year 2</option>
            </select>
            <input type="submit" onclick="get_Details_By_Year();">
       
    <h1> Training Course: {{ $topic_name }}</h1>
    <h1> Survey Score: {{ $Score }}</h1>
    <h1 name="Training_level" id="training_level"> Training Level:</h1>
    
    <h3 id="tutorials">Tutorials</h3>

 

    <h3 id="instructions">Instructions</h3>

    
    <h3 id="lesson_plan">Lesson Plans</h3>
</body>