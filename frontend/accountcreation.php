<!DOCTYPE html>
<html>
    <head>
        <title>Account Creation</title>
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>

        <?php
            $title = "Account Creation";
            include "header.php"
        ?>

        <?php
            $conn = mysqli_connect("127.0.0.1", "root", "rx2002122", "School Supplies Co.");
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $Spassword = $_REQUEST['Spassword'];
            $Sname =  $_REQUEST['Sname'];
            $Saddress = $_REQUEST['Saddress'];
            $Sphone = $_REQUEST['Sphone'];
            $District = $_REQUEST['District'];
            $RepresentativeName = $_REQUEST['RepresentativeName'];

            $sql = "INSERT INTO School
                    VALUES(null, '$Sname', '$Saddress', '$Sphone', '$District', '$RepresentativeName', '$Spassword')";

            if ($conn->query($sql) === TRUE) {
                echo "<p>Account created successfully</p>";
                $sql2 = "SELECT SchoolID
                         FROM School
                         where Sname = '$Sname' and District = '$District'";
                $result = $conn->query($sql2);
                if ($result) {
                    $row = $result->fetch_assoc();
                    echo "<p>Your School ID is ". $row['SchoolID']. "</p>";
                }
            } 
            else {
                echo "<p>Error: " . $sql . "Please try again. <br>" . $conn->error. "</p>";
            }

            $conn->close();
        ?>

    </body>
</html>