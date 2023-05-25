
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        .abc{
            background-image: url(images/search_bg.png);
            background-repeat: repeat;
            background-size: cover;
        }
        h1{
            text-align: center;
			color: blue;
			font-size: 40px;
        }
        h2{
            text-align: center;
			color: green;
			font-size: 30px;
        }
        
        p{
            text-align: left;
			color: blue;
			font-size: 22px;
        }
        .prev1{
            width: 70px;
            height: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: red;
            border-radius: 10px;
            color: black;
            font-size:20px;
            transition: 0.6s ease-in-out;
        }
        .f-img{
            width: 100%;
            height: 130px;
            display: flex;
            justify-content: center;
            text-align:center;
        }
        .facts{
            width: 100%;
            height: 50%;
            display: flex;
            align-items:center;
            justify-content: left;
            flex-direction: row;
            margin-top: 100px;
        }

        /* .f-text{
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        } */
        /* .f-text h3{
            font-size:20px;
        } */

        header{
            height:150px;
            width:100%;
            display:flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-around;
            /* background-color: yellow; */
            color: black;
            padding: 5px 0;
}

        header h3{
                    text-align: center;
                    color: black;
                    font-size: 30px;
                }
        .web{
                    font-size: 30px;
                    color:blue;
                }
        
    </style>
</head>
<body class="abc">
<div>
    <a class="prev1" href="home.php">Back</a>
    </div>

    <div class="f-img">
        <img src="images/company_logo.png"/>
    </div>
    <h1>ABHIMO TECHNOLOGIES PRIVATE LIMITED</h1>
    <h2>Our Solutions Prepare Your Business for the New Digital Age</h2>     


    <section class="facts">
<header>
    <div class="f-text">
    <h3>Contact</h3>
    <p>Naveen Nayak<br>
    naveennayak.i@abhimo.com<br>
    +91 7829738999</p>
    </div>

    <div class="f-text">
    <h3>Website</h3>
    <a class="web" href="https://www.abhimo.com">www.Abhimo.com</a>
    </div>
    
    <div class="f-text">
    <h3>Address</h3>
      <p>F07, D.No. 2-11/26(27),<br>
      “Green City”, Behind Naganakatte,<br>
      N.H.66, Thokottu, Mangaluru -575017</p>
    </div>
</header>
    </section>
    
    



</body>
</html>

