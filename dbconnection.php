<?php
class Connection
{
    public function getConnection(){
        // Development conncetion

        // $servername = 'localhost';
        // $username = 'root';
        // $password = '';
        // $db='db';

        // Remote connection
        $servername = 'remotemysql.com';
        $username = 'Zd2wzwQftL';
        $password = 'fEFJKna0xw';
        $db='Zd2wzwQftL';


        $conn=mysqli_connect($servername, $username, $password, $db);
        if(!$conn){
        die("Connection failed" . mysqli_connect_error());}
        return $conn;
    }
    
    public function getData(){
        
        $sql = "SELECT * FROM courses";

        $result = mysqli_query($this->getConnection(), $sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }

    public function getConditionData(){
        $sql = "SELECT * FROM courses LIMIT 3";

        $result = mysqli_query($this->getConnection(), $sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }
    
}
?>