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
            <h3 class="mission">Hover Over The Pictures To Learn More!</h3>
            

            <div class="container">
                <img src="https://media.getwalkabouts.com/media/tcppel1f/1teacher-benefits-using-technology-in-the-classroom.jpg?anchor=center&mode=crop&width=360&height=220&rnd=132052452031630000" alt="ipads" class="image" style="width:50%">
                <div class="middle">
                    <div class="text">To Provide Technical Training Resources For Primary School Teachers based on the Computing Curriculum</div>
                </div>
            </div>

            <div class="container" id="img1">
                <img src="https://elementaryuk.com/wp-content/uploads/2019/07/ipads-QR-code.jpg" alt="ipads" class="image" style="width:50%">
                <div class="middle">
                    <div class="text">To Increase Teacher Confidence In Using Techology Within The Classroom</div>
                </div>
            </div>

            <div class="container" id="img2">
                <img src="https://cdn.wallpapersafari.com/47/98/mtYS7K.png" alt="ipads" class="image" style="width:50%">
                <div class="middle">
                    <div class="text">To Build a TeDucation Community To Share Ideas and Experiences</div>
                </div>
            </div>

            <div class="container" id="img3">
                <img src="https://s7280.pcdn.co/wp-content/uploads/2020/03/customer_feedback_agile_mainframe_approach-_1400x700-810x405.jpg.optimal.jpg" alt="ipads" class="image" style="width:50%">
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
                need to succeed. The TeDucation Community page is a prime example of how we included a feature based on direct feedback from our users! 
                Within this page, you can post, comment, share and like posts made by your fellow TeDucators on lesson plans they've done, dusted and shared
                with the TeDucation Community. You can see prime examples of how other teachers have done a computing lesson, with examples of students work
                and any other tips and tricks they've shared. Feel free to post a blog of your own each time you complete a computing lesson! The more likes you 
                get, the more prizes you win! 
            <h6>Hover over the pictures to discover how it works!</h6>
            
            <div class="container" id="img4">
                <img src="https://media.istockphoto.com/photos/customer-satisfaction-survey-concept-businessman-using-computer-picture-id1312214761?b=1&k=20&m=1312214761&s=170667a&w=0&h=k5-8lZoIyHJGfcMAtSD0iahOD3EyDg0vOlvd4FTXsC8=" class="image" style="width:50%">
                <div class="middle">
                    <div class="text">1. Take a 1 minute <br> computing curriculum survey!</div>
                </div>
            </div>
            
            <div class="container" id="img5">
                <img src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/d58c4917491239.562baa3c36c00.jpg" class="image" style="width:50%">
                <div class="middle">
                    <div class="text">2. Get a personalised training <br> platform filled with computing <br> lessons designed for YOU!</div>
                </div>
            </div>

            <div class="container" id="img6">
                <img src="https://socialengineindia.com/blog/wp-content/uploads/2019/01/social-networking-service.jpg" class="image" style="width:50%">
                <div class="middle">
                    <div class="text">3. Build a social network <br> with fellow TeDucators <br> to share your experiences!</div>
                </div>
            </div>
        </div>

        <div class="main" id="section5">
            <h7 class="font-effect-shadow-multiple">-Getting Started-</h7> <br><br><br><br><be>
            <h8>Hover over the pictures to learn how in 5 easy steps!</h8>
            <div id="img7">
                <img src="https://lh3.googleusercontent.com/Y-RSBfiWmqgMVEErvdVa7atiSGY_wV5JjEZzxTaBPLvw94q6IEUVpzJWs-HwnPOkJD4Tum6nE3hkrzk9YZvA7JobTodEz47hwbBIwxTZ-79Oh0cawDnwj8zV4RvvwrRa-sOE2qGeNWKx7i66o_R0iH4xdmcGrG5M6FnOUxxYqd3hQIIij8cGCwH0_kDfPCMp_l8YsWivXW1j2_3A4bAqjt0ZFvFOLmIVCZ9t3VRpwsq7C1Dwf-oTGWQRfHHiroHT_RYvuehdv3NwtFuE5uSyubc3dtJ7Mz_fMSpQ3gs91z-_uD1rXFGCLmoxkLjG0KewuMSAmGulhdxVIYsi3GFtIHCG1D7EIa_U8kx7oW2GWkKWSI0h0FHaab5Ef-_oxRGcB-Q43DQIgFbkjlY1Vieu36n7jtr_IfmBRNWx18XGgQY2yN_QIyaZ-zxzLhfgia7uX8EOMfd7CKtzL6Ldd31dA9dQeWPzpUA4VHqr-RdYvmjLo8viH7PVcMhliCo0HWdGQrRyevlSwdtbmdp-MmUAZ_Y9R4e6SS6I0lmLjOlhdQDUs2ZP_5iv95nr7LpmDMoTS7J1XsKCtLt3HDXVMNm8ed8PXHXvqllUuPLh8KEYDoqQjl_P6d5lecvpLv7_NZqNrjkbpp2jlHFyE9wA8SzTU_arCGFWAySRGFj7hMdmGrfqw6ArO5CajfxIy_4dwkFnKgnnjmirLpBcBtZKnMte4dQaOeo6tGNt0WFSXIZBYd_BnwsuywQmx1TeCoU0dwzOoUbx0nBqav3vleWlHuq_tY6dYYw1h-XACO2n=w1167-h812-no?authuser=0" class="image" style="width:70%">
            </div>

            <div class="container" id="img8">
                <img src="https://lh3.googleusercontent.com/UZHBP5hilZmraETyCfl5Yo7n4DYPN7Uw-YbQkkSDvdNZ7D94zfqIQxr6btCNrVfg3Lwby6ofyvEOru3Xv4dr8NL3NTp46T0teA_FkJ8ebSRd3sXpYqyRgaE4zVRqIQ368EXCKI_DGhxXmoYcAOejOJk7Zx_E3ztZf8M4V-5oluaoY65vs9MVaHFLQ4TLzEg6OzOSWNOMokkXt2Bx11wgvT1LyrQWIwM9jsgIlgoIS_Vlfpsl3bwZfvIjB2PdY_Uc2APNxQxKuKLnqyits_0Q5kT0ZP9XbJPZ_f0q1qcwdqua4352Tzbdjb5DnVHJJrDcmBLVd7O8UUjLPE9fxVQcNlLKMLWxq551zFKSCpfLl9ICv1BIFOfRtQIibUdVSFJD5RwugQcHSL0TGu_BNUptSGstpzAhabJoccc9-hqUzNpaqFFekucjRSi_OAUSrxJr439l1QaOhuUAD82uEcUsaf5oZwEqleyrR_arJizIc_bf0E7x3ev8XJRIwnppGtHvKa5ZKMwLPv21I8LhcXIg-PSl-Wydifev4gFkyE55c0p06DnlfRgQNyKSreNNEQrNEAnEVZmVHvdDhCxp_0JSZfmBdx-O1pljmYnZqaaSFIy6qhtK88NFrHNjj3GN_QWeF1BpZ_G-IS3OUDzzrqBJgv77H4gJGbNzmqAWk6RYSP8tlhabrd1sCTxzC5NOT2jXLV1ED1curtiPUD8Hp8mmmyNSsaBvxiHwqLxBBsyrYgAWJ4W_VUooYTFnSzU5mxZTL0EWSM87l2bWAAMCa6w_-OUCFl2WcyqCrQDE=w291-h313-no?authuser=0" class="image">
                <div class="middle">
                    <div class="text">Step 1: <a href="http://127.0.0.1:8000/register">Register</a> <br> and <br> <a href="http://127.0.0.1:8000/login">Log in</a>!</div>
                </div>
            </div>

            <div class="container" id="img9">
                <img src="https://lh3.googleusercontent.com/EVp_oO7GJDtuUCWWdQnPdA6_vpSNCf23ofajxMeSieyQylsn3n7_eVVJZkHKxiQZf4-s8aUkmHJhAEU1gkVZJBIm2oYC_1knkb3K2MkYERcoNT5XGsXc9ihUZj8C7BcJ7oATl-rlL5frqwk4Y6pRbg9AMJlfyJswso_jK_Z5VRyEDN8jgZWp9EUzRy4X3opBkS-kUFXSlO83pAdOKe09qyxmeqgjJ98B0QqNM1u1wrryLjKa6UVycvA54A_vuhFL_ser27OV0MJA4yys5lPNM98JngBIOPjspkH-j9GueRUhSU131POz1fCLCUmD96WOIxuVBJffvuc1tkxrKcI1FQ0QPjlP2jZr47jT1qyBv35MV5xSBOacvPT5KaGwM3zsJo4a_oYVVMR2nos_ufa0KlbdEVO88plrD0ML2A3YaIYJ8b2CrFMEQESXSO3ImZs5MwL8mBO6NNEZYPKIOImHX5-Q9cqT_S32c8-qOrmK-J-E6zhsS6CbEMzgz-lTWOets1sUtFByGNuYeANk4VpPHhMqw0SPWZJVFUPbV5a8w5WcFlpzhFm13xP5ZL--8OuaYX4td5T9panOYT2X82iWg8IyE_-birSGkvbDZtKcPmDKFk0v3yb_m2N18ZVgqBhfyfevNchPp99SuLqnJTy9mSigdk_XnuC10bEbvqlz3BlIK4P9DZqs_8Q-3-s7zM9HpyyOdFkqjPKH2-gx2KggbauqKd9G7szmkO921PNoXOrBI-4w7Ug85MdEIuZ8Grni3yKylatYxkQdnaAvHhjhsyBKPn6IU954Qmp2=w958-h358-no?authuser=0" class="image">
                <div class="middle">
                    <div class="text">Step 2: From your profile page, take the computing curriculum survey!</div>
                </div>
            </div>

            <div class="container" id="img10">
                <img src="https://nbsl.org.uk/images/bullets/People/training-areas.jpg" class="image">
                <div class="middle">
                    <div class="text">Step 3: Access generated training resources and complete lessons with students</div>
                </div>
            </div>

            <div class="container" id="img11">
                <img src="https://y26uq11r8xr1zyp0d3inciqv-wpengine.netdna-ssl.com/wp-content/uploads/2019/10/48-1-1024x600.jpg " class="image">
                <div class="middle">
                    <div class="text">Step 4: Leave feedback for each lesson for the application developer</div>
                </div>
            </div>

            <div class="container" id="img12">
                <img src="https://media.istockphoto.com/vectors/social-media-marketing-like-comment-share-signs-vector-id1042841208?k=20&m=1042841208&s=170667a&w=0&h=NIZW_XTfxQYkaiZJqq1OonU0TNWJvImjO67rIbWAncg= " class="image">
                <div class="middle">
                    <div class="text">Step 5: Share your experience on the TeDucation Community page to earn likes, comments, points and rewards!</div>
                </div>
            </div>

        </div>
    </body>
</html>