<!DOCTYPE html>
<html>
    <head> 
        <link href="/css/style.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet'>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">
        <style>
            body {
            background-image: url('https://img.freepik.com/premium-photo/simple-white-background-with-smooth-lines-light-colors_476363-5558.jpg?w=2000');
            }
        </style>
        <script>
            $('input:radio').click(function() {
            var algorithms = $('input:radio[name=algorithms]:checked').val();
            var programs = $('input:radio[name=programs]:checked').val();
            var logic = $('input:radio[name=logic]:checked').val();
            var purpose = $('input:radio[name=purpose]:checked').val();
            var information = $('input:radio[name=information]:checked').val();
            var safety = $('input:radio[name=safety]:checked').val();
            
            var goals = $('input:radio[name=goals]:checked').val();
            var variables = $('input:radio[name=variables]:checked').val();
            var reasoning = $('input:radio[name=reasoning]:checked').val();
            var networks = $('input:radio[name=networks]:checked').val();
            var search = $('input:radio[name=search]:checked').val();
            var variety = $('input:radio[name=variety]:checked').val();
            var responsible = $('input:radio[name=responsible]:checked').val();
            });
        </script>
    </head>

    <body>
    <form action="/survey" onsubmit="return thank_you_function()" method="post">
    @csrf
        <h1>Computing Curriculum Survey</h1>
        <h3>Please fill out the survey below for both Key Stage 1 and Key Stage 2. Rank each computing curriculum teaching point depending
            on how well you feel you know them. Click <span class="purple">"Reset"</span> to clear the form if you need to start again. Click <span class="purple">"Submit"</span> when you're done to create your personalised training platform!
        <br><br>
        <table class="striped-columns border one">
        <thead>
            <tr>
                <th class="heading" style="width:750px">Key Stage One Teaching Points</th>
                <th>Never Heard Of It</th>
                <th>Need Some Hints</th>
                <th>Looks Familiar </th>
                <th>Know Bits & Pieces</th>
                <th>Know But Not Used</th>
                <th>Used Once or Twice</th>
                <th>I'm An Expert!</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Understand what algorithms are; how they are implemented as programs on digital devices; and  that programs execute by following precise and unambiguous instructions </td>
                <td><input type="radio" value="1" name="algorithms" required /></td>
                <td><input type="radio" value="2" name="algorithms" required/></td>
                <td><input type="radio" value="3" name="algorithms" required/></td>
                <td><input type="radio" value="4" name="algorithms" required/></td>
                <td><input type="radio" value="5" name="algorithms" required/></td>
                <td><input type="radio" value="6" name="algorithms" required/></td>
                <td><input type="radio" value="7" name="algorithms" required/></td>
            </tr>
            <tr>
                <td>Create and debug simple programs</td>
                <td><input type="radio" value="1" name="programs" required/></td>
                <td><input type="radio" value="2" name="programs" required/></td>
                <td><input type="radio" value="3" name="programs" required/></td>
                <td><input type="radio" value="4" name="programs" required/></td>
                <td><input type="radio" value="5" name="programs" required/></td>
                <td><input type="radio" value="6" name="programs" required/></td>
                <td><input type="radio" value="7" name="programs" required/></td>
            </tr>
            <tr>
                <td>Use logical reasoning to predict the behaviour of simple programs </td>
                <td><input type="radio" value="1" name="logic" required/></td>
                <td><input type="radio" value="2" name="logic" required/></td>
                <td><input type="radio" value="3" name="logic" required/></td>
                <td><input type="radio" value="4" name="logic" required/></td>
                <td><input type="radio" value="5" name="logic" required/></td>
                <td><input type="radio" value="6" name="logic" required/></td>
                <td><input type="radio" value="7" name="logic" required/></td>
            </tr>
            <tr>
                <td>Use technology purposefully to create, organise, store, manipulate and retrieve digital content </td>
                <td><input type="radio" value="1" name="purpose" required/></td>
                <td><input type="radio" value="2" name="purpose" required/></td>
                <td><input type="radio" value="3" name="purpose" required/></td>
                <td><input type="radio" value="4" name="purpose" required/></td>
                <td><input type="radio" value="5" name="purpose" required/></td>
                <td><input type="radio" value="6" name="purpose" required/></td>
                <td><input type="radio" value="7" name="purpose" required/></td>
            </tr>
            <tr>
                <td>Recognise common uses of information technology beyond school</td>
                <td><input type="radio" value="1" name="information" required/></td>
                <td><input type="radio" value="2" name="information" required/></td>
                <td><input type="radio" value="3" name="information" required/></td>
                <td><input type="radio" value="4" name="information" required/></td>
                <td><input type="radio" value="5" name="information" required/></td>
                <td><input type="radio" value="6" name="information" required/></td>
                <td><input type="radio" value="7" name="information" required/></td>
            </tr>
            <tr>
                <td>Use technology safely and respectfully, keeping personal information private; identify where to go for help and support when they have concerns about content or contact on the internet or other online technologies. </td>
                <td><input type="radio" value="1" name="safety" required/></td>
                <td><input type="radio" value="2" name="safety" required/></td>
                <td><input type="radio" value="3" name="safety" required/></td>
                <td><input type="radio" value="4" name="safety" required/></td>
                <td><input type="radio" value="5" name="safety" required/></td>
                <td><input type="radio" value="6" name="safety" required/></td>
                <td><input type="radio" value="7" name="safety" required/></td>
            </tr>
        </tbody>
        </table>
        <br><br>
        <table class="striped-columns border one">
        <thead style="column-width: 50%">
            <tr>
                <th class="heading" style="width:750px">Key Stage Two Teaching Points</th>
                <th>Never Heard Of It</th>
                <th>Need Some Hints</th>
                <th>Looks Familiar </th>
                <th>Know Bits & Pieces</th>
                <th>Know But Not Used</th>
                <th>Used Once or Twice</th>
                <th>I'm An Expert!</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Design, write and debug programs that accomplish specific goals, including controlling or simulating physical systems; solve problems by decomposing them into smaller parts</td>
                <td><input type="radio" value="1" name="goals" required/></td>
                <td><input type="radio" value="2" name="goals" required/></td>
                <td><input type="radio" value="3" name="goals" required/></td>
                <td><input type="radio" value="4" name="goals" required/></td>
                <td><input type="radio" value="5" name="goals" required/></td>
                <td><input type="radio" value="6" name="goals" required/></td>
                <td><input type="radio" value="7" name="goals" required/></td>
            </tr>
            <tr>
                <td>Use sequence, selection, and repetition in programs; work with variables and various forms of input and output </td>
                <td><input type="radio" value="1" name="variables" required/></td>
                <td><input type="radio" value="2" name="variables" required/></td>
                <td><input type="radio" value="3" name="variables" required/></td>
                <td><input type="radio" value="4" name="variables" required/></td>
                <td><input type="radio" value="5" name="variables" required/></td>
                <td><input type="radio" value="6" name="variables" required/></td>
                <td><input type="radio" value="7" name="variables" required/></td>
            </tr>
            <tr>
                <td>Use logical reasoning to explain how some simple algorithms work and to detect and correct errors in algorithms and programs </td>
                <td><input type="radio" value="1" name="reasoning" required/></td>
                <td><input type="radio" value="2" name="reasoning" required/></td>
                <td><input type="radio" value="3" name="reasoning" required/></td>
                <td><input type="radio" value="4" name="reasoning" required/></td>
                <td><input type="radio" value="5" name="reasoning" required/></td>
                <td><input type="radio" value="6" name="reasoning" required/></td>
                <td><input type="radio" value="7" name="reasoning" required/></td>
            </tr>
            <tr>
                <td>Understand computer networks including the internet; how they can provide multiple services, such as the world wide web; and the opportunities they offer for communication and collaboration </td>
                <td><input type="radio" value="1" name="networks" required/></td>
                <td><input type="radio" value="2" name="networks" required/></td>
                <td><input type="radio" value="3" name="networks" required/></td>
                <td><input type="radio" value="4" name="networks" required/></td>
                <td><input type="radio" value="5" name="networks" required/></td>
                <td><input type="radio" value="6" name="networks" required/></td>
                <td><input type="radio" value="7" name="networks" required/></td>
            </tr>
            <tr>
                <td>Use search technologies effectively, appreciate how results are selected and ranked, and be discerning in evaluating digital content </td>
                <td><input type="radio" value="1" name="search" required/></td>
                <td><input type="radio" value="2" name="search" required/></td>
                <td><input type="radio" value="3" name="search" required/></td>
                <td><input type="radio" value="4" name="search" required/></td>
                <td><input type="radio" value="5" name="search" required/></td>
                <td><input type="radio" value="6" name="search" required/></td>
                <td><input type="radio" value="7" name="search" required/></td>
            </tr>
            <tr>
                <td>Select, use and combine a variety of software (including internet services) on a range of digital devices to design and create a range of programs, systems and content that accomplish given goals, including collecting, analysing, evaluating  and presenting data and information</td>
                <td><input type="radio" value="1" name="variety" required/></td>
                <td><input type="radio" value="2" name="variety" required/></td>
                <td><input type="radio" value="3" name="variety" required/></td>
                <td><input type="radio" value="4" name="variety" required/></td>
                <td><input type="radio" value="5" name="variety" required/></td>
                <td><input type="radio" value="6" name="variety" required/></td>
                <td><input type="radio" value="7" name="variety" required/></td>
            </tr>
            <tr>
                <td>Use technology safely, respectfully, and responsibly; recognise acceptable/unacceptable behaviour; identify a range of ways to report concerns about content and contact.</td>
                <td><input type="radio" value="1" name="responsible" required/></td>
                <td><input type="radio" value="2" name="responsible" required/></td>
                <td><input type="radio" value="3" name="responsible" required/></td>
                <td><input type="radio" value="4" name="responsible" required/></td>
                <td><input type="radio" value="5" name="responsible" required/></td>
                <td><input type="radio" value="6" name="responsible" required/></td>
                <td><input type="radio" value="7" name="responsible" required/></td>
            </tr>
        </tbody>
        </table>
        <br><br><br>
        <button class="submitbtn">Submit</button>
        <input class ="submitbtn" type="reset" name="reset" value="Reset">
        </form>
    </body>
    <script>
    function thank_you_function(){
        alert("Thank you for your feedback.");
    }
    </script>
    <br><br>
</html>

