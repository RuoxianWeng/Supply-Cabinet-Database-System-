<!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>

        <?php
            $title = "Registration";
            include "header.php"
        ?>

        <h3>Create New Account</h3>
        <form action="accountcreation.php" method="post" class="form">
                <input type="text" placeholder="School Name" class="textfield" name="Sname" required/><br>
                <input type="text" placeholder="Password" class="textfield" name="Spassword" required/><br>
                <input type="text" placeholder="Address" class="textfield" name="Saddress" /><br>
                <input type="text" placeholder="Phone Number" class="textfield" name="Sphone" /><br>
                <input type="text" placeholder="School District" class="textfield" name="District" required/><br>
                <input type="text" placeholder="Representative Name" class="textfield" name="RepresentativeName" required/><br>
                <input type="submit" class="button" value="Create Account" />
        </form>

    </body>
</html>