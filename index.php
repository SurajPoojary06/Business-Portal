
<?php require('connection.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUSINESS PORTAL</title>
    <link rel="stylesheet" href="css/styles.css"/>
</head>

<body class="first">
    <header>
        <h2>BUSINESS PORTAL</h2>
        
        <div class="sign-in-up">
            <button type="button" onclick="popup('login-popup')">LOGIN</button>
            <button type="button" onclick="popup('register-popup')">REGISTER</button>
            <button type="button" onclick="popup('admin-popup')">ADMIN</button>
        </div>
    </header>

    <div class="popup-container" id="login-popup">
        <div class="popup">
            <form method="POST" action="login_register.php">
                <h2>
                    <span>USER LOGIN</span>
                    <button type="reset" onclick="popup('login-popup')">X</button>
                </h2>
                <input type="text" placeholder="Username" name="username">
                <input type="password" placeholder="Password" name="password">
                <button type="submit" class="login-btn" name="login">LOGIN</button>
            </form>
        </div>
    </div>




    <div class="popup-container" id="admin-popup">
        <div class="popup">
            <form method="POST" action="login_register.php">
                <h2>
                    <span>ADMIN LOGIN</span>
                    <button type="reset" onclick="popup('admin-popup')">X</button>
                </h2>
                <input type="text" placeholder="Username" name="username">
                <input type="password" placeholder="Password" name="password">
                <button type="submit" class="login-btn" name="admin">LOGIN</button>
            </form>
        </div>
    </div>




    <div class="popup-container" id="register-popup">
        <div class="register popup">
            <form method="POST" action="login_register.php">
                <h2>
                    <span>USER REGISTRATION</span>
                    <button type="reset" onclick="popup('register-popup')">X</button>
                </h2>
                <input type="text" placeholder="Full Name" name="fullname">
                <input type="text" placeholder="Username" name="username">
                <input type="email" placeholder="E-mail" name="email">
                <input type="password" placeholder="Password" name="password">
                <button type="submit" class="register-btn" name="register">REGISTER</button>
            </form>
        </div>
    </div>

    <script>
        function popup(popup_name)
        {
            get_popup = document.getElementById(popup_name);
            if (get_popup.style.display=="flex")
            {
                get_popup.style.display="none";
            }
            else
            {
                get_popup.style.display="flex";
            }
        }
    </script>

</body>
</html>
   
    








