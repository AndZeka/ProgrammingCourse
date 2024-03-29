<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

    require_once ('component.php');
    require_once ('dbconnection.php');


    $database = new Connection();
    $database->getConnection();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='icon' href='imgs/favicon.ico' type='image/x-icon'>
    <title>About Us</title>
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
</head>
<body class="">
    <div id="header">
        <div class="header wrapper">
            <div class="logo">
                <a href="index.php">
                    <img src="imgs/pgcourse.png" alt="">
                </a>
            </div>
            <div class="navigation-menu">
                <ul class="Dynamic Contact">
                    <li id="HomeNav">
                        <a href="index.php">Home</a>
                    </li>
                    <li id="CoursesNav">
                        <a href="courses.php">Courses</a>
                    </li>
                    <li id="BlogNav">
                        <a href="blog.php">Blog</a>
                    </li>
                    <li id="AboutNav">
                        <a href="about.php">About Us</a>
                    </li>
                    <li id="ContactNav">
                        <a href="contact.php">Contact</a>
                    </li>
                    <li id="CartNav">
                        <a href="cart.php"><i class="fas fa-shopping-cart"></i> Cart
                        <?php

                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\" class=\"text light\">$count</span>";
                        }else{
                            echo "<span id=\"cart_count\" class=\"text light\">0</span>";
                        }

                        ?>
                        </a>
                        
                    </li>
                    <?php
                        if(isset($_SESSION['user'])){
                            $user = $_SESSION['user'];
                            echo "
                            <li id=\"signin\">
                                <a href=\"nav_2.php\">$user</a>
                            </li>
                            ";
                        }else{
                            echo "
                            <li id=\"signin\">
                                <a href=\"login.php\">SIGN IN</a>
                            </li>
                            ";
                        }
                    ?>
                </ul>
            </div>
        </div>
    </div>
      

    <div class="wrapper pageLayout hasSidebar Dynamic">
        <div class="content">
            <div class="dynamicPageInfo block">
                <h1><strong>ABOUT PROGRAMMING COURSE®</strong></h1>
                <p><strong>Programming Course</strong> established in 2020 by a group of experienced students. In mid 2020
                    the first official market version of Programming Course® was released. The company, backed by government
                    and private investors, focuses on the development of insider security solutions and delivering them to
                    customers worldwide via its global partner network. <br><br>
                    We see our mission in providing our customers with an efficient and easy-to-use tool to address all
                    their insider threat monitoring needs as well as improve their compliance and meet security audit
                    requirements. Since its inception in 2020, Programming Course continuously grows engaging customers in
                    both SMB and big enterprise segments working with small firms, public and educational institutions, and
                    Fortune 500 companies.</p>
            </div>
        </div>
        <div class="sidebar ">
            <div class="courseLoactions block">
                <div class="takeCourse">
                    <p>GET THE FREE APP</p>
                    <a href="https://play.google.com/store/apps" target="_blank">
                        <div class="courseGooglePlay">
                            <img src="imgs/get-it-on-google-play-png-get-it-on-google-play-png-519.png" alt="">
                        </div>
                    </a>
                    <a href="https://www.apple.com/ios/app-store/" target="_blank">
                        <div class="courseAppStore">
                            <img src="imgs/download-on-app-store-png-open-2000.png" alt="">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>


<div class="wrapper extraLayout">
    <div class="dynamicPageInfo block">
        <h1><strong>Our Beliefs</strong></h1>
        <div class="row belief">
            <div class=" illustration">
                <img src="imgs/img-education-9b6c3f89af008c4426cf66be4e5871afdbb6f5f7e6a3efea7dc132b60d23a87c (2).svg" alt="">
            </div>
            <div class=" description"> 
                <div><h2><strong>Education should be free and accessible</strong></h2></div>      
                <div><p>This curriculum itself is free and we tried to link to resources that are themselves free so anyone in the world can use them.</p></div>
            </div>  
        </div>
        <div class="row belief">
            <div class=" illustration">
                <img src="imgs/img-build-9840c918a65c373ac8a220469e94972a9a6e0db2451e8f70f27915c3e2e9eaf8 (1).svg" alt="">
            </div>
            <div class=" description"> 
                <div><h2><strong>You learn best by actually building</strong></h2></div>      
                <div><p>The Programming Course curriculum is full of projects that will help you build a strong portfolio of work on Github to fill out your resume.</p></div>
            </div>  
        </div>
        <div class="row belief">
            <div class=" illustration">
                <img src="imgs/img-people-02957345b268cc0d59eba23cf23a4adda830bc1a582f7f52325cb3b6d6417f7a.svg" alt="">
            </div>
            <div class=" description"> 
                <div><h2><strong>Motivation is fueled by working with others</strong></h2></div>      
                <div><p>We're committed to connecting students together so they can stay motivated and learn faster.Lorem ipsum</p></div>
            </div>  
        </div>
        <div class="row belief">
            <div class=" illustration">
                <img src="imgs/img-opensource-107ed37f503595c539000cca7edc68ed3a75c26b9e52d8c0893aa1d6adfdb668.svg" alt="">
            </div>
            <div class=" description"> 
                <div><h2><strong>Open source is best</strong></h2></div>      
                <div><p>Our curriculum and website are available on Github and we encourage students to actually contribute to the project itself!</p></div>
            </div>  
        </div>
    </div>
</div>

<div class="wrapper pageLayout hasSidebar Dynamic">
    <div class="content" id="team">
        <div class="dynamicPageInfo block org">
            <h1>MEET OUR TEAM</h1>
            <div>
                <div class="photo">
                    <img src="imgs/mike.jpg" alt="">
                    <h4 class="name">Mike<br> Skeehan</h4>
                    <span class="qualification">CHIEF EXECUTIVE OFFICER</span>
                </div>
                <div class="photo">
                    <img src="imgs/sabrina500-1.jpg" alt="">
                    <h4 class="name">Sabrina<br>Roussel</h4>
                    <span class="qualification">BUSINESS UNIT DIRECTOR</span>
                </div>
                <div class="photo">
                    <img src="imgs/steveA500-1.jpg" alt="">
                    <h4 class="name">Steve<br> Ambuul</h4>
                    <span class="qualification">EXECUTIVE DIRECTOR OF <br>GROWTH</span>
                </div>
            </div>
            
            <div>
                <div class="photo">
                    <img src="imgs/michelle2.jpg" alt="">
                    <h4 class="name">Michelle<br> Chu</h4>
                    <span class="qualification">DIRECTOR OF TECHNOLOGY</span>
                </div>
                <div class="photo">
                    <img src="imgs/phil.jpg" alt="">
                    <h4 class="name">Phil<br>Dupertuis</h4>
                    <span class="qualification">DIRECTOR OF CLIENT<br>SERVICES</span>
                </div>
                <div class="photo">
                    <img src="imgs/talar.jpg" alt="">
                    <h4 class="name">Talar<br>Malakian</h4>
                    <span class="qualification">BUSINESS UNIT DIRECTOR</span>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="footer" data-name="contacts">
    <div class="footerTitle">
        <p>Learn Playing. Play Learning</p>
    </div>
    <div class="footerContent wrapper">
        <div class="socialCounts">
            <a class="footerSocial" href="https://twitter.com" target="_blank">
                <div class="footerTwitter">
                    <i class="fab fa-twitter"></i>
                </div>
                <span>@PrgorammingCourse</span>
            </a>
            <a class="footerSocial" href="http://www.facebook.com" target="_blank">
                <div class="footerFacebook">
                    <i class="fab fa-facebook-f"></i>
                </div>
                <span>PrgorammingCourse</span>
            </a>
        </div>
        <div class="about">
            <div class="logoFooter">
                <img src="imgs/logo.png" alt="">
            </div>
            <div>
                <p>PrgorammingCourse Inc.</p>
                <address>
<br />Lagjia Kalabria
<br />10000, Prishtine, Kosovo</address>
            </div>
            <button>Email Us</button>
        </div>
        <div class="footerMenu Home">
            <ul>
                <li>
                    <a href="index.php" id="footerHome">Home</a>
                </li>
                <li>
                    <a href="courses.php" id="footerCourses">Courses</a>
                </li>
                <li>
                    <a href="blog.php" id=footerBlog>Blog</a>
                </li>
                <li>
                    <a href="about.php" id="footerAbout">About Us</a>
                </li>
                <li>
                    <a href="contact.php" id="footerContacts">Contact</a>
                </li>
                <li>
                    <a href="#" id="footerPrivacy-Policy">Terms of Use</a>
                </li>
                <li>
                    <a href="#" id="faq">FAQ</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="copyright">
        © 2020 Programming Course, Inc. All rights reserved.<br><a href=" https://github.com/AndZeka/ProjektiWebEng">Repository: And Zeka, Rina Kasabaqi, Kushtrim Canolli</a>
    </div>

</body>
</html> 