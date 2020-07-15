<?php 
include_once "navigation.php";
?>

<html>
    <head>

        <style>
                p{
                margin-left: 16%;
                margin-top: 10px;
                margin-bottom: 10px;
                font-family:san-serif;
                font-size: 2.5em;
                font-weight: 500;
            }
        </style>
    </head>
<body>

<div clas="contactform">
    <p class="adminP">Here are some people that have filled the contact form:</p>
<?php
            include_once 'showContactForm.php';
            $show = new showContactForm();
            $result = $show->showContact();
            if(!$result){
                die("Connection failed" . mysqli_error($conn));
            }

            echo "
            <table class='center' id='contact_table' >
            <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th> <br>
            </tr>";

            while($row=mysqli_fetch_array($result))
            {
            echo "<tr><td>".$row['Name']."</td><td>".$row['Email']."</td> <td>".$row['Message']."</td> </tr>";

}
echo "</table>"; ?> 
</div>
</body>
</html>
