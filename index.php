<!DOCTYPE html>
<?php

    if( !empty($_POST['username']) ){
        require_once './database.php';
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "SELECT * FROM users WHERE username ='$username'  AND password = '$password'";
        $result = mysqli_query($link, $query);
        if(mysqli_num_rows($result) === 1){
            while(@$result = mysqli_fetch_array($result)){
            session_start();
            $_SESSION['logged'] = $result['firstname']; 
            echo $_SESSION['logged'];
            }
            header('location: home.php');
        }
        else           {
            header('location: index.php');
        }
    }
  
   
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome to HMIS System</title>
        <link rel="stylesheet" href="css/styles.css"/>
    </head>
    <body>
        <div class="main-wrapper">
            <div class="header">
                <h2>
                    Home Management System    
                </h2>
            </div>
            <div class="main-menu">
<!--           <ul>
                    <li><a href=""> Reports </a></li>
                    <li><a href=""> Commands </a></li>
                    <li><a href=""> Account</a></li>
                    <li><a href=""> Sign Out</a></li>
                    
                </ul>-->

<!--                <a href="">
                    <span><img src="./images/menu.png"/>MENU</span>
                </a>-->
            </div>
<!--            <div class="menuitems">

            </div>-->
            <div class="content">
                <?php 
//                    if(isset($loginSuccess)){
//                        echo $loginSuccess;
//                    }
//                   if(isset($loginFailed)){
//                       echo $loginFailed;
//                   }
                ?>
                <form method="POST" action="">
                    <p class="desc">
                      Username 
                    </p>
                    <p>
                        <input type="text"  name="username" />
                    </p>
                    <p class="desc">
                        Password
                    </p>
                    <p>
                        <input type="password"  name="password" />
                    </p>
                    
                    <p>
                        <input style="font-size: 100%;" type="submit"  id ="submit" value="Login"/>
                    </p>
                    
                </form>
            </div>
            <div class="footer">
                
            </div>
            
            
        </div>
    </body>
</html>