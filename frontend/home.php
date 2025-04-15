<!DOCTYPE html>
<html>
    <head>
        <title>Homepage</title>
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>

        <?php
            $title = "Homepage";
            include "header.php"
        ?>
        
        <form action="orderform.php" method="post" class="loginform">
            <div class="loginfield">
                School ID: <input type="text" name="username" required class="schoolIDfield"><br>
                Password: <input type="text" name="password" required><br>
            </div>
            <input type="submit" class="button" value="Login" id="loginbutton">
        </form>

        <form action="registration.php" method="get">
            Need to register? 
            <input type="submit" class="button" value="Click Here">
        </form>

        <form action="changepassword.php" method="get">
            <input type="submit" class="button" value="Update Password" />
        </form>

        <form action="viewprice.php" target="_blank">
            <input type="submit" class="button" value="View Supply Price" />
        </form>

        <form action="orderstatus.php" method="post" target="_blank">
            <input type="number" placeholder="enter school id" class="textfield" name="schoolId" required/> 
            <input type="text" placeholder="enter password" class="textfield" name="pass" required/> 
            <input type="submit" class="button" value="Track Your Order" />
        </form>

    </body>
</html>