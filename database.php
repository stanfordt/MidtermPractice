<?php
    $servername = 'localhost';
    $username = 'ts_user';
    $password = 'pa55word';
    $dbname = 'tech_support';

    // Create connection
    $db = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
?>