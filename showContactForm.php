<?php
include_once 'dbconnection.php';
class showContactForm{

        public function showContact(){
        $obj = new Connection();
        $connection = $obj->getConnection();
        $sql='select * from contactform';
        $result = mysqli_query($connection, $sql);
        if(!$result){
             die("Connection failed" . mysqli_error($connection)); }
             return $result;
        }
        
    }
?>