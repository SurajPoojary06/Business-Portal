
<?php

require('connection.php');

#for logging 

if(isset($_POST['login']))
{
    $query = "SELECT * FROM `registered_users` WHERE `username`='$_POST[username]'";
    $result = mysqli_query($con, $query);

    // $query2 = "SELECT * FROM `admin_table` WHERE `username`='admin' AND `password`='admin'";
    // $result2 = mysqli_query($con, $query2);
    // if(mysqli_num_rows($result2) == 1)
    // {
    //     echo "<script>
    //         window.location.href='AboutUs.php';
    //         </script>";
    // }


if($result)
{
    if(mysqli_num_rows($result) == 1)
    {
        $result_fetch = mysqli_fetch_assoc($result);
        if(password_verify($_POST['password'],$result_fetch['password'])) #Verifying the password & hashed password
        {
            #if pwd is matched
            echo "<script>
            window.location.href='home.php';
                </script>";
        }
        else
        {
            echo "<script>
            alert('Incorrect Password');
            window.location.href='index.php';
                </script>";
        }
    }
    else
    {
        echo "<script>
            alert('Username Not Registered');
            window.location.href='index.php';
        </script>";
        
    }
}
else
{
    echo "<script>
            alert('Cannot Run Query');
            window.location.href='index.php';
        </script>";
}
}



// for admin

if(isset($_POST['admin']))
{
    $query2 = "SELECT * FROM `admin_table` WHERE `username`='$_POST[username]'";
    $result2 = mysqli_query($con, $query2);

    if($result2)
    {
        if(mysqli_num_rows($result2) == 2)
        {
            echo "<script>
                window.location.href='Admin.php';
                   </script>";
        }
    
        else
        {
            echo "<script>
                alert('Username Not Registered');
                window.location.href='index.php';
            </script>";
            
        }
    }
    else
    {
        echo "<script>
                alert('Cannot Run Query');
                window.location.href='index.php';
            </script>";
    }
    }




#for Registration
if(isset($_POST['register']))
{
    $user_exist_query = "SELECT * FROM `registered_users` WHERE `username`='$_POST[username]' OR `email`='$_POST[email]'";
    $result = mysqli_query($con, $user_exist_query);

    if($result)
    {
        
        if(mysqli_num_rows($result)>0)
        {

            $result_fetch = mysqli_fetch_assoc($result);
            if ($result_fetch['username']==$_POST['username'])
            {
                echo "<script>
                alert('$result_fetch[username]-Username Already taken');
                window.location.href='index.php';
                </script>"; 
            }
            else
            {
                echo "<script>
                alert('$result_fetch[email]-Email Already taken');
                window.location.href='index.php';
                </script>"; 
            }
        }


        else
        {
            $password = password_hash($_POST['password'],PASSWORD_BCRYPT);
           $query="INSERT INTO `registered_users`(`fullname`, `username`, `email`, `password`) VALUES ('$_POST[fullname]', '$_POST[username]', '$_POST[email]', '$password')";
           if(mysqli_query($con,$query))
           {
            echo "<script>
            alert('Registration Sucessfull');
            window.location.href='index.php';
            </script>";
           }
           else
           {
            echo "<script>
            alert('Cannot Run Query');
            window.location.href='index.php';
            </script>";
           }
        }
    }
    else
    {
        echo "<script>
            alert('Cannot Run Query');
            window.location.href='index.php';
            </script>";
    }
}

?>