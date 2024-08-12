<?php

// Connecting to the MySQL database
$link = mysqli_connect("localhost", "root", "", "sibers");

// Checking the success of the connection to the database
if (!$link) {
    // We check the success of the connection to the database
    echo "Error: Unable to connect to MySQL" . mysqli_connect_error();
    // Close the connection as soon as it becomes unnecessary
    mysqli_close($link);
}

// Check if the username and password have been transferred
if(isset($_POST['login']) && isset($_POST['password'])){
    $login = $_POST['login']; // Take login
    $password = $_POST['password']; // Take password
    $sql = "SELECT * FROM sibers.users WHERE login = '" . $login . "' AND password = '" . $password . "' AND post = 'admin'"; // SQL request
    $result = mysqli_query($link, $sql); // SQL result
    $res_row = mysqli_fetch_assoc($result); // Extracts the resulting series as an associative array
    if($res_row['login']){ // Checking the login in the array
        require('route.php'); // Connecting a router file
    }
    else{
        echo 'Authorization error';
        require('index.php');
    }
}

// Close the connection as soon as it becomes unnecessary
mysqli_close($link);
