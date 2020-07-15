<?php 
include_once "dbconnection.php";


$obj = new Connection();
$conn = $obj->getConnection();

$id= $_POST['id'];

  // Check record exists
  $checkRecord = mysqli_query($conn,"SELECT * FROM blogs WHERE id=".$id);
  $totalrows = mysqli_num_rows($checkRecord);
  if($totalrows > 0){
    // Delete record
    $query = "DELETE FROM blogs WHERE id=".$id;
    mysqli_query($conn,$query);
    echo 1;
  }

?>