<?php
require('database.php');

// Create new user

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $age = $_POST["age"];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple CRUD</title>
</head>
<body>
    <form action="/create.php" method="POST">

        <label for="first_name">First Name</label><br>
        <input type="text" name="first_name"><br>

        <label for="last_name">Last Name</label><br>
        <input type="text" name="last_name"><br>

        <label for="age">Age</label><br>
        <input type="text" name="age"><br>

        <button type="submit">Save</button>

    </form>
</body>
</html>