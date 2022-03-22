<?php


$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $message = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$message'") or die('query failed');
   
   if(mysqli_num_rows($select_message) > 0){
    echo '<script>
    alert("Message Sent Already!")
</script>';
   }else{
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$message')") or die('query failed');
      echo '<script>
    alert("Message Sent Successfully!")
</script>';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shubhajit Paul - PORTFOLIO</title>

<!--AOS library -->
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style11.css">

    <!-- aos css link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">




</head>
<body>



<!-- custom cursors  -->
<div class="cursor-1"></div>
<div class="cursor-2"></div>


<div id="menu-bars" class="fas fa-bars"></div>
    
<!-- header section starts  -->

<header>

    <a href="#" class="logo" data-aos="slide-down"> <span>Shubhajit</span> Paul </a>

    <nav class="navbar" data-aos="slide-up">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#service">Service</a>
        <a href="#education">Education</a>
        <a href="#portfolio">Projects</a>
        <a href="#gallery">Gallery</a>
        <a href="#contact">Contact</a>
    </nav>

    <div class="follow" >
        <a href="https://www.facebook.com/shubhajit.paul.395" class="fab fa-facebook-f" ></a>
        <a href="https://github.com/Shubhajit-Paul" class="fab fa-github"></a>
        <a href="https://www.instagram.com/deathofwrite_99/" class="fab fa-instagram"></a>
        <a href="https://www.linkedin.com/mwlite/in/shubhajit-paul-3b1367186" class="fab fa-linkedin"></a>
    </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content" data-aos="fade-right">
        <span class="hi"> Hi there... </span>
        <h3> i am <span> Shubhajit Paul </span> </h3>
        <p class="info"> I am a freelancer </p>
        <p class="text"> "Life is just like a River let it go where it wants"</p>
        <a href="#about" class="btn">About Me</a>
    </div>

    <div class="image" data-aos="fade-left">
        <img src="images/i7.jpg" alt="">
    </div>

</section>
<br>
    <br>
    <br>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

<h1 class="heading" data-aos="zoom-in"> About <span> Me </span> </h1><br><br>

<div class="row-1">

    <div class="image" data-aos="fade-right">
        <img src="images/i6.jpg" alt="">
    </div>

    <div class="content" data-aos="fade-left"> 
        <h3> My name is Shubhajit Paul & I am a Freelancer</h3>
        <p>I'm from Siliguri, West Bengal. Doing <span>B.Tech</span>  in Electronics and Communication (Final Year) from <span>IILM CET, Greater Noida</span>  and working as a External Expert in <span>SSSI Pvt. Ltd</span>. I design and develop <span>Dyanamic Websites</span>  for small and medium business. I'm very passionate about my work and also looking for better opportunity where I can learn new skills & explore myself.</p>
        <br><br>
        <div class="box-container">
            <div class="box">
                <p> <span> Age : </span> 22+ </p>
                <p> <span> Gender : </span> Male </p>
                <p> <span> Language : </span> English, Hindi & Bengali </p>
                <p> <span> Work : </span> Student & Freelancer </p>
            </div>
            <div class="box">
                <p> <span> Phone : </span> +91-70764-74399 </p>
                <p> <span> </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+91-7001425937 </p>
                <p class="font"> <span> Email : </span> shubhajitpaul.official@gmail.com </p>
                <p> <span> Country : </span> India </p>
            </div>
        </div>
        <a href="https://drive.google.com/file/d/15VGzEWVXL5luq1TrxSgFKu0A-dGoy8uS/view?usp=sharing" class="btn">Download CV</a>
        <a href="#contact" class="btn">Hire Me</a>
    </div>

</div>
<br>
    <br>
    <br>


<h1 class="heading" data-aos="zoom-in"> <span> My </span> Skills </h1>

<div class="row-2">

    <div class="skills" data-aos="fade-right">
        <div class="progress">
            <h2>Programming Languages :</h2><br>
            <h3> Java <span> 85% </span> </h3>
            <div class="bar"> <span></span> </div>
        </div>
        <div class="progress">
            <h3> Python Basics <span> 80% </span> </h3>
            <div class="bar"> <span></span> </div><br><br>
        </div>
        
        <div class="progress">
            <h2>Web Development :</h2><br>
            <h3> HTML <span> 85% </span> </h3>
            <div class="bar"> <span></span> </div>
        </div>
        <div class="progress">
            <h3> CSS <span> 75% </span> </h3>
            <div class="bar"> <span></span> </div>
        </div>
        <div class="progress">
            <h3> JavaScript <span> 55% </span> </h3>
            <div class="bar"> <span></span> </div><br><br>
        </div>
        <div class="progress">
            <h2>Database :</h2><br>
            <h3> MySQL <span> 85% </span> </h3>
            <div class="bar"> <span></span> </div>
        </div>
        <div class="progress">
            <h2>Others :</h2><br>
            <h3> WordPress, Minitab, LtSpice & Matlab. </h3>
            
        </div>

    </div>

    

</div>
<br><br><br><br>
</section>

<!-- about section ends -->

<!-- service section starts  -->

<section class="service" id="service">

<h1 class="heading" data-aos="zoom-in"> <span> my </span> services </h1>
<br><br>

    <div class="box-container">

        <div class="box" data-aos="fade-right">
            <i class="fas fa-code"></i>
            <h3>web design</h3>
            
        </div>

        <div class="box" data-aos="fade-up">
            <i class="fas fa-gamepad" ></i>
            <h3>java projects</h3>
            
        </div>

        <div class="box" data-aos="fade-left">
            <i class="fas fa-microchip"></i>
            <h3>Circuit Design</h3>
            
        </div>

        <div class="box" data-aos="fade-right">
            <i class="fas fa-cogs"></i>
            <h3>Application Prototype</h3>
            
        </div>

        <div class="box" data-aos="fade-up">
            <i class="fas fa-edit"></i>
            <h3>College Projects</h3>
            
        </div>

        <div class="box" data-aos="fade-left">
            <i class="fas fa-newspaper"></i>
            <h3>College Assignments</h3>
            
        </div>

        

    </div>

</section>

<!-- service section ends -->

<!-- education section starts  -->

<section class="education" id="education">

    <h1 class="heading" data-aos="zoom-in"> <span> my </span> education </h1>
    <br>
    <br>

    <div class="box-container" data-aos="fade-up">

        <div class="box">
            <div class="content">
                <span> 2022 - 2018 </span>
                <h3>B.Tech</h3>
                <h4>Electronics & Communiccation Engineering</h4>
                <p>IILM College of Engineering & Technology, AKTU University</p>
            </div>
        </div>

        <div class="box">
            <div class="content">
                <span> 2018-2017 </span>
                <h3>Class 12</h3>
                <h4>W.B.C.H.S.E.</h4>
                <p>Siliguri Boys' High School</p>
            </div>
        </div>

        <div class="box">
            <div class="content">
                <span> 2016 - 2015 </span>
                <h3>Class 10</h3>
                <h4>W.B.B.S.E.</h4>
                <p>Siliguri Boys' High School</p>
            </div>
        </div>
        

        

    </div>

</section>

<!-- experience section ends -->

<!-- portfolio section starts  -->

<section class="portfolio" id="portfolio">

    <h1 class="heading" data-aos="zoom-in"> <span> my </span> projects </h1>
    <br>
    <br>
    <br>

    <div class="box-container">

        <div class="box" data-aos="flip-right">
            <img src="images/p1.png" alt="">
            <h3> project 01 </h3>
            <h4>Spending Tracker with Java</h4>
            <div class="icons">
                <a href="#contact" class="fas fa-share" onclick="myalert()"></a>
                <a class="fas fa-eye" href="https://drive.google.com/file/d/1gjcM302q3_O_uTlRKqFQpMQgD08hSlTX/view?usp=sharing"></a>
                
            </div>
        </div>

        <div class="box" data-aos="flip-up">
            <img src="images/p2.jfif" alt="">
            <h3> project 02 </h3>
            <h4>Smart Irrigation System</h4>
            <div class="icons">
                <a href="#contact" class="fas fa-share" onclick="myalert()"></a>
                <a class="fas fa-eye" href="https://drive.google.com/file/d/1Rlgp9EFX9SJpWNh7fpPG--N1NZwWjI0U/view?usp=sharing"></a>
                
            </div>
        </div>

        <div class="box" data-aos="flip-left">
            <img src="images/p3.png" alt="">
            <h3> project 03 </h3>
            <h4>My Portfolio</h4>
            <div class="icons">
                <a href="#contact" class="fas fa-share" onclick="myalert()"></a>
                <a class="fas fa-eye"></a>
                
            </div>
        </div>

        <div class="box" data-aos="flip-right">
            <img src="images/p4.png" alt="">
            <h3> project 04 </h3>
            <h4>Food Delivery Website Prototype</h4>
            <div class="icons">
                <a href="#contact" class="fas fa-share" onclick="myalert()"></a>
                <a class="fas fa-eye" href="https://drive.google.com/file/d/1nrlgWKBXwsf43_4dHfqQ-YC2ryKDcWaq/view?usp=sharing"></a>
                
            </div>
        </div>

        <div class="box" data-aos="flip-down">
            <img src="images/p5.png" alt="">
            <h3> project 05 </h3>
            <h4>Frontend Design of a Website</h4>
            <div class="icons">
                <a href="#contact" class="fas fa-share" onclick="myalert()"></a>
                <a class="fas fa-eye" href="https://github.com/Shubhajit-Paul/WebSmashersWebsiteRepo"></a>
            </div>
        </div>

        <div class="box" data-aos="flip-left">
            <img src="images/p6.jfif" alt="">
            <h3> project 06 </h3>
            <h4>Work in progress, will be uploaded very soon</h4>
            <div class="icons">
                <a href="#contact" class="fas fa-share" onclick="myalert()"></a>
                <a class="fas fa-eye"></a>
            </div>
        </div>

    </div>

</section>
<br>
    <br>
    <br>

<!-- portfolio section ends -->

<!-- Gallery section starts  -->

<section class="gallery" id="gallery">

    <h1 class="heading" data-aos="zoom-in"> <span> My </span> Gallery </h1>
    <br>
    <br>
    <br>

    <div class="box-container">

        <div class="box" data-aos="flip-right">
            <img src="images/i2.jpg" alt="">
        </div>

        <div class="box" data-aos="flip-up">
            <img src="images/i3.jpg" alt="">
            
        </div>

        <div class="box" data-aos="flip-left">
            <img src="images/i4.jpg" alt="">
            
        </div>

        <div class="box" data-aos="flip-right">
            <img src="images/i5.jpg" alt="">
            
        </div>

        <div class="box" data-aos="flip-down">
            <img src="images/i6.jpg" alt="">
            
        </div>

        <div class="box" data-aos="flip-left">
            <img src="images/i8.jpg" alt="">
            
        </div>

    </div>

</section>
<br>
    <br>
    <br>

<!-- Gallery section ends -->


<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading" data-aos="zoom-in"> Contact <span> Me </span> </h1>
    <br>
    <br>
    <br>

    <div class="icons-container" data-aos="flip-up">

        <div class="icons">
            <i class="fas fa-envelope"></i>
            <h3>My email</h3>
            <p>shubhajitpaul.official@gmail.com</p>
            <p>shubhajit.paul.ec22@iilmcet.ac.in</p>
        </div>

        <div class="icons">
            <i class="fas fa-phone"></i>
            <h3>My number</h3>
            <p>+91 70764-74399</p>
            <p>+91 70014-25937</p>
        </div>

        <div class="icons">
            <i class="fas fa-map-marker-alt"></i>
            <h3>My address</h3>
            <h4>Siliguri, West Bengal - 734006</h4>
        </div>

    </div>
    <br>
    <br>
    <br>
    <br>
    
    

    <div class="row" data-aos="flip-right">
        <form method="POST">
        <p>Fill out all required field to send a Message. Please don't spam,Thank you!</p><br><br>

            <input type="text" placeholder="Name" class="box" id="name" name="name" required>
            <input type="email" placeholder="Email" class="box" id="email" name="email" required>
            <input type="text" placeholder="Number" class="box" id="number" name="number" required>

            <textarea placeholder="Message" id="" cols="30" rows="10"  class="msg"  name="message" required></textarea>

            <input type="submit" name="send" class="btn" value="send message">
             <!-- <button class="btn" name = "send">send message</button> -->
            <!-- <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdpM9xqQOZJmtuE1QYSKd51DociBVKCqFuBqcLZaq3TquM5DA/viewform?embedded=true" width="640" height="813" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe> -->

        </form>

        <iframe class="map" data-aos="flip-left" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3563.5408449454967!2d88.44060381484852!3d26.727111783207842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e441a7a5cc5d47%3A0x34aa44ed1357b08!2sWard%2040%2C%20Gitalpara%2C%20Siliguri%2C%20West%20Bengal%20734004!5e0!3m2!1sen!2sin!4v1647780999719!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

    </div>
    

</section>

<!-- contact section ends -->
<!-- Whatsapp Chat-->
<div class="whatsapp_float">
    <a href="https://wa.me/917076474399" target="_blank"><img src="images/w2.png" width="45px" class="whatsapp_float_btn"></a>

</div>

<!-- footer section  -->
<footer class="footer"> Copyright &#169; 2022 | Created By - <span> Shubhajit Paul </span> | All Rights Reserved! </footer>





















<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>
    function myalert() {
        alert("You need permission to share the project!!!");
    }

    
</script>


<!-- <script>
        $(document).ready(function(){
            $('#test').submit(function(e){
                e.preventDefault();
                $.ajax({
                    url:'includes/index.php',
                    method:'post',
                    data:new FormData(this),
                    processData:false,
                    contentType:false,
                    success:function(ob){
                    alertify.success(ob);
                    }

                })



            })




        });
           
</script> -->

<!-- aos js link  -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
        AOS.init({
            offset: 300,
            duration: 1000,
        });
        </script>



</body>
</html>