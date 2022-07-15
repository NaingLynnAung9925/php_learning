<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $serverName = 'localhost';
    $userName = 'root';
    $password = 'root';
    $db_name = 'php_crud';

    $conn = new mysqli($serverName, $userName, $password, $db_name);
    if($conn->connect_error){
        die("Connection Failed :". $conn->connect_error);
    }

    $sql = "UPDATE mysql_test SET LastName='Lone' WHERE id=2";
    
    if($conn->query($sql)){
        echo "Record updated successfully";
    }else {
        echo "Error Updating record :". $conn->error;
    }

    ?>

</body>
</html>