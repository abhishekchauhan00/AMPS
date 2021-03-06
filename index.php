<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="tablet.css">
    <link rel="stylesheet" href="mobile.css">
    <link rel="stylesheet" href="mobilesmall.css">
    <!-- owl crousel -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.green.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!--Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!--Font awesome icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">
    <title>AMPS</title>
<style>
    .sidenav {
    width: 3.6rem;
    position: fixed;
    z-index: 100000000000000000;
    top: 10rem;
    left: 0;
    text-align:left;
    color:white;
    background: transparent;
    overflow-x: hidden;
    padding: 0px 0;
  }
    </style>
</head>
  
<body>
    <!--Navbar Strip -->
    <nav>
        <div>
            <i class="fa fa-envelope" id="envelope"></i>
            <a href="mailto:aartimemorial@yahoo.com">aartimemorial@yahoo.com
            </a>
        </div>
        <div>
            <i class="fa fa-mobile" id="mobile"></i>
            <a href="tel:+918923078672">+91 8923078672</a>
        </div>
        <div class="socialmedia">
            <a href=""><i class="fa fa-facebook-official" ></i></a>
            <a href=""><i class="fa fa-instagram" ></i></a>
            <a href=""><i class="fa fa-youtube-play" ></i></a>

        </div>
    </nav>
    <!-- nav main -->
    <div class="navmain" id="navmain">
        <img src="images/logo.png">

        <ul>
            <a href="index.php">
                <li>Home</li>
            </a>
            <a href="about.html">
                <li>About Us</li>
            </a>
            <div class="dropdown">
                <a href="">
                    <li>Academics <i class="fa fa-angle-down"></i></li>
                </a>
                <div class="dropdown-content">
                    <a href="academic.html">Curriculum</a>
                    <a href="academic.html">The Kindergarten</a>
                    <a href="academic.html">Primary Section</a>
                    <a href="academic.html">Secondary & Senior Secondary Section</a>
                    <a href="academic.html">Faculties</a>
                    <a href="academic.html">Carrier Guidence Cell</a>
                    <a href="academic.html">Houses</a>
                </div>
            </div>
            <div class="dropdown">
                <a href="">
                    <li>Facalities <i class="fa fa-angle-down"></i></li>
                </a>
                <div class="dropdown-content" style="right: 45%;">
                    <a href="facilities.html">ATL Lab</a>
                    <a href="facilities.html">Science Lab</a>
                    <a href="facilities.html">Coding Club</a>
                    <a href="facilities.html">Sport Club</a>
                    
                    <a href="facilities.html">Personality Development Trainings</a>

                </div>
            </div>
            <div class="dropdown">
                <a href="">
                    <li>Rules & Regulation <i class="fa fa-angle-down"></i></li>
                </a>
                <div class="dropdown-content" style="right: 33%;">
                    <a href="rules.html">School Policy & timings</a>
                    <a href="rules.html">Exam Policy</a>
                    <a href="rules.html">Academics Calender</a>


                </div>
            </div>
            <div class="dropdown">
                <a href="">
                    <li>Campus <i class="fa fa-angle-down"></i> </li>
                </a>
                <div class="dropdown-content" style="right: 22%;">
                    <a href="campus.php">Photos</a>
                    <a href="campus.php">Videos</a>


                </div>
            </div>

            <a href="admission.php">
                <li class="appointment">Admission Enquiry</li>
            </a>
        </ul>

        <div id="menuitems">
            <a href="index.php">Home</a>
            <a href="about.html">About</a>
            <a href="academic.html">Academics <i class="fa fa-angle-right"></i></a>
            <a href="facilities.html">Facalities <i class="fa fa-angle-right"></i></a>
            <a href="rules.html">Rules & Regulation <i class="fa fa-angle-right"></i></a>
            <a href="campus.php">Campus <i class="fa fa-angle-right"></i></a>
            <a href="admission.php" style="color: whitesmoke; background-color: var(--primary)">Admission Enquiry </a>
        </div>

        <i class="fa fa-bars" onclick="myfunction()" id="menubar"></i>
        <i class="fa fa-times" onclick="myfunctions()" id="menubar1"></i>
      
    </div>
    <!-- Navbar done -->
    <!-- main header -->

    <div class="main" id="main">
        <!--Lets Explore -->
        <div class="onheader">
            <h1>Quote of the Day</h1>
            <h2>???The most important day of a person???s education is the first day of school, not Graduation Day.???</h2>
            <h2>-Harry Wong</h2>
            <a href="">EXPLORE</a>
        </div>

    </div>
    <div class="sidenav">
 <button onclick="parent.location='cbse.html'" style=" border-radius:0px 8px 8px 0px; font-size:0.5rem; font-weight:bold; background-color:#f99245; text-align:left; cursor:pointer; border:none; padding: 5px;">CBSE
 <br>Mandatory<br>
 Public<br>
 Disclosure</button>
</div>
    <!-- divbar -->
    <div class="helpdiv">
    <div class="divbar">
        <div class="divcontainer">
            <div class="c1">
                <i class="fa fa-trophy" aria-hidden="true"></i>
                <h3>10+</h3>
                <h4>Years Experience</h4>
            </div>
            <div class="c2"><i class="fa fa-user" aria-hidden="true"></i>
                <h3>600+</h3>
                <h4>Student</h4>
            </div>
            <div class="c3"><i class="fa fa-users" aria-hidden="true"></i>
                <h3>30:1</h3>
                <h4>Student-Teacher Ratio</h4>
            </div>
            <div class="c4"><i class="fa fa-bus" aria-hidden="true"></i>
                <h3>10+</h3>
                <h4>School Bus</h4>
            </div>
        </div>
    </div>
    

    </div>
    <!-- the aarti section -->
    <h3 class="heading" style="margin-top: 3rem;">The Aarti Memorial</h3>
    <div class="theaarti">
        <div class="a1">
            <p>
                The Aarti Memorial Senior Secondary Public School In Rajpur- Chhajpur, Kandhala- Budhana M.Nagar offers a learning environment to its students and is rated as one of the best schools in. Rajpur- Chhajpur, Kandhala- Budhana, M.Nagar  The school follows an integrated CBSE syllabus which is equipped with a micro-schedule that defines preparation on an hour-to-hour basis and acts as an added advantage to students. Further, Arti Memorial Sr.Sec. Schools follow the best and top teaching methodologies. These methods offer the best possible foundation and assistance that help students perform exceptionally well in Olympiad and other competitive exams.

                <a href="about.html" class="more">Read More.....</a>
            </p>
        </div>
        <div class="a2">
            <div><iframe class="youtube" src="https://www.youtube.com/embed/vJXoJ3GlWD0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <!-- news bulletn -->
    <h3 class="heading">Notice Board</h3>
  <div class="notice">
     <div class="bday">
         
             <img src="images/4-40112_happy-birthday-gif-png-transparent-png-removebg-preview.png">
             <marquee width="100%" direction="up" height="150px" scrollamount="4" behavior="scroll">
                <?php
                include "dbconnection.php";
               $n="SELECT *
              from students
              WHERE month(dob) = month(current_date) 
                AND day(dob) = day(current_date)";
                 
                 $n_run = mysqli_query($conn, $n);
                 if(mysqli_num_rows($n_run) > 0){
                 while ($row = mysqli_fetch_assoc($n_run)) {
                 ?>
                 <h4><?php echo $row['name']; ?><br><?php echo $row['class']; if($row['class']>3){
                     echo "<sup>th</sup>";
                 }
                 else if($row['class']==3){
                     echo"<sup>rd</sup>";
                 }
                 else if($row['class']<3){
                    echo"<sup>nd</sup>";
                 } ?></h4>
                 <?php
          }
          }
          else{
          echo "";
          }
          ?>
          </marquee>
     </div>
     <div class="news">
     <?php
                include "dbconnection.php";
               $n="SELECT *
              from notice
              ORDER BY `id` DESC LIMIT 4";
                 
                 $n_run = mysqli_query($conn, $n);
                 if(mysqli_num_rows($n_run) > 0){
                 while ($row = mysqli_fetch_assoc($n_run)) {
                 ?>
         <h5><?php echo $row['dates']; ?></h5><h6><?php echo $row['notice']; ?> </h6><sup>NEW</sup><br>
         <?php
          }
          }
          else{
          echo "";
          }
          ?>
         <!-- <button >Show More..</button> -->
     </div>
  </div>
         <h3 class="heading">Activity And Achievements</h3>
    <!-- Activity and achievements -->
    <div class="activity" id="activity">
        <center>

            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="images/akash.jpg">
                        </div>
                        <div class="flip-card-back">
                            <h1>Aaksh Jawla</h1>
                            <p>Early age innovator</p>
                            <p>He develop a accident detector device.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="images/taniya.jpg">
                        </div>
                        <div class="flip-card-back">
                            <h1>Taniya Rana</h1>
                            <p>Early age founder</p>
                            <p>She develop a covid robot.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="images/yashraj.jpg">
                        </div>
                        <div class="flip-card-back">
                            <h1>Yashraj</h1>
                            <p>Early age innovator</p>
                            <p>Yashraj make a automatic tubewell on and off device.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="images/joni.jpg">
                        </div>
                        <div class="flip-card-back">
                            <h1>Joni</h1>
                            <p>Early age founder</p>
                            <p>He develop a Spray drone.</p>
                        </div>
                    </div>
                </div>
              
                
        </center>
        </div>
        <!-- Gallery -->
        <h3 class="heading">Gallery</h3>
        <div class="gallerybtncontainer">
            <button class="gallerybutton" id="imagebutton" onclick="Images()">IMAGES</button>
            <button class="gallerybutton" id="videobutton" onclick="Videos()">VIDEOS</button>
        </div>
        <div class="galleryborder">
            <div class="gallery" id="gallery">
                <div class="owl-carousel owl-theme" id="images">
                    <div class="students">
                        <img src="images/main page/1.jpg" alt="">
                    </div>
                    <div class="students">
                        <img src="images/main page/2.jpg">
                    </div>
                    <div class="students">
                        <img src="images/main page/3.jpg" alt="">
                    </div>
                    <div class="students">
                        <img src="images/main page/4.jpg" alt="">
                    </div>
                    <div class="students">
                        <img src="images/main page/5.jpg" alt="">
                    </div>
                    <div class="students">
                        <img src="images/main page/6.jpg" alt="">
                    </div>
                    <div class="students">
                        <img src="images/main page/7.jpg" alt="">
                    </div>
                    <div class="students">
                        <img src="images/main page/8.jpg" alt="">
                    </div>
                    <div class="students">
                        <img src="images/main page/9.jpg" alt="">
                    </div>
                    <div class="students">
                        <img src="images/main page/10.jpg" alt="">
                    </div>
                </div>
                <div class="owl-carousel owl-theme" id=videos>
                    <div class="students">
                        <iframe class="youtube" src="https://www.youtube.com/embed/vJXoJ3GlWD0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="students">
                        <iframe class="youtube" src="https://www.youtube.com/embed/vJXoJ3GlWD0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="students">
                        <iframe class="youtube" src="https://www.youtube.com/embed/vJXoJ3GlWD0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="students">
                        <iframe class="youtube" src="https://www.youtube.com/embed/vJXoJ3GlWD0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="students">
                        <iframe class="youtube" src="https://www.youtube.com/embed/vJXoJ3GlWD0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <button class="seemore" onclick="parent.location='campus.php'">See More</button>
            </div>  
            </div>
      <!-- partner 
        <h3 class="heading">Our Partner</h3>   
        <div class="partner">

        </div> -->
    <!-- footer -->
    <div class="footer ">
        <div class="contact ">
            <i class="fa fa-map-marker " id="l " aria-hidden="true "></i>
            <h3>Rajpur Chajpur Khandla Bhudana Muzaffarnagar U.P.</h3>
            <i class="fa fa-phone " aria-hidden="true " id="p"></i>
            <h3 id="p">+91 8923078672</h3>
            <i class="fa fa-envelope-open " aria-hidden="true "></i>
            <h3>&nbsp;aartimemorial@yahoo.com</h3>
     </div>
        <div class="map ">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3479.4552555820455!2d77.36216601442402!3d29.298318660387473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390c30bcfe7c4ee5%3A0xe1be045cd4f8385a!2sARATI%20MEMORIAL%20PUBLIC%20SCHOOL!5e0!3m2!1sen!2sin!4v1629129692060!5m2!1sen!2sin "
                width="100% " height="100% " style="border:0; " allowfullscreen=" " loading="lazy "></iframe>
        </div>
        <div class="name ">
            <div class="n ">
                <h3>Aarti Memorial Public School</h3>
                <h4>Affiliation No. 2131805</h4>
            </div>
        </div>
        <div>

        </div>
    </div>



</body>
<script src="aarti.js"></script>
</html>