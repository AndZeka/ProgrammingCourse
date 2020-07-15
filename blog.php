
<?php 
include_once 'dbconnection.php';
$obj = new Connection();
$connection = $obj->getConnection();
$sql = "Select * from blogs;";
$result = mysqli_query($connection, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="css/blog.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
</head>
<body class="">
    <div id="header">
        <div class="header wrapper">
            <div class="logo">
                <a href="home.html">
                    <img src="imgs/pgcourse.png" alt="">
                </a>
            </div>
            <div class="navigation-menu">
                <ul class="Dynamic Contact">
                    <li id="HomeNav">
                        <a href="home.html">Home</a>
                    </li>
                    <li id="CoursesNav">
                        <a href="courses.html">Courses</a>
                    </li>
                    <li id="BlogNav">
                        <a href="blog.html">Blog</a>
                    </li>
                    <li id="AboutNav">
                        <a href="about.html">About Us</a>
                    </li>
                    <li id="ContactNav">
                        <a href="contact.html">Contact</a>
                    </li>
                    <li id="signin">
                        <a href="login.html">SIGN IN</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>


<div class="wrapper extraLayout">
   <?php   
    while($row=mysqli_fetch_array($result))
     {
    
    echo"<div class='dynamicPageInfo block'>

        <h1><strong>".$row['Name']."</strong></h1>
        <div class='row belief'>
            <div class='illustration'>
                <img src='".$row['Image']."' alt=''>
            </div>
            <div class=' description'> 
                <div><h2><strong>".$row['Titulli2']."</strong></h2></div>      
                <div><p>".$row['Description']."</p></div>
            </div>  
        </div>
        
    </div>";
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
                    <a href="home.html" id="footerHome">Home</a>
                </li>
                <li>
                    <a href="courses.html" id="footerCourses">Courses</a>
                </li>
                <li>
                    <a href="blog.html" id=footerBlog>Blog</a>
                </li>
                <li>
                    <a href="about.html" id="footerAbout">About Us</a>
                </li>
                <li>
                    <a href="contact.html" id="footerContacts">Contact</a>
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