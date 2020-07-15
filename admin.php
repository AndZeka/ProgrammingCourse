<?php
include_once "dbconnection.php";

$obj = new Connection();
$conn = $obj->getConnection();

$user_id= $_POST['id'];
$is_admin= $_POST['isAdmin'];
 echo $user_id;
$sql1 = "UPDATE user SET isAdmin = $is_admin WHERE user.ID =$user_id";
$change = mysqli_query($conn, $sql1);
if(!mysqli_query($conn, $sql1)){
    echo'not insered';
}

?>