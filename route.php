<html>
<head>
</head>
<body>
<h1>Route</h1>
<h2>Read users</h2>
<form action='/get_page.php' method='post'>

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

    $sqlCount = "SELECT COUNT(*) FROM sibers.users;";
    $requireCount = mysqli_query($link, $sqlCount);

    while($row = mysqli_fetch_assoc($requireCount)){
        $countstr = $row['COUNT(*)'];
    }
    $countstr /= 10;
    $i = 0;
    echo 'list to ';
    while ($countstr > $i ){
       echo "<button disabled>$i</button>";
       $i = $i + 1;
    }

    // Close the connection as soon as it becomes unnecessary
    mysqli_close($link);
    ?>

    <br><br><input type="text" name="number" placeholder="Number page  {0}" required><br><br>
    <button>List to number page</button>
</form>
<form action='/find.php' method='post'>
    <input type="text" name="id" placeholder="id">
    <button>Find to user</button>
</form>
<h2>Create user</h2>
<form action='/create.php' method='post'>
    <input type="text" name="login" placeholder="Login" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <input type="text" name="surname" placeholder="Surname" required><br>
    <input type="text" name="name" placeholder="Name" required><br><br>
    <input checked type="radio" id="male" name="gender" value="1">
    <label for='male'>male</label><br>
    <input type="radio" id="gerl" name="gender" value="0" >
    <label for='gerl'>gerl</label><br><br>
    <input type="date" name="birthday" required><br>
    <input type="post" name="post" placeholder="post" required><br>
    <button>Create</button>
</form>
<h2>Edit user</h2>
<form action="edit.php" method="post">
    <input type="text" name="id" placeholder="id" required><br>
    <input type="text" name="login" placeholder="Логин" required><br>
    <input type="password" name="password" placeholder="Пароль" required><br>
    <input type="text" name="surname" placeholder="Фамилия" required><br>
    <input type="text" name="name" placeholder="Имя" required><br><br>
    <input checked type="radio" id="male" name="gender" value="1">
    <label for='male'>male</label><br>
    <input type="radio" id="gerl" name="gender" value="0" >
    <label for='gerl'>gerl</label><br><br>
    <input type="date" name="birthday" required><br>
    <input type="post" name="post" placeholder="post" required><br>
    <button>Edit</button>
</form>
<h2>Delete user</h2>
<form action="delete.php" method="post">
    <input type="post" name="id" placeholder="id" required><br>
    <button>Delete</button>
</form>
</body>
</html>