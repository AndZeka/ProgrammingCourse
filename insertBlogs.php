<?php
include_once 'dbconnection.php';

$obj = new Connection();
$connection = $obj->getConnection();

$Name= $_POST['name'];
$Intro = $_POST['title'];
$Desc= $_POST['desc'];
$Img= $_POST['img'];
$Uid= $_POST['uid'];
$sql1 = "INSERT INTO blogs(Name, Titulli2, Description, Image, User_id) VALUES('$Name', '$Intro', '$Desc', '$Img', '$Uid')";
if(!mysqli_query($connection, $sql1)){
    echo'not insered';
}
header("Location:http://localhost:8012/Projektii/ProjektiWebEng/admin_blogs.php");


?>