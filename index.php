<?php 

$firstName = "Raheim";
$lastName = "Bailey";

const full = "Raheim Bailey";

$car = "Honda Civic";

$car = "Mercedes Benz";

const plane = "Jet"; 

function printName () {
    // $car = "BMW";

    global $car;

    return $car;
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
        <?php echo "<h1>My car is ${car}</h1>"?>
        <?php echo "<h1>My name is " . full . "</h1>" ?>
        <?php echo $car; ?>
        <?php echo plane; ?>
        <?php echo printName(); ?>
    </body>
    </html>