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

$number = $_POST['number'];

if($number <= 0) { // If the user entered 0 or lower
    selectPage($link, 0.0 * 10);
}
else{
    if($number >= 0.1) { // If the user entered 0.1 or higher
        selectPage($link, $number * 10);
    }
    else{
        echo 'Error number';
    }
}

function selectPage($link, $number){
    $i = 0;
    $sql = "SELECT * FROM sibers.users order by id LIMIT $number, 10;";
    $result = mysqli_query($link, $sql);
    echo "<h3>List of users: </h3>";
    while ($row = mysqli_fetch_assoc($result)) {
        $i += 1;
        print '<br/>' . 'id: ' . $row["id"] . ' Фамилия: ' . $row["surname"]. ' Имя: ' .  $row["name"] . '<br/>';
    }
    if ($i == 0) {
        echo 'No users found';
    }
}

// Close the connection as soon as it becomes unnecessary
mysqli_close($link);


