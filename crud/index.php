<?php
require('database.php');

initMigration($pdo);

if($_SERVER['REQUEST_METHOD'] == "GET") {

    try {
        $statement = $pdo->prepare(
            'SELECT * FROM users;'
        );
        $statement->execute();

        
        $results = $statement->fetchAll(PDO::FETCH_OBJ);
        
        // echo "Read from table users<br>";

    } catch(PDOException $e) {
        echo "<h4 style = 'color: red;'>".$e->getMessage(). "</h4>";
    }
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
    <a href="create.php">Create User</a>
    <a href="/">Show All Users</a>
    <table>
        <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    
    <?php foreach($results as $user) { ?>
        <tr>
            <td><?php echo $user->id; ?> </td>
            <td><?php echo $user->first_name; ?></td>
            <td><?php echo $user->last_name; ?></td>
            <td><?php echo $user->age; ?></td>
            <td>
                <a href="/update.php?id=<?php echo $user->id; ?>">Edit</a>
            </td>
            <td>
                <a href="/delete.php?id=<?php echo $user->id; ?>" onclick="confirm()">Delete</a>
            </td>
        </tr>
        

    <?php }?>
    </table>  
</body>
</html>