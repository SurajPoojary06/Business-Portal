
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN PAGE</title>
    <style>

        .abc{
            width: 100%;
            height: 800px;
            position: relative;
            background-image: url(images/home_bg.jpg);
            background-size: cover;
            background-repeat: repeat;
        }
        
        h1{
            text-align: center;
			color: white;
			font-size: xx-large;
        }
        p{
            text-align: center;
			color: red;
			font-size: 30px;
        }
        .prev1{
            width: 110px;
            height: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: red;
            border-radius: 10px;
            color: black;
            font-size:22px;
            transition: 0.6s ease-in-out;
        }

        .prev11{
            width: 210px;
            height: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: green;
            border-radius: 10px;
            color: black;
            font-size:25px;
            transition: 0.6s ease-in-out;
        }


        .features{
            width: 100%;
            height: 40%;
            box-sizing: border-box;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
            margin-top: 20px;

        }

        h1{
            font-size:40px;
        }

        .disp{
            width: 100%;
            height: 50%;
            display: flex;
            /* justify-content: center; */
            /* align-items: center; */
            flex-direction: column;
        }
        .disp h4{
            margin-top: -12px;
            font-size:40px;
        }
    </style>
</head>
<body class="abc">

<?php
        echo "
            <div class='prev1'>
            <a href='logout.php'>LOGOUT</a>
            </div>
            ";
        ?>


    <header>
    <h1>ADMIN PAGE</h1>
    </header>


    <section class="features">
    <div class="disp">
        <h4>USERS</h4>
                <a href="login_details.php" class="prev11">VIEW DETAILS</a>
        </div>
    </section>   
    <section class="features">
    <div class="disp">
        <h4>FEEDBACK</h4>
                <a href="feedback_details.php" class="prev11">VIEW DETAILS</a>
            </div>
    </section>
    
</body>
</html>

