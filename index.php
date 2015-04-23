<!DOCTYPE html>
<?php
    if(isset($_POST['product'])  && $_POST['cost'] != 0){
        require_once './database.php';
        $product = $_POST['product'];
        $cost = $_POST['cost'];
        $description = $_POST['description'];
        $date = $_POST['date'];
        $query = "INSERT INTO `items` (`itemID`, `name`, `cost`, `date`, `description`) VALUES (NULL, '$product', '$cost', '$date', '$description')";
        mysqli_query($link, $query);
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
                <ul>
                    <li><a href=""> Reports </a></li>
                    <li><a href=""> Commands </a></li>
                    <li><a href=""> Account</a></li>
                    <li><a href=""> Sign Out</a></li>
                    
                </ul>

<!--                <a href="">
                    <span><img src="./images/menu.png"/>MENU</span>
                </a>-->
            </div>
<!--            <div class="menuitems">

            </div>-->
            <div class="content">
                <form method="POST" action="">
                    <p class="desc">
                       Item name 
                    </p>
                    <p>
                        <input type="text"  name="product" />
                    </p>
                    <p class="desc">
                        Cost
                    </p>
                    <p>
                        <input type="text"  name="cost" />
                    </p>
                    <p class="desc">
                        Description
                    </p>
                    <p>
                        <input type="text"  name="description" />
                    </p>
                    <p class="desc">
                        Date
                    </p>
                    <p>
                        <input type="date"  name="date" />
                    </p>
                    <p>
                        <input type="submit"  id ="submit" />
                    </p>
                    
                </form>
            </div>
            <div class="footer">
                
            </div>
            
            
        </div>
    </body>
</html>