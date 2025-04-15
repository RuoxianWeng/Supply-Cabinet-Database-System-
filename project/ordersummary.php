<!DOCTYPE html>
<html>
    <head>
        <title>Supply Price</title>
        <link rel="stylesheet" href="./style.css"> 
    </head>
    <body>

        <?php
            $title = "Order Summary";
            include "header.php"
        ?>
        
        <?php
            $username = $_GET["username"];
            $password = $_GET["password"];
            $itemName = $_GET["itemName"];
            $quantity = $_GET["quantity"];
            $date = date('Y-m-d');

            $conn = mysqli_connect("127.0.0.1", "root", "rx2002122", "School Supplies Co.");
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT Sname, SchoolID
                    FROM School
                    WHERE SchoolID = '$username' and password = '$password' ";
        
            $result = $conn->query($sql);
            if ($result) {
                if ($result->fetch_assoc() == null)
                    echo "<p>Invalid username/password. Please go back and try again.</p>";
                else {
                    echo "<p class='orderstatement'>Your Order: </p>";
                    echo "<table class='ordertable'>
                            <tr><td>School ID</td><td>Item Name</td><td>Quantity</td><td>Order Date</td></tr>
                            <tr><td>". $username. "</td><td>". $itemName. "</td><td>". $quantity. "</td><td>". $date. "</td></tr>
                         </table>";

                    $sql2 = "INSERT INTO School_Order
                             VALUES (null, '$username', 1, '$itemName', '$quantity', '$date')";

                    $result2 = $conn->query($sql2);
                    $result2->free();
                }
                $result->free();
            }
            $conn->close();
        ?>

    </body>
</html>
