

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT</title>
    <style>
        .about{
            background-image: url(images/bground.jpg);
            background-repeat: repeat;
            background-size: cover;
        }
        .contact{
            width:100%;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            padding: 40px 0px;
        }
        .contact-heading{
            text-align: center;
            margin: 40px 0px;
            margin-bottom: 80px;
        }
        .contact-heading h1,p{
            color: yellow;
            font-size: 40px;
        }
        .contact-heading p{
            color: yellow;
            font-size: 20px;
        }


        .contact form{
            width:600px;
            display: flex;
            align-items: center;
            float: right;
            flex-direction: column;
        }
        .contact form input, .contact form textarea{
            width: 100%;
            height: 40px;
            margin: 5px 0px;
            padding: 10px;
            background-color:white;
            font-size:25px;
            color: black;
            border-radius: 5px;
        }
        .contact form textarea{
            height: 150px;
        }
        .contact-btn{
            margin-top: 40px;
            width:250px;
            height:50px;
            font-size:30px;
            background-color:red;
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

<body class='about'>
<div>
    <a class="prev" href="home.php">Previous</a>
    </div>
    <section class="contact">
    <div class="contact-heading">
        <h1>FEEDBACK DETAILS</h1>
        <p>I hope you had a good experience with us..
            Leave a feedback to get to know more about the services we offer.
        </p>
    </div>
    <form action="userinfo.php" method="post">  
        <input type ="text" name="user" placeholder="Name"/>
        <input type ="email" name="email" placeholder="Email"/>
        <textarea name="message" placeholder="Feedback"></textarea>
        <button class="main-btn contact-btn" type="submit">SUBMIT</button>
    </form>
</section>
    
</body>
</html>




