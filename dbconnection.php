<?php
class Connection
{
    public function getConnection(){
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $db='db';
        $conn=mysqli_connect($servername, $username, $password, $db);
        if(!$conn){
        die("Connection failed" . mysqli_connect_error());}
        return $conn;
    }
}
?>