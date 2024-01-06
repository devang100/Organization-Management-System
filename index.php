<!DOCTYPE html>
<html lang="en">
<head>
    <title>Education website</title>
    <!--iconscout-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    <!--Montsrerrat-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!--swiper js-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <link rel="Stylesheet" href="style.css">
    <style>
        body {
            background-image: url();
        }
    </style>
</head>
<body> 
    <nav>
        <div class="container nav_continer">
            <a href="index.php"><h4>Devang Patel Institute of Advance Technology and Research</h4></a>
            <!-- <ul class="nav_m"> -->
                <!-- <a href="login1.php">Login / Signup</a>
                <li><a href="index.php">Student</a></li>
                <li><a href="about.php">Teacher</a></li>
                <li><a href="course.php">Admin</a></li> -->
                <!-- <li><a href="signup.html">Signup</a></li> -->
                <!-- </ul> -->
                <!-- <button id="open-users-btn"><i class="uil uil-users-alt"></i></button>
                <button id="close-users-btn"><i class="uil uil-multiply"></i></button> -->

            <!-- <img src="moon.png" id="icon"> -->
            <ul class="nav_menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="course.php">Course</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="profile.php">Admission</a></li>
                <li><a href="map.php">Map</a></li>
                <li><a href="signup.php">Login / Signup</a></li>
                </ul>
                <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
                <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>
    <!--------------navbar end--------------->
    <header>
        <div class="container header_container"></div>
        <div class="header_left">
            <h1>Grow your skill to <br>advance career path</h1>
            <p>The Digital Skills for Work and Life course is a good place to start.<br> 
                It will introduce you to what digital means, <br> 
                how it's changing the way we live and work, <br> 
                and how you can learn the skills and <br> 
                gain the confidence needed in the increasingly digital workplace.
            </p>
            <a href="course.php" class="btn btn-primary">Get Started</a>
        </div>
        <div class="header_right">
            <div class="header_right-image">
                <img src="reading_time.svg">
            </div>
        </div>
    </header>
    <!-------------header end---------------->

    <section class="categories">
        <div class="container categories_container">
            <div class="categories_left">
            <h1>Categories</h1>
            <p>
                Learn new skills, pursue your interest or advance your career with our courses
            </p>
            <div class="categories_left-image">
                <img src="undraw_charts.svg">
            </div>
        </div>
            <div class="categories_right">

                <article class="category">
                    <span class="category_icon"><i class="uil uil-bitcoin"></i></span>
                    <h5>BlockChain</h5>
                    <p>Blockchain is a shared, immutable ledger that facilitates the process of recording transactions and tracking assets in a business network.
                    </p>
                </article>

                <article class="category">
                    <span class="category_icon"><i class="uil uil-palette"></i></span>
                    <h5>Graphic Design</h5>
                    <p>Graphic design is a craft where professionals create visual content to communicate messages.
                    </p>
                </article>

                <article class="category">
                    <span class="category_icon"><i class="uil uil-usd-circle"></i></span>
                    <h5>Finance</h5>
                    <p>Finance is defined as the management of money and includes activities such as investing, borrowing, lending, budgeting, saving, and forecasting
                    </p>
                </article>

                <article class="category">
                    <span class="category_icon"><i class="uil uil-megaphone"></i></span>
                    <h5>Marketing</h5>
                    <p>
                        Marketing is the process of attracting potential customers and clients to a product or service
                    </p>
                </article>

                <article class="category">
                    <span class="category_icon"><i class="uil uil-football"></i></span>
                    <h5>Sports</h5>
                    <p>Sport is usually defined as an organised, a competative and a skillful physical activity which asks for devotion and fair play.</p>
                </article>

                <article class="category">
                    <span class="category_icon"><i class="uil uil-puzzle-piece"></i></span>
                    <h5>Business</h5>
                    <p>A business is an organization where people work together. In a business, people work to make and sell products or services. Other people buy the products and services. </p>
                </article>
            </div>
        </div>
    </section>

    <!--categories end-->

    <section class="course">
        <h2>Our Popular course</h2>
        <div class="continer course_container">

            <article class="course">
                <div class="course_img">
                    <img src="undraw_web_developer.svg">
                </div>
                <div class="course_info">
                    <h4>
                        Web Development
                    </h4>
                    <p>Web development is the building and maintenance of websites. Web developers do this by using a variety of coding languages.</p>
                    <a href="web_development.html" class="btn btn-primary">Learn More</a>
                </div>
            </article>

            <article class="course">
                <div class="course_img">
                    <img src="undraw_design_tools.svg">
                </div>
                <div class="course_info">
                    <h4>
                        Design
                    </h4>
                    <p>Design is a plan for arranging elements in such a way as best to accomplish a particular purpose</p>
                    <a href="design.html" class="btn btn-primary">Learn More</a>
                </div>
            </article>

            <article class="course">
                <div class="course_img">
                    <img src="undraw_robotics.svg">
                </div>
                <div class="course_info">
                    <h4>
                        Robotics
                    </h4>
                    <p>Robotics is a branch of engineering that involves the conception, design, manufacture and operation of robots. </p>
                    <a href="robotics.html" class="btn btn-primary">Learn More</a>
                </div>
            </article>

        </div>
    </section>

    <!-------------Course end---------->

    <section class="ques">
        <h2>FAQs</h2>
        <div class="container que_container">

            <article class="que">
                <div class="que_icon"><i class="util uil-plus"></i></div>
                <div class="question_answer">
                    <h4>How do I know right course for me ?</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.<br>
                    Voluptates fuga nemo officiis labore illo aperiam nesciunt<br>
                    suscipit reiciendis repellendus eveniet magni architecto <br>
                    vero eaque voluptatem obcaecati, quas ad dolorum. Laborum.</p>
                </div>
            </article>

            <article class="que">
                <div class="que_icon"><i class="util uil-plus"></i></div>
                <div class="question_answer">
                    <h4>How do I know right course for me ?</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.<br>
                    Voluptates fuga nemo officiis labore illo aperiam nesciunt<br>
                    suscipit reiciendis repellendus eveniet magni architecto <br>
                    vero eaque voluptatem obcaecati, quas ad dolorum. Laborum.</p>
                </div>
            </article>

            <article class="que">
                <div class="que_icon"><i class="util uil-plus"></i></div>
                <div class="question_answer">
                    <h4>How do I know right course for me ?</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.<br>
                    Voluptates fuga nemo officiis labore illo aperiam nesciunt<br>
                    suscipit reiciendis repellendus eveniet magni architecto <br>
                    vero eaque voluptatem obcaecati, quas ad dolorum. Laborum.</p>
                </div>
            </article>

            <article class="que">
                <div class="que_icon"><i class="util uil-plus"></i></div>
                <div class="question_answer">
                    <h4>How do I know right course for me ?</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.<br>
                    Voluptates fuga nemo officiis labore illo aperiam nesciunt<br>
                    suscipit reiciendis repellendus eveniet magni architecto <br>
                    vero eaque voluptatem obcaecati, quas ad dolorum. Laborum.</p>
                </div>
            </article>

            <article class="que">
                <div class="que_icon"><i class="util uil-plus"></i></div>
                <div class="question_answer">
                    <h4>How do I know right course for me ?</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.<br>
                    Voluptates fuga nemo officiis labore illo aperiam nesciunt<br>
                    suscipit reiciendis repellendus eveniet magni architecto <br>
                    vero eaque voluptatem obcaecati, quas ad dolorum. Laborum.</p>
                </div>
            </article>

            <article class="que">
                <div class="que_icon"><i class="util uil-plus"></i></div>
                <div class="question_answer">
                    <h4>How do I know right course for me ?</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.<br>
                    Voluptates fuga nemo officiis labore illo aperiam nesciunt<br>
                    suscipit reiciendis repellendus eveniet magni architecto <br>
                    vero eaque voluptatem obcaecati, quas ad dolorum. Laborum.</p>
                </div>
            </article>

        </div>
    </section>

        <!-------------Questions end---------->

        <section class="container testimonial_container mySwiper">
            <h2>Students Testimonials</h2>
            <div class="swiper-wrapper">

                <article class="testimonial swiper-slide">
                    <div class ="avatar">
                        <img scr ="">
                    </div>
                    <div class="testimonial_info">
                        <h5>Devang Patel</h5>
                        <small>Student</small>
                    </div>
                    <div class="testimonial_body">
                        <p>My experience at Charotar University is great and memorable. The mentors at Charotar University helped us enhance my academic and interpersonal skills. I am thankful to Training & Placement cell for providing a platform to enhance my skills and an opportunity to showcase them. In the last I am saying that The World is here at Charotar University.</p>
                    </div>
                </article>

                <article class="testimonial swiper-slide">
                    <div class ="avatar">
                        <img scr = "">
                    </div>
                    <div class="testimonial_info">
                        <h5>Devang Patel</h5>
                        <small>Student</small>
                    </div>
                    <div class="testimonial_body">
                        <p>It was a great experience studying at Charotar University, a memory to cherish for lifetime. My experience at Charotar was full of learning and grooming. It gave me an opportunity to meet different kind of people from around the world and learnt many things from them. I am thankful to all the faculties, mentors and entire department for providing us with quality education.</p>
                    </div>
                </article>

                <article class="testimonial swiper-slide">
                    <div class ="avatar">
                        <img scr = "">
                    </div>
                    <div class="testimonial_info">
                        <h5>Devang Patel</h5>
                        <small>Student</small>
                    </div>
                    <div class="testimonial_body">
                        <p>My experience at Charotar University is great and memorable. The mentors at Charotar University helped us enhance my academic and interpersonal skills. I am thankful to Training & Placement cell for providing a platform to enhance my skills and an opportunity to showcase them. In the last I am saying that The World is here at Charotar University.</p>
                    </div>
                </article>

                <article class="testimonial swiper-slide">
                    <div class ="avatar">
                        <img scr = "">
                    </div>
                    <div class="testimonial_info">
                        <h5>Devang Patel</h5>
                        <small>Student</small>
                    </div>
                    <div class="testimonial_body">
                        <p>It was a great experience studying at Charotar University, a memory to cherish for lifetime. My experience at Charotar was full of learning and grooming. It gave me an opportunity to meet different kind of people from around the world and learnt many things from them. I am thankful to all the faculties, mentors and entire department for providing us with quality education.</p>
                    </div>
                </article>

                <article class="testimonial swiper-slide">
                    <div class ="avatar">
                        <img scr = "">
                    </div>
                    <div class="testimonial_info">
                        <h5>Devang Patel</h5>
                        <small>Student</small>
                    </div>
                    <div class="testimonial_body">
                        <p>My experience at Charotar University is great and memorable. The mentors at Charotar University helped us enhance my academic and interpersonal skills. I am thankful to Training & Placement cell for providing a platform to enhance my skills and an opportunity to showcase them. In the last I am saying that The World is here at Charotar University.</p>
                    </div>
                </article>

                <article class="testimonial swiper-slide">
                    <div class ="avatar">
                        <img scr = "">
                    </div>
                    <div class="testimonial_info">
                        <h5>Devang Patel</h5>
                        <small>Student</small>
                    </div>
                    <div class="testimonial_body">
                        <p>It was a great experience studying at Charotar University, a memory to cherish for lifetime. My experience at Charotar was full of learning and grooming. It gave me an opportunity to meet different kind of people from around the world and learnt many things from them. I am thankful to all the faculties, mentors and entire department for providing us with quality education.</p>
                    </div>
                </article>
            </div>
        </section>

    <!--------------testimonial ends------------->

    <footer>
        <div class="container footer_container">

            <div class="footer_1">
                <a href="index.php" class ="footer_logo"><h4>DEPSTAR</h4></a>
            <p>
                We are committed to ensuring that our website is accessible to everyone. 
                If you have any questions or suggestions regarding the accessibility of this site, please contact us.
            </p>
            </div>

            <div class="footer_2">
                <h4>Permalinks</h4>
                <ul class="permalinks">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="course.php">Course</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>

            <div class="footer_3">
                <h4>Primacy</h4>
                <ul class="Privacy">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms and Conditions</a></li>
                    <li><a href="#">Refunds Policy</a></li>
                </ul>
            </div>

            <div class="footer_4">
                <h4>Contact Us</h4>
                <div>
                    <p>+91 9904499324</p>
                    <p>+91 99041233639</p>
                </div>
                <ul class="footer_socials">
                    <li><a href="#"><i class="uil uil-facebook-f"></i></a></li>
                    <li><a href="#"><i class="uil uil-instagram-alt"></i></a></li>
                    <li><a href="#"><i class="uil uil-twitter"></i></a></li>
                    <li><a href="#"><i class="uil uil-linkedin-alt"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="footer_copyright">
            <small>Copyright &copy; DEPSTAR</small>
        </div>
    </footer>

    <!--------------footer ends------------->


<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="main.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        pagination: {
        el: ".swiper-pagination",
        clickable: true,
        },
        //when window has more than 600px
        breakpoints: {
            600: { 
                slidesPerView: 2
            }
        }
    });
</script>
<script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
<df-messenger
  intent="WELCOME"
  chat-title="NewAgent"
  agent-id="e2986a1e-e534-47f8-a83d-0350a3758662"
  language-code="en"
></df-messenger>
<!-- ------Dark theme---- -->
<!-- 
<script>
    var icon = document.getElementById("icon");
    icon.onclick = function(){
        document.body.classList.toggle("dark-theme");
        if(document.body.classList.contains("dark-theme")){
            icon.src="sun.png";
        }
        else{
            icon.src="moon.png";
        }
    }
</script> -->

<!-- -----------------------firebase------------------>
    <!-- // Import the functions you need from the SDKs you need
<script scr="https://www.gstatic.com/firebasejs/9.9.4/firebase-app.js"></script>
<script scr="https://www.gstatic.com/firebasejs/9.9.4/firebase-auth.js"></script>
<script>
    // Your web app's Firebase configuration
    const firebaseConfig = {
      apiKey: "AIzaSyCOaU6eDzV7PslF-7A651ge2G25aD3AgnI",
      authDomain: "educational-website-4e53e.firebaseapp.com",
      projectId: "educational-website-4e53e",
      storageBucket: "educational-website-4e53e.appspot.com",
      messagingSenderId: "582764364289",
      appId: "1:582764364289:web:4df2be1db908f2174db600"
    };
  
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
</script>
    <script src="./script/auth.js"></script> -->
  </body>
</html>