
<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}

require_once ('component.php');
require_once ('dbconnection.php');


$database = new Connection();
$database->getConnection();


if(isset($_POST['add'])){
    //print_r($_POST['productid']);
    if(isset($_SESSION['cart'])){

        $item_array_id=array_column($_SESSION['cart'],"productid");

        

        if(in_array($_POST['productid'],$item_array_id)){
            echo "<script>alert('Course is already added in the cart..!')</script>";
            echo "<script>window.location = 'index.php'</script>";
        }else{
            $count = count($_SESSION['cart']);
            $item_array=array(
                'productid'=>$_POST['productid']
            );

            $_SESSION['cart'][$count] = $item_array;
        }
    }else{
        $item_array=array(
            'productid'=>$_POST['productid']
        );

        $_SESSION['cart'][0]=$item_array;
        //print_r($_SESSION['cart']);
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Programming Course</title>
<link rel='icon' href='imgs/favicon.ico' type='image/x-icon'>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

</head>
<body class="">
<div id="homeHeader">
<div class="homeHeader">
    <div class="logo">
        <a href="#">
            <img src="imgs/pgcourse.png" alt="">
        </a>
    </div>
    <div class="navigation-menu">
        <ul class="Home">
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
                        <a href=\"nav_2.php\">$user </a>
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
    <div class="slider">
        <div class="slideText">
            <span>
                Join Your Course to <br>Success
            </span>
            <p>
                New social learning is here!
            </p>
        </div>
        <a href="courses.php">Start Learning Now</a>
    </div>
</div>
<a class="prev" onclick="previous()">❮</a>
<a class="next" onclick="next()">❯</a>
</div>






<div class="storesOutline wrapper Android" id="temp">
<a href="https://play.google.com/store/apps" class="learnOnAndroid">
    <div class="homeGooglePlay">
        <img src="imgs/get-it-on-google-play-png-get-it-on-google-play-png-519.png" alt="">
    </div>
</a>
<a href="https://www.apple.com/ios/app-store/"class="learnOnIOS">
    <div class="homeAppStore">
        <img src="imgs/download-on-app-store-png-open-2000.png" alt="">
    </div>
</a>
<a href="courses.php"class="learnOnWeb">
    <div class="homeWeb">
        <img src="imgs/web.png" alt="">
    </div>
</a>
</div>


<div class="homeCourseContent wrapper">
    <?php
        $result = $database->getConditionData();
        while ($row = mysqli_fetch_assoc($result)){
            mainElements($row['course_name'],  $row['course_img'],$row['course_description'],$row['ID']);
        }
    ?>

<a href="courses.php" class="viewAll">View All Our Courses</a>
</div>



<div id="storeInfo">
<div class="storeInfoContent">
    <div class="usersInfo">
        <div>
            <p>
                <span>12,253,022</span>
                Learners
            </p>
            <p>
                <span>1766</span>
                Lessons
            </p>
        </div>
        <div>
            
            <p>
                <span>14,288</span>
                Quizzes
            </p>
        </div>
    </div>
    <div class="topInfo">
        <div class="phoneImg">
            <img src="imgs/pngwing.com.png" alt="Phone">
        </div>
        <div class="mainInfo">
            <div class="infoTitle">
                <span>
                    Available Anytime & Anywhere for FREE!
                </span>
                <p>
                    This is the website we wish we had when we were learning on our own.
<br /> We scour the internet looking for only the best resources to supplement your learning and present them in a logical order.
<br />Always pick up where you left off. 
<br />More simple and enjoyable than ever!
                </p>
            </div>
            
        </div>
    </div>
</div>
</div>



<div id="reviews">
<div class="reviewTitle">
    <p>YOU ARE IN GOOD COMPANY.</p>
    <span>Over <span> 10,000,000 </span> learners all over the world use our apps on all types of devices.</span>
</div>
<div class="socialIcons">
    <a href="http://www.facebook.com" class="facebook" ><i class="fab fa-facebook-f"></i></a>
    <a href="https://twitter.com" class="twitter" ><i class="fab fa-twitter"></i></a>
    <a href="https://instagram.com" class="instagram" ><i class="fab fa-instagram"></i></a>
</div>
<div class="reviewsContent">
    <div class="review left">
        <div class="reviewText">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. At dolorem, quae aperiam ea temporibus modi, commodi voluptates excepturi illo voluptatum enim veritatis officiis adipisci doloremque porro ad! Quibusdam, soluta accusamus.
            </p>
        </div>
        <div class="reviewInfo">
            
            <img src="imgs/Nico Howe.jpg" alt="Nico Howe" class="reviewUserAvatar">
            <div class="reviewUser">
                <span class="reviewUserName">Nico Howe</span>
                <div class="reviewUserLoaction">
                    <span>Python</span>
                </div>
            </div>
        </div>
    </div>
    <div class="review right">
        <div class="reviewText">
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam, quidem iusto molestiae sunt officia delectus, enim minima, excepturi quasi libero fuga voluptatibus itaque dolor. Adipisci enim quibusdam ipsum beatae officiis.
            </p>
        </div>
        <div class="reviewInfo">
            <img src="imgs/BillFerreira.jpg" alt="Bill Ferreira" class="reviewUserAvatar">
            <div class="reviewUser">
                <span class="reviewUserName">Bill Ferreira</span>
                <div class="reviewUserLoaction">
                    <span>Java</span>
                </div>
            </div>
        </div>
    </div>
    <div class="review center">
        <div class="reviewText">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos delectus sequi atque architecto numquam aspernatur facere reiciendis, alias voluptatem aperiam porro obcaecati optio eaque omnis explicabo similique. Maiores, magnam ullam.
            </p>
        </div>
        <div class="reviewInfo">
            <img src="imgs/TristanCurran.jpg" alt="Tristan Curran" class="reviewUserAvatar">
            <div class="reviewUser">
                <span class="reviewUserName">Tristan Curran</span>
                <div class="reviewUserLoaction">
                    <span>HTML</span>
                </div>
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
        <a class="footerSocial" href="https://twitter.com" >
            <div class="footerTwitter">
                <i class="fab fa-twitter"></i>
            </div>
            <span>@PrgorammingCourse</span>
        </a>
        <a class="footerSocial" href="http://www.facebook.com" >
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
    © 2020 Programming Course, Inc. All rights reserved.<br><a href="https://github.com/AndZeka/ProjektiWebEng">Repository: And Zeka, Rina Kasabaqi, Kushtrim Canolli</a>
</div>
</div>
<script src="js/main.js"></script>
</body>
</html>