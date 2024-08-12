<?php

require_once 'route.php';

// Connecting to the MySQL database
$link = mysqli_connect("localhost", "root", "", "sibers");

// Checking the success of the connection to the database
if (!$link) {
    // We check the success of the connection to the database
    echo "Error: Unable to connect to MySQL" . mysqli_connect_error();
    // Close the connection as soon as it becomes unnecessary
    mysqli_close($link);
}

// Taking the transmitted parameters
$id = $_POST['id'];

// We send a request to check such an id in the database and, if there is one, delete the record, if not, then output an error
$quary = "SELECT * FROM sibers.users WHERE id = '$id'";
$result = mysqli_query($link, $quary);
$res_row = mysqli_fetch_assoc($result);
if($res_row['id']){
    $sql = "DELETE FROM sibers.users WHERE id = '$id'";
    $result = mysqli_query($link, $sql);
    echo 'The user has been successfully deleted!';
}
else{
    echo 'Error, there is no such user!';
}

// Close the connection as soon as it becomes unnecessary
mysqli_close($link);