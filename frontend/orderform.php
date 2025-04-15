<!DOCTYPE html>
<html>
    <head>
        <title>Order Form</title>
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>

        <?php
            $title = "Order Form";
            include "header.php"
        ?>

        <?php
            $username = $_REQUEST["username"]; 
            $password = $_REQUEST["password"];
            $conn = mysqli_connect("127.0.0.1", "root", "rx2002122", "School Supplies Co.");
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            
            //prepared statments
            $sql = "SELECT Sname
                    FROM School
                    WHERE SchoolID = ? and password = ?";

            $stmt = $conn->prepare($sql);
            $stmt->bind_param("is", $username, $password); //int and string
            $stmt->bind_result($Sname);
            $stmt->execute();

            $result = $stmt->get_result();
            if ($result) {
                if (($row = $result->fetch_assoc()) == null)
                    echo "<p>Invalid School ID/Password. Please go back and try again.</p>";
                else {
                    echo "<h3 class='welcome'> Welcome, <br>". $row['Sname']. "</h3>";
                }
                $result->free();
            }
            $stmt->close();
            
            /*
            //sqli schoolID example 11'#
            $sql = "SELECT Sname
                    FROM School
                    WHERE SchoolID = '$username' and password = '$password' ";
            
            $result = $conn->query($sql);
            if ($result) {
                if (($row = $result->fetch_assoc()) == null)
                    echo "<p>Invalid School ID/Password. Please go back and try again.</p>";
                else {
                    echo "<h3 class='welcome'> Welcome, <br>". $row['Sname']. "</h3>";
                }
                $result->free();
            }
            */
            $conn->close();
        ?>

        <form action="ordersummary.php" method="get" class="form">
            School ID: <input type="number" name="username" required><br>
            Password: <input type="text" name="password" required><br>
            Item Name: <input type="text" name="itemName" required><br>
            Quantity: <input type="number" name="quantity" required><br>
            <input type="submit" class="button" value="Submit">
        </form>

    </body>
</html>
