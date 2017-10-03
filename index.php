<?php
    require_once('database.php');

    // Prepared variable to select customers in California
    $state = 'CA';

    $query = "SELECT firstName, lastName, city FROM customers WHERE state = ? ORDER BY lastName";

    
    $stmt = $db->prepare($query);
    $stmt->bind_param('s', $state);
    $stmt->execute();
    $stmt->store_result();
    // Three variables we will bind the results to
    $stmt->bind_result($firstName, $lastName, $city);
?> 
<!-- header information comes from include file -->
    <p><?php include 'header.php'; ?></p>

    <div id="header">
        <h1>Customers</h1>
    </div>

    <div id="main">

        <h1>Customer List</h1>

        <div id="content">
            <!-- display a list of customers -->
         
            <table>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>City</th>
                </tr>
                <?php while ($stmt->fetch()) { ?>
                <tr>
                    <!-- echo all results to table rows -->
                    <td><?php echo $firstName; ?></td>
                    <td><?php echo $lastName; ?></td>
                    <td><?php echo $city; ?></td>
                </tr>
                <!-- result set is available -->

                <?php }
    $stmt->free_result();
    $db->close();?>
                    
            </table>
            </br>
        </div>
    </div>

 <!-- shared footer information comes from include file -->
        <p><?php include 'footer.php'; ?></p>
   
