
<?php

$connection = mysqli_connect('localhost','root');
mysqli_select_db($connection, "databaseExp");

$user = 'root';
$password = '';
$database = 'databaseExp';
$servername='localhost:3306';
$mysqli = new mysqli($servername, $user,$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .$mysqli->connect_errno . ') '.$mysqli->connect_error);
}


$sql = " SELECT * FROM  `userinfodata` ";
$result = $mysqli->query($sql);
$mysqli->close();
?>

<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>ADMIN PAGE</title>
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
		.search{
			width: 100%;
            height: 800px;
            position: relative;
            background-image: url(images/admin_bg.jpg);
            background-size: cover;
            background-repeat: repeat;
		}
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}
		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}
		td {
			background-color: #E4F5D4;			
            border: 1px solid black;
			font-weight: lighter;
		}
		th,td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}
		.prev{
			width: 100px;
			height: 30px;
			display: flex;
			justify-content: center;
			align-items: center;
			background-color: red;
			border-radius: 10px;
			color: black;
			transition: 0.6s ease-in-out;
		}
        
	</style>
</head>

<body class="search">
    <div>
    <a class="prev" href="Admin.php">Back</a>
    </div>
	<section>
		<h1>FEEDBACK DETAILS</h1>
		<!-- TABLE CONSTRUCTION -->
		<table>
			<tr>
				<th>User</th>
				<th>Email</th>
                <th>Message</th>
				
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS -->
			<?php
				// LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!-- FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN -->
                <td><?php echo $rows['user'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['message'];?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>