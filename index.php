<?php 

    $mmaFighters = [
        [
            "name"=>"GSP",
            "age" => 33,
        ],
        [
            "name"=>"Anderson Silva",
            "age" => 40,
        ],
        [
            "name"=>"Jon Jones",
            "age" => 36,
        ],
        [
            "name"=>"Jorge Masvidal",
            "age" => 35
        ]
    ];

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php 
        
            forEach($mmaFighters as $fighter){
                echo "<hr>";
                echo "<h4>{$fighter["name"]} {$fighter["age"]}</h4";
                echo "<hr>";
            }
        
        ?>
    </body>
    </html>