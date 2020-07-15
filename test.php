       
<?php
$serveraname="localhost";
$username="root";
$password="";
$db="db";
$conn=mysqli_connect($serveraname, $username, $password, $db);
if(!$conn){
    die("Connection failed" . mysqli_connect_error());
}
$sql='select * from User';
$result = mysqli_query($conn, $sql);
if(!$result){
    die("Connection failed" . mysqli_error($conn));
}
echo "
<table class='table' id='user_table'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Password</th> <br>
<th>User role</th>
<th>Is Admin</th>
</tr>";

while($row=mysqli_fetch_array($result))
{
    echo "<div class='datas'><tr><td>".$row['ID']."</td><td>".$row['Name']."</td> <td>".$row['Email']."</td> <td>".$row['Password']."</td><td>".$row['isAdmin']."</td><td><input name='isAdmin' type='checkbox'></td>  </tr></div>";
    //$r ='UPDATE user SET isAdmin = 1 WHERE user.ID = 29;';
    // $result = mysqli_query($conn, $sql);
    if( !empty($_POST['isAdmin']) ) { 
    $changeRole ="UPDATE user SET isAdmin = 1 WHERE user.ID =".$row['ID'];
    $change = mysqli_query($conn, $changeRole);  }
else { echo "Checkbox was left unchecked."; }



}
echo "</table>"; ?>