<?php
include_once 'dbconnection.php';
$obj = new Connection();
$conn = $obj->getConnection();

$Name= $_POST['name'];
$Email= $_POST['email'];
$Message= $_POST['message'];
$sql1 = "INSERT INTO contactform(Name, Email, Message) VALUES('$Name', '$Email', '$Message')";
if(!mysqli_query($conn, $sql1)){
    echo'not insered';
}
header("Location:http://localhost:8012/Projektii/ProjektiWebEng/contact.php");
?>