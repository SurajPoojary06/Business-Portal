
<!-- Code to establish connection with the database -->
<?php

$con = mysqli_connect("localhost","root","","databaseExp");

if(mysqli_connect_error())
{
    echo"<script>alert('Cannot Connect to the Database');</script>";
    exit();
}
?>