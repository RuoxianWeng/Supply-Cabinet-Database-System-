<!DOCTYPE html>
<html>
    <head>
        <title>Update Password</title>
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>

        <?php
            $title = "Update Password";
            include "header.php"
        ?>

        <?php
            $conn = mysqli_connect("127.0.0.1", "root", "rx2002122", "School Supplies Co.");
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $SchoolID =  $_GET['SchoolID'];
            $Oldpassword = $_GET['oldPass'];
            $Newpassword =  $_GET['newPass'];

            $sql = "SELECT password
                    FROM School
                    WHERE SchoolID = $SchoolID";

            $result = $conn->query($sql);
            if ($result) {
                $row = $result->fetch_assoc();
                $oldpass = $row["password"];
                
                if ($oldpass != $Oldpassword || $row == null) {
                    echo "<p>Invalid SchoolID/Password.<p>";
                }
                else {
                    $sql2 = "UPDATE School
                             SET password = '$Newpassword'
                             WHERE SchoolID = $SchoolID";
                    $result2 = $conn->query($sql2);
                    echo "<p>Password updated successfully.</p>";
                }
                $result->free();
                $result2->free();
            }
        ?>

    </body>
</html>