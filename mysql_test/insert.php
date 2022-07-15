<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    #LastName {
        margin: 20px 0;
    }
    #age{
        margin-left: 40px;
        margin-bottom: 10px; 
    }
</style>
<body>
    <form method="post" action="select.php">
        <div>
            <label for="firstname">FirstName</label>
            <input type="text" name="firstname" id="FirstName">
        </div>
        <div>
            <label for="lastname">Last Name</label>
            <input type="text" name="lastname" id = "LastName">
        </div>
        <div>
            <label for="age">Age</label>
            <input type="number" id="age" name="age">
        </div>
        <input type="submit">
    </form>

    <?php
    $serverName = "localhost";
    $userName = "root";
    $password = "root";
    $db_name = "php_crud";

    $conn = new mysqli($serverName, $userName, $password, $db_name);
    if($conn->connect_error){
        echo "Connection Failed : ". $conn->connect_error;
    }

    $sql = "INSERT INTO mysql_test (FirstName, LastName, Age) VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[age]')";
    
    if($conn->query($sql) === TRUE){
        echo "New Record created Successfully";
    }else{
        echo "Error:".$sql."<br>".$conn->error;
    }
    
    
?>
</body>
</html>