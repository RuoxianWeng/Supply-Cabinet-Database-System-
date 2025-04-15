<!DOCTYPE html>
<html>
    <head>
        <title>Order Status</title>
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>

        <?php
            $title = "Order Tracking";
            include "header.php"
        ?>

        <?php
            $id = $_REQUEST["schoolId"];
            $password = $_REQUEST["pass"];

            $conn = mysqli_connect("127.0.0.1", "root", "rx2002122", "School Supplies Co.");
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT SchoolID, password
                    FROM School
                    WHERE SchoolID = '$id' and password = '$password'";

            $result = $conn->query($sql);
            if ($result) {
                $row = $result->fetch_assoc();
                if ($id != $row["SchoolID"] || $password != $row["password"] || $row == null) {
                    echo "<p>Invalid School ID/Password</p>";
                }
                else {
                    echo '<h3>Order Summary</h3>
                          <table class="ordertable">
                                <tr>
                                    <th>Order No.</th>
                                    <th>Supply Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                </tr>';
                    
                    $sql2 = "SELECT OrderNo, o.SupplyName SupplyName, o.Quantity Quantity, o.Quantity*UnitPrice Price
                             FROM (School_Order o JOIN Supply s ON o.SupplyName = s.SupplyName)
                             WHERE SchoolID = '$id'";
                    $result2 = $conn->query($sql2);

                    if ($result2) {
                        while ($row = $result2->fetch_assoc()) {
                            echo "<tr><td>". $row["OrderNo"]. "</td><td>". $row["SupplyName"]. "</td><td>". $row["Quantity"]. "</td><td>$". $row["Price"]. "</td></tr>";
                        }
                        $result2->free();
                    }

                    echo "</table>
                          <h4>Total Quantity for Each Supply Ordered</h4>
                          <table class='ordertable'>
                            <th>Item Name</th><th>Total Quantity</th>";

                    $sql3 = "SELECT SupplyName, sum(Quantity) as totalQty
                             FROM School_Order
                             WHERE SchoolID = '$id'
                             GROUP BY SupplyName";
                    $result3 = $conn->query($sql3);

                    if ($result3) {
                        while ($row = $result3->fetch_assoc()) {
                            echo "<tr><td>". $row["SupplyName"]. "</td><td>". $row["totalQty"]. "</td></tr>";
                        }
                        $result3->free();
                    }

                    echo "</table>
                          <h3>Shipment Status</h3>
                          <p class='shipmentinfo'>";
                    
                    $sql4 = "SELECT ShipmentDate
                             FROM School_Shipment
                             WHERE SchoolID = $id";
                    $result4 = $conn->query($sql4);

                    if ($result4) {
                        $row = $result4->fetch_assoc();
                        if ($row == null) {
                            echo "Order not shipped yet.";
                        }
                        else {
                            if ($row["ShipmentDate"] == null)
                                echo "Order not shipped yet.";
                            else
                                echo "Order Shipped on ". $row["ShipmentDate"];
                        }
                        while ($row = $result->fetch_assoc()) {
                            if ($row["ShipmentDate"] == null)
                                echo "Order not shipped yet.";
                            else
                                echo "Order Shipped on ". $row["ShipmentDate"];
                        }
                        $result4->free();
                    }
                    
                    echo "</p>";
                }
                $result->free();
                $conn->close();

            }
        ?>

    </body>
</html>