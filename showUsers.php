<?php
include_once 'dbconnection.php';
class showUsers{

        
        public function showUs(){
            
        $obj = new Connection();
        $connection = $obj->getConnection();
        $sql='select * from User';
        $result = mysqli_query($connection, $sql);
        if(!$result){
             die("Connection failed" . mysqli_error($connection)); }
             return $result;
        }
        
    }
?>