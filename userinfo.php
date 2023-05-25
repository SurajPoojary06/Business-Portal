
   
<?php

$connection = mysqli_connect('localhost','root');

mysqli_select_db($connection, "databaseExp");

$user = $_POST['user'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "INSERT INTO `userinfodata`(`user`, `email`, `message`) VALUES ('$user', '$email', '$message') ";
mysqli_query($connection,$query);

echo "
<script>
    alert('Feedback Sent..');
    window.location.href='home.php';
</script>
";

?>