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