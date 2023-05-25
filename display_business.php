
<?php

$connection = mysqli_connect('localhost','root');
mysqli_select_db($connection, "databaseExp");

// Username is root
$user = 'root';
$password = '';

// Database name
$database = 'databaseExp';

// Server is localhost and
// port number 3306
$servername='localhost:3306';
$mysqli = new mysqli($servername, $user,$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .$mysqli->connect_errno . ') '.$mysqli->connect_error);
}

// Here 'Business_details' is the Table name in the database

$sql = " SELECT * FROM  `Business_details` ";
$result = $mysqli->query($sql);
$mysqli->close();
?>

<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Household Sector</title>
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
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
		/* .search{
            background-image: url(images/home_bg.jpg);
            background-size: cover;
        } */
        
	</style>
</head>

<body class="search">
    <div>
    <a class="prev" href="search.php">Previous</a>
    </div>
	<section>
		<h1>Business Service Sector Details</h1>
		<!-- TABLE CONSTRUCTION -->
		<table>
			<tr>
				<th>Company Name</th>
				<th>Address</th>
                <th>Website</th>
				<th>Phone</th>
                <th>Email</th>
                <th>Contact Name</th>
				
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
				<td><?php echo $rows['Comp_name'];?></td>
                <td><?php echo $rows['Address'];?></td>
                <td><?php echo $rows['website'];?></td>
                <td><?php echo $rows['Phone'];?></td>
				<td><?php echo $rows['Email'];?></td>
				<td><?php echo $rows['Name'];?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>