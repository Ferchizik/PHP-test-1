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
$login = $_POST['login'];
$password = $_POST['password'];
$surname = $_POST['surname'];
$name = $_POST['name'];
$gender = $_POST['gender'];
$birthday = $_POST['birthday'];
$post = $_POST['post'];

// We make a request to verify the login and if there is none, add an entry
$quary = "SELECT * FROM sibers.users WHERE login = '$login'";
$result = mysqli_query($link, $quary);
$res_row = mysqli_fetch_assoc($result);
if ($res_row['login']) {
    echo 'Login exist';
} else {
    $quary = "SELECT * FROM sibers.users WHERE id = '$id'";
    $result = mysqli_query($link, $quary);
    $res_row = mysqli_fetch_assoc($result);
    if ($res_row['id']) {
        $sql = "UPDATE `sibers`.`users` SET `login`= '$login', `password`= '$password', `surname`='$surname', `name`='$name', `gender`='$gender', `birthdate`='$birthday', `post`='$post' WHERE id = '$id'";
        $result = mysqli_query($link, $sql);
        echo 'The user has been successfully changed!';
    } else {
        echo 'Error, there is no such user!';
    }
}

// Close the connection as soon as it becomes unnecessary
mysqli_close($link);