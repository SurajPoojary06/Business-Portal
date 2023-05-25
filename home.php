<?php require('connection.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME PAGE</title>
    <style>
        .main-heading
        {
            width: 100%;
            height: 800px;
            position: relative;
            background-image: url(images/home_bg.jpg);
            background-size: cover;
            background-repeat: repeat;
        }

        header{
            display:flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-around;
            background-color: green;
            color: white;
            padding: 20px 0;
        }

        header nav a{
            color:white;
            margin-right: 30px;
            font-weight: 500;
            font-size:20px;
        }

        h1{
            text-align: center;
			color: blue;
			font-size: 40px;
        }
        h2{
            text-align: center;
			color: yellow;
			font-size: 28px;
        }
        h3{
            text-align: left;
			color: blue;
			font-size: 28px;
        }
        h5{
            text-align: center;
			color: white;
			font-size: 25px;
        }
        h4{
            text-align: left;
			color: black;
			font-size: 20px;
        }

        .main-btn{
            
            width: 120px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: red;
            border-radius: 10px;
            color: black;
            font-size:18px;
            transition: 0.6s ease-in-out;
        }
        .logout
        {
            color:blue;
            background-color:red;
            padding:5px 15px;
            border-radius:5px;
            font-weight:600;
        }
        .logout a
        {
            color:purple;
        }
        .facts2{
            display: flex;
            justify-content: right;
            align-items:right;
            flex-direction: column;
            margin-top: 30px;
        }
        .view{
            width: 100%;
            display: flex;
            justify-content: center;
            text-align:center;
        }
    </style>
   
</head>
<body  class="main-heading">
<header>
        <nav>
                <a href="#" class="active">HOME</a>
                <a class ="about" href="AboutUs.php">ABOUT US</a>
                <a href="#">FEATURES</a>
                <a href="Contact.php">CONTACT</a>
        </nav>

        <?php
            echo "
            <div class='logout'>
            <a href='logout.php'>LOGOUT</a>
            </div>
            ";
        ?>
</header>
        <div>
        <h1>ABHIMO TECHNOLOGIES PRIVATE LIMITED</h1>
        <h2>TRUSTED AND PROFESSIONAL PARTNER FOR YOUR BUSINESS</h2> 
    </div>
    <h5>Click Below to view the different Business Categories</h4>
    <div class="view">
        <a class="main-btn" href="search.php">View Business</a>
    </div> 
    <section class="facts2">
    <h3>SERVICES OFFERED</h3>
      <h4>DIGITAL CONSULTING SERVICES</h4>
      <h4>SOFTWARE DEVELOPMENT SERVICES</h4>
      <h4>CAPITAL ASSET MANAGEMENT SOLUTION</h4>
      <h4>DIGITAL OUTSOURCING SERVICES</h4>
    </section>
          
</body>
</html>