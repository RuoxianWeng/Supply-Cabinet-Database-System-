<!DOCTYPE html>
<html>
    <head>
        <title>Sign In</title>
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>

        <?php
            $title = "Sign In";
            include "header.php"
        ?>

        <p>Please login before order</p>
        <form action="orderform.php" method="post" class="loginform">
            <div class="loginfield">
            School ID: <input type="number" name="username" required><br>
            Password: <input type="text" name="password" required><br>
            </div>  
            <input type="submit" class="button" value="Login" id="loginbutton">
        </form>

    </body>
</html>