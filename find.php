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

if(isset($_POST['id'])) { // Checking if the id has arrived
    $id = $_POST['id'];
}

$sql = "SELECT * FROM sibers.users WHERE id= '". $id ."'";
$require = mysqli_query($link, $sql);

while ($row = mysqli_fetch_assoc($require)) {
    print '<br/>' . 'id: ' . $row["id"] .  ' Login: ' . $row["login"]  . ' Password: '. $row["password"] . ' Surname: ' . $row['surname'] . ' Name: ' .  $row["name"] . ' Gender ' . $row['gender'] . ' Birthdate ' . $row['birthdate'] . ' Post ' . $row['post'] . '<br/>';
}

// Close the connection as soon as it becomes unnecessary
mysqli_close($link);

