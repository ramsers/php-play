<?php 

$total = 65;

if($total > 50 && $total < 100) {
    echo "You get a free soda";
} elseif ($total > 100) {
    echo "You get a free soda & T-Bone!";
} else {
    echo "Here is your purchase";
}

switch($total) {
    case $total > 50 && $total <= 100:
        echo "You get a free soda";
    break;
    case $total > 100:
        echo "You get a free soda & T-Bone";
    break;
    default:
    echo "Here is your purchase";
}

// if ($name == "Raheim") {
//     echo "Hi Raheim";
// } elseif ($name == "James"){
//     echo "Hi James";
// } elseif ($name == "Cyndia"){
//     echo "Hi James";
// } 
// else {
//     echo "who is you?";
// }
// $age = 19;
// switch ($age) {
//     case 21:
//         echo "You're old enough to drink";
//       break;
//     case $age == 18:
//         echo "You're old enough to smoke";
//       break;
//     case $age >= 18 && $age < 21:
//         echo "You're old enough to smoke but not to drink";
//       break;
//       default:
//       echo "Not old enough";
//   }

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <!-- <?php var_dump($totalComp); ?> -->
    </body>
    </html>