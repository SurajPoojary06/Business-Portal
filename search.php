<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Search</title>
    <style>
        .search{
            background-image: url(images/search_bg.png);
            background-size: cover;
        }
        .search h1{
            font-size:30px;
            display: flex;
            justify-content: center;
            align-items: center
        }
        h1{
            color:blue;
        }
        nav ul li a{
            height: 40px;
            line-height: 43px;
            margin: 3px;
            padding: 0 22px;
            display: flex;
            font-size: 30px;
            text-transform: uppercase;
            font-weight: 500;
            letter-spacing: 1px;
            border-radius: 3px;
            transition-timing-function: 0.6s ease-in-out;
            color:black;
        }

    /* Button Styling */
        .prev,.main-btn{
            width: 100px;
            height: 30px;
            display: flex;
            font-size: 18px;
            justify-content: center;
            align-items: center;
            background-color: red;
            border-radius: 10px;
            color: black;
            transition: 0.6s ease-in-out;
        }
        
    /* //Features Section// */
        .features{
            width: 100%;
            height: 360px;
            box-sizing: border-box;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin-top: 10px;

        }
        .feature-container{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .feature-box{
            background-color: #fff;
            width: 400px;
            height: 370px;
            margin: 20px;
            border-radius: 10px;
            overflow: hidden;
            position: relative;
            box-shadow: 5px 10px 30px rgba(0, 0, 0, 0.13);
        } 

        /* //.f Section// */
        .f-img{
            width: 100%;
            height: 65%;
        }
        .f-img img{
            width: 100%;
            height: 100%;    
        }
        .f-text{
            width: 100%;
            height: 40%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .f-text h4{
            margin-top: -40px;
            font-size:20px;
        }

    </style>
</head>

<body class="search">
    <div>
    <a class="prev" href="home.php">Previous</a>
    </div>
    <h1>BUSINESS CATEGORIES</h1>

<section class="features">
        <div class="feature-container">
            <div class="feature-box">
                <div class="f-img">
                    <img src="images/household_bg.png"/>
                    </div>
                <div class="f-text">
                    <h4>HOUSEHOLD</h4>
                    <a href="display_household.php" class="main-btn">VIEW</a>
            </div>
        </div> 

        <div class="feature-box">
                <div class="f-img">
                    <img src="images/energy&power_bg.jpg"/> 
                </div>
                <div class="f-text">
                    <h4>ENERGY & POWER</h4>
                    <a href="display_E&P.php" class="main-btn">VIEW</a>
            </div>
        </div>

        <div class="feature-box">
                <div class="f-img">
                    <img src="images/food1_bg.jpg"/> 
                </div>
                <div class="f-text">
                    <h4>FOOD</h4>
                    <a href="display_food.php" class="main-btn">VIEW</a>
            </div>
        </div>
</div>
</section>

<section class="features">
        <div class="feature-container">
            <div class="feature-box">
                <div class="f-img">
                    <img src="images/leather_bg.jpg"/>
                    </div>
                <div class="f-text">
                    <h4>LEATHER PRODUCTS</h4>
                    <a href="display_leather.php" class="main-btn">VIEW</a>
            </div>
        </div> 

        <div class="feature-box">
                <div class="f-img">
                    <img src="images/Computer_bg.jpg"/> 
                </div>
                <div class="f-text">
                    <h4>COMPUTER HARDWARE & SOFTWARE</h4>
                    <a href="display_computer.php" class="main-btn">VIEW</a>
            </div>
        </div>

        <div class="feature-box">
                <div class="f-img">
                    <img src="images/business_bg.jpg"/> 
                </div>
                <div class="f-text">
                    <h4>BUSINESS SERVICES</h4>
                    <a href="display_business.php" class="main-btn">VIEW</a>
            </div>
        </div>
</div>
</section>


</body>
</html>