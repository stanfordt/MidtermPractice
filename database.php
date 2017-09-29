<?php
    $servername = 'localhost';
    $username = 'mgs_user';
    $password = 'pa55word';
    $dbname = 'shopDB';

    // Create connection
    $db = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
?>