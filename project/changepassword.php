<!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>

        <?php
            $title = "Update Password";
            include "header.php"
        ?>

        <h3>Change Password</h3>
        <form action="updatepassword.php" method="get" class="form">
                <input type="number" placeholder="School ID" class="textfield" name="SchoolID" required/><br>
                <input type="text" placeholder="Old Password" class="textfield" name="oldPass" required/><br>
                <input type="text" placeholder="New Password" class="textfield" name="newPass" required/><br>
                <input type="submit" class="button" value="Change Password" />
        </form>

    </body>
</html>