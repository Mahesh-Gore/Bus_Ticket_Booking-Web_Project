<?php
    $servername = "localhost:8111";
    $username = "root";
    $password = "";
    $dbname = "pmpml_data";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>