<?php
include_once 'dbconnection.php';
class showBlogs{

        public function showBlogs(){
        $obj = new Connection();
        $connection = $obj->getConnection();
        $sql='select * from blogs';
        $result = mysqli_query($connection, $sql);
        // if(!$result){
        //      die("Connection failed" . mysqli_error($connection)); }
             return $result;
        }
        
    }
?>