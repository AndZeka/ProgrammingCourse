<?php
    session_start();

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
                echo "<script>window.location = 'courses.php'</script>";
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <link rel="stylesheet" href="css/courses.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
</head>
<body>
    <div id="header">
        <div class="header wrapper">
            <div class="logo">
                <a href="home.php">
                    <img src="imgs/pgcourse.png" alt="">
                </a>
            </div>
            <div class="navigation-menu">
                <ul class="Dynamic Contact">
                    <li id="HomeNav">
                        <a href="home.php">Home</a>
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
                    <li id="signin">
                        <a href="login.php">SIGN IN</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>

    <div class="coursesContent wrapper">
        <?php
            // component("Python 3 Course","Learn Python for free with this interactive course, and get a handle on the most popular programming language in the world.","imgs/1073.png",99,"6,564,733",92,275);
            // component("C++ Course","Learn C++ in a greatly improved learning environment with more lessons, real practice opportunity, and community support.","imgs/1051.png",63,"5,783,518",80,324);
            // component("Java Course","Utilize our Java Course to learn the basics of the popular language, including Java objects, in this introductory course and explore a career as a software engineer.","imgs/1068.png",78,"4,485,536",65,140);
            // component("JavaScript Course","Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, ex fuga nobis nihil iure necessitatibus iusto sunt accusantium dolorum minima distinctio perferendis eius repudiandae!   ","imgs/1024.png",55,"2,933,732",61,177);
            // component("C# Course","Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit dolorum fugit esse aspernatur similique dolore amet nihil id distinctio numquam deserunt cupiditate laboriosam ipsum.","imgs/1080.png",74,"1,993,739",72,211);
            // component("C Course","Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur reprehenderit consectetur eius sunt minus ab temporibus vel repudiandae? Eos eligendi aliquam veritatis voluptatibus.","imgs/1089.png",86,"615,952",46,150);
            // component("SQL Fundamentals","Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim facilis suscipit inventore culpa libero explicabo neque odit, tempore assumenda labore, provident sit sed aut praesentium esse.","imgs/1060.png",88,"2,105,232",37,104);
            // component("HTML Fundamentals","Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam dolor corrupti eligendi soluta natus! Sunt esse officia, eum sequi non id ut alias molestiae explicabo perferendis maiores.","imgs/1014.png",91,"6,934,161",44,125);
            // component("PHP Course","Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nisi fugit magnam nesciunt beatae similique velit quidem, architecto ratione quibusdam odio? Et, architecto asperiores repellat.","imgs/1059.png",75,"1,644,520",51,117);
            // component("CSS Fundamentals","Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure maiores molestias nisi quam numquam repudiandae, consectetur aspernatur ratione illo dolore voluptatum voluptatem dolores.","imgs/1023.png",99,"1,558,332",76,193);
            // component("Ruby Course","Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime quod magnam saepe exercitationem aliquid blanditiis praesentium architecto? Hic neque minus blanditiis, non deleniti illum.","imgs/1081.png",67,"516,632",57,172);
            // component("jQuery Course","Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta omnis neque expedita fugit minima libero, natus nam enim modi magnam minus! Magni, consequuntur.","imgs/1082.png",70,"510,051",26,75);
            // component("Swift 4 Fundamentals","Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus iusto officiis perferendis temporibus corporis, ex praesentium, illum minus mollitia labore laudantium nam commodi! Doloremque qui blanditiis fugit fuga ullam tempore!","imgs/1075.png",83,"542,117",53,165);

            $result = $database->getData();
            while ($row = mysqli_fetch_assoc($result)){
                component($row['course_name'], $row['course_description'], $row['course_img'], $row['course_price'], $row['course_learners'],$row['course_lessons'],$row['course_quizzes'],$row['ID']);
            }
        ?> 
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
                    <a href="home.php" id="footerHome">Home</a>
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
                    <a  href="#" id="footerPrivacy-Policy">Terms of Use</a>
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

    <script src="js/main.js"></script>
</body>
</html>