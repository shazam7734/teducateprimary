<!DOCTYPE html>
<html>
    <head>
    <link href='https://fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">
    
    <title>TeDucate Primary</title>
    
    <!-- Styles -->
    <link href="/css/style.css" rel="stylesheet">
    </head>

    <body class="antialiased">
        <div class="menu">
            @if (Route::has('login'))
                <div style="margin-left: 10px">
                    @auth
                        <a href="{{ url('/home') }}" class="nav">Profile</a>
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
            <h2>A training platform that enables educators to embed the <a href="/curriculum">Computing Curriculum</a> into primary school education.</h2>
            <div class="dropdown">
                <button class="dropbtn">Explore</button>
                    <div class="dropdown-content">
                        <a href="#section3">Our Mission</a>
                        <a href="#section4">Why TeDucate?</a>
                        <a href="#section5">Getting Started</a>
                    </div>
            </div>
        </div>

        <div class="main" id="section3">
            <h3 class="font-effect-shadow-multiple">-Our Mission-</h3>     

            <div class="container">
                <img src="https://media.getwalkabouts.com/media/tcppel1f/1teacher-benefits-using-technology-in-the-classroom.jpg?anchor=center&mode=crop&width=360&height=220&rnd=132052452031630000" alt="ipads" class="image" style="width:50%">
                <div class="top-left">Learn More</div>
                <div class="middle">
                    <div class="text">To Provide Technical Training Resources For Primary School Teachers based on the Computing Curriculum</div>
                </div>
            </div>

            <div class="container" id="img1">
                <img src="https://elementaryuk.com/wp-content/uploads/2019/07/ipads-QR-code.jpg" alt="ipads" class="image" style="width:50%">
                <div class="top-left">Learn More</div>
                <div class="middle">
                    <div class="text">To Increase Teacher Confidence In Using Techology Within The Classroom</div>
                </div>
            </div>

            <div class="container" id="img2">
                <img src="https://cdn.wallpapersafari.com/47/98/mtYS7K.png" alt="ipads" class="image" style="width:50%">
                <div class="top-left">Learn More</div>
                <div class="middle">
                    <div class="text">To Build a TeDucation Community To Share Ideas and Experiences</div>
                </div>
            </div>

            <div class="container" id="img3">
                <img src="https://s7280.pcdn.co/wp-content/uploads/2020/03/customer_feedback_agile_mainframe_approach-_1400x700-810x405.jpg.optimal.jpg" alt="ipads" class="image" style="width:50%">
                <div class="top-left">Learn More</div>
                <div class="middle">
                    <div class="text">To Create Positive Experiences Based On Your Feedback!</div>
                </div>
            </div>
        
        <div class="main" id="section4">
            <h4 class="font-effect-shadow-multiple">-Why TeDucate?-</h4>
            <h5>Let's work together to make educational technology work for you!</h5>
            <h6>Let's face it, technology has transformed the way we do almost everything in our day to day lives, 
                including how we teach. The amount of technical resources that educators have access to could
                have a signifant impact in improving the classroom experience for you and your students. Here at TeDucate Primary, 
                our aim is to harness the resources that are already available to teachers in most primary schools and
                provide personalised training on how to use these tools to implement the Computing Curriculum.
            </h6>
            <h5>How is TeDucate Primary different?</h5>
            <h6> The Personalised Training Platform </h6>
            <p> At TeDucate, you will be able create your very own personalised training platform within your unique profile page.
                Once you create an account and log in, you can take the 1 minute survey in which you simply rank the <a href="/curriculum">Computing Curriculum</a> 
                teaching points according to how well you think you know them. The system will then automatically generate a complete program full of introductory
                lessons designed for you, lesson plans designed for your students, and interactive apps and games which further stimulate your students knowledge
                of the computing curriculum. The lesson plans are categorised by year group, so you will have access to all the lesson plans should you ever move 
                to a different year group! </p>
            <h6>The TeDucation Community </h6>
            <p>It is important here at TeDucate that we constantly take your, our fellow TeDucator, feedback to improve and provide for you the resources you 
                need to succeed. The TeDucation Community page is a Twitter account created by us for our fellow TeDucators to share your experiences while using our site. 
                Within this page, you can post, comment, share and like posts made by your fellow TeDucators on lesson plans they've done, dusted and shared
                with the TeDucation Community. You can see prime examples of how other teachers have implemented a computing lesson, with examples of students work
                and any other tips and tricks they've shared. Feel free to add a Tweet of your own each time you complete a computing lesson! The more likes you 
                get, the more prizes you win! 

            
            <div class="container" id="img4">
                <img src="https://patientengagementhit.com/images/site/article_headers/_normal/online-provider-reviews.jpg" class="image" style="width:50%">
                <div class="top-left">Learn More</div>
                <div class="middle">
                    <div class="text">1. Take a 1 minute <br> computing curriculum survey!</div>
                </div>
            </div>
            
            <div class="container" id="img5">
                <img src="https://blog.coursify.me/wp-content/uploads/2019/01/online-training-platform.png" class="image" style="width:50%">
                <div class="top-left">Learn More</div>
                <div class="middle">
                    <div class="text">2. Get a personalised training <br> platform filled with computing <br> lessons designed for YOU!</div>
                </div>
            </div>

            <div class="container" id="img6">
                <img src="https://socialengineindia.com/blog/wp-content/uploads/2019/01/social-networking-service.jpg" class="image" style="width:50%">
                <div class="top-left">Learn More</div>
                <div class="middle">
                    <div class="text">3. Build a social network <br> with fellow TeDucators <br> to share your experiences!</div>
                </div>
            </div>
        </div>

        <div class="main" id="section5">
            <h7 class="font-effect-shadow-multiple">-Getting Started-</h7> <br><br><br><br><be>
            <h8>Learn how in 5 easy steps!</h8>
            <div id="img7">
            <img src="https://i.ibb.co/k9XGSKy/flow3.jpg" class="image, center" style="width:53%">
            </div>

            <div class="container" id="img8">
                <img src="https://cdn-icons-png.flaticon.com/512/295/295128.png" class="image">
                <div class="middle">
                    <div class="text">Step 1: <a href="http://127.0.0.1:8000/register">Register</a> <br> and <br> <a href="http://127.0.0.1:8000/login">Log in</a>!</div>
                </div>
            </div>

            <div class="container" id="img9">
                <img src="https://w7.pngwing.com/pngs/369/468/png-transparent-computer-icons-flat-design-checklist-sequence-of-numbers-web-design-logo-apartment-thumbnail.png" class="image" style="border-radius: 50%">
                <div class="middle">
                    <div class="text">Step 2: From your profile page, take the computing curriculum survey!</div>
                </div>
            </div>

            <div class="container" id="img10">
                <img src="https://www.pngitem.com/pimgs/m/596-5965823_training-and-development-icon-clipart-png-download-training.png" class="image" style="border-radius: 50%">
                <div class="middle">
                    <div class="text">Step 3: Access generated training resources and complete lessons with students</div>
                </div>
            </div>

            <div class="container" id="img11">
                <img src="https://cdn.iconscout.com/icon/free/png-256/feedback-chat-comment-discussion-message-complaint-bubble-2-5284.png" class="image" style="border-radius: 50%">
                <div class="middle">
                    <div class="text">Step 4: Leave feedback for each lesson for the application developer</div>
                </div>
            </div>

            <div class="container" id="img12">
                <img src="https://icon-library.com/images/people-talking-icon-png/people-talking-icon-png-18.jpg" class="image" style="border-radius: 50%">
                <div class="middle">
                    <div class="text">Step 5: Share your experience on the <a href="https://twitter.com/SarahAz21203704?ref_src=twsrc%5Etfw">TeDucation Community</a> page to earn likes, comments, points and rewards!</div>
                </div>
            </div>

        </div>
    </body>
</html>