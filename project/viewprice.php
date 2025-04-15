<!DOCTYPE html>
<html>
    <head>
        <title>Supply Price</title>
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>

        <?php
            $title = "Supply Price";
            include "header.php"
        ?>

        <table class="pricetable">
            <tr>
                <th>Item Name</th>
                <th>Price</th>
            </tr>
            <?php
                $conn = mysqli_connect("127.0.0.1", "root", "rx2002122", "School Supplies Co.");
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT SupplyName, UnitPrice
                        FROM Supply";
                        
                $result = $conn->query($sql);
                if ($result) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>". $row["SupplyName"]. "</td><td>$". $row["UnitPrice"]. "</td></tr>";
                    }
                    $result->free();
                }
                $conn->close();
            ?>
        </table>

    </body>
</html>

