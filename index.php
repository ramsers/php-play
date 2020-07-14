<?php 

$car = "Honda";
$name="Raheim";

// Get Request

if(isset($_GET["username"])) {
    echo "<h1>username: {$_GET["username"]}</h1>";
    echo "<h1>lastname: {$_GET["lastname"]}</h1>";
    echo "<h1>age: {$_GET["age"]}</h1>";
};


// Post Request

if(isset($_POST["username"])) {
    echo $_POST["username"];
}
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
     <form action="index.php" method="POST">
        <label for="username">username</label>
        <input type="text" name="username">
        <input type="password" name="password">


        <button type="submit">Submit</button>
     </form>
    </body>
    </html>